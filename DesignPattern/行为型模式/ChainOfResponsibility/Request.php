<?php

namespace chainOfResponsibility;

/**
 * Class Request
 *
 * @package \chainOfResponsibility
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Request
{
    //请求对象身份标识
    private $_requestId = '';

    /**
     * 魔术方法 设置私有属性
     * @param $name     属性名称
     * @param $value    属性值
     */
    public  function __set($name, $value)
    {
        $name = '_' . $name;
        $this->$name = $value;
    }

    /**
     * 魔术方法 获取私有属性
     * @param $name 属性名称
     * @return mixed
     */
    public function __get($name)
    {
        $name = '_' . $name;
        return $this->$name;
    }
}