<?php

namespace inversionOfControl;

/**
 * Class Container
 * 设计容器类，容器类装实例或提供实例的回调函数
 *
 * @package \inversionOfControl
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Container
{
    //用于装提供实例的回调函数，真正的容器还会装实例等其他内容
    protected $bindings = [];

    /**
     * 绑定接口和生成相对应实例的回调函数
     * @param      $abstract
     * @param      $concrete
     * @param bool $shared
     */
    public function bind($abstract, $concrete = null, $shared = false)
    {
        if (!$concrete instanceof \Closure) {
            $concrete = $this->getClosure($abstract, $concrete);
        }
//        $this->bindings[$abstract] = compact('concrete', 'shared');
    }

    /**
     * 生成默认实例的回调函数
     * @param $abstract
     * @param $concrete
     * @return \Closure
     */
    protected function getClosure($abstract, $concrete)
    {
        return function ($c) use ($abstract, $concrete)
        {
            $method = ($abstract == $concrete) ? 'build' : 'make';
            // 调用的是容器的build或make方法生成实例
            return $c->$method($concrete);
        };
    }

    /**
     * 生成实例对象，首先解决接口和实例化类之间的依赖关系
     * @param $abstract
     */
    public function make($abstract)
    {
        $concrete = $this->getConcrete($abstract);
        if ($this->isBuildable($concrete, $abstract)) {
            $object = $this->bind($concrete);
        } else {
            $object= $this->make($concrete);
        }
        return $object;
    }

    protected function isBuildable($concrete, $abstract)
    {
        return $concrete === $abstract || $concrete instanceof \Closure;
    }

    /**
     * 获取绑定的回调函数
     * @param $abstract
     * @return mixed
     */
    protected function getConcrete($abstract)
    {
        if (!isset($this->bindings[ $abstract ])) {
            return $abstract;
        }
        return $this->bindings[$abstract]['concrete'];
    }

    /**
     * 实例化对象
     * @param $concrete
     * @return object
     */
    public function build($concrete)
    {
        if ($concrete instanceof \Closure) {
            return $concrete($this);
        }
        $reflector = new \ReflectionClass($concrete);
        if (!$reflector->isInstantiable()) {
            echo $message = "Target {$concrete} is not instantiable.";
        }

        $constructor = $reflector->getConstructor();
        if (is_null($constructor)) {
            return new $concrete;
        }
        $dependencies = $constructor->getParameters();
        $instances = $this->getDependencies($dependencies);
        return $reflector->newInstanceArgs($instances);
    }

    protected function getDependencies($parameters)
    {
        $dependencies = [];
        foreach ($parameters as $parameter)
        {
            $dependency = $parameter->getClass();
            if (is_null($dependency)) {
                $dependencies[] = NULL;
            } else {
                $dependencies[] = $this->resolveClass($parameter);
            }
        }
        return (array) $dependencies;
    }

    protected function resolveClass(\ReflectionParameter $parameter)
    {
        return $this->make($parameter->getClass()->name);
    }
}