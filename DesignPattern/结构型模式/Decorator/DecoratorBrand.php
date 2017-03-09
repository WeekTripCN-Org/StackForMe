<?php

namespace decorator;

/**
 * Class DecoratorBrand
 *
 * @package \decorator
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class DecoratorBrand extends Decorator
{
    private $_brand;

    public function __construct(ShoesInterface $shoes)
    {
        $this->shoes = $shoes;
    }

    public function __set($name = '', $value= '')
    {
        $this->name = $value;
    }

    public function produce()
    {
        $this->shoes->produce();
        $this->decorate($this->_brand);
    }

    public function decorate($value = '')
    {
        echo "Tap {$value} Brand. \n";
    }
}