<?php

namespace strategy;

/**
 * 策略实例
 * Class Substance
 *
 * @package \strategy
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Substance
{
    private $_strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->_strategy = $strategy;
    }

    public function someOperation()
    {
        $this->_strategy->doSomething();
    }
}