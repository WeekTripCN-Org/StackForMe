<?php

namespace mediator;

/**
 * Class Landlord
 *
 * @package \mediator
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Landlord extends Person
{
    public function doSomething(Person $person)
    {
        return "'{$this->name}' rent house to '{$person->name}' \n";
    }
}