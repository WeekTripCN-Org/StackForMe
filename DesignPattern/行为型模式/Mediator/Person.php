<?php

namespace mediator;

/**
 * Class Person
 *
 * @package \mediator
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
abstract class Person
{
    private $_name = '';

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function __get($name)
    {
        $name = '_' . $name;
        return $this->$name;
    }

    abstract function doSomething(Person $person);
}