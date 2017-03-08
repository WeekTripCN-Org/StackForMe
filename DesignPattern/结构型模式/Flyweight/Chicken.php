<?php

namespace flyweight;

/**
 * Class Chicken
 *
 * @package \flyweight
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Chicken implements AnimalInterface
{
    //类别
    private $_type = '';

    public function __construct()
    {

    }

    /**
     * 获取类型
     */
    public function getType()
    {
        echo "This a chicken~\n";
    }
}