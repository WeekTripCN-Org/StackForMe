<?php

namespace bridge;

/**
 * 用叉子吃
 *
 * @package \bridge
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class EatByFork implements EatInterface
{
    public function eat($food = '')
    {
        echo "Use fork eat {$food} \n";
    }
}