<?php

namespace strategy;

/**
 * Class StrategyExampleTwo
 *
 * @package \strategy
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class StrategyExampleTwo implements StrategyInterface
{
    public function doSomething()
    {
        echo "You choose strategyExampleTwo. \n";
    }
}