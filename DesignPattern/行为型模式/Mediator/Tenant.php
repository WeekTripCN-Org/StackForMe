<?php

namespace mediator;

/**
 * Class Tenant
 *
 * @package \mediator
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Tenant extends Person
{
    public function doSomething(Person $person)
    {
        $houseMediator = new HouseMediator();
        $houseMediator->rentHouse($this);
    }
}