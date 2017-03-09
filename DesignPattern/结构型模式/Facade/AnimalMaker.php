<?php

namespace facade;

/**
 * Class AnimalMaker
 *
 * @package \facade
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class AnimalMaker
{
    private $_chicken;
    private $_pig;

    public function __construct()
    {
        $this->_chicken = new Chicken();
        $this->_pig     = new Pig();
    }

    public function produceChicken()
    {
        $this->_chicken->produce();
    }

    public function producePig()
    {
        $this->_pig->produce();
    }
}