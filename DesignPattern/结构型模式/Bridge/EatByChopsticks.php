<?php

namespace bridge;

/**
 * 用筷子实体
 *
 * @package \bridge
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class EatByChopsticks implements EatInterface
{
    public function eat($food = '')
    {
        echo "Use chopticks eat {$food}\n";
    }
}