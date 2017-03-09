<?php

namespace decorator;

/**
 * Class Decorator
 *
 * @package \decorator
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
abstract class Decorator implements ShoesInterface
{
    // 产品生产线对象
    protected $shoes;

    // 构造函数
    public function __construct(ShoesInterface $shoes)
    {
        $this->shoes = $shoes;
    }

    // 生产
    public function produce()
    {
        $this->shoes->produce();
    }

    // 装饰操作
    abstract public function decorate($value);
}