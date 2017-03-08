<?php

namespace flyweight;

/**
 * Class Farm
 *
 * @package \flyweight
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Farm
{
    // 对象缓存池
    private $_farmMap = [];

    public function __construct()
    {
        echo "---------- Init Farm ----------\n\n";
    }

    public function produce($type = '')
    {
        if (key_exists($type, $this->_farmMap)) {
            echo "From cache pool -> ";
            return $this->_farmMap[$type];
        }

        switch ($type) {
            case 'chicken':
                return $this->_farmMap[$type] = new Chicken();
                break;

            case 'pig':
                return $this->_farmMap[$type] = new Pig();
                break;

            default:
                echo "This is not support the animals~\n";
                break;
        }
    }
}