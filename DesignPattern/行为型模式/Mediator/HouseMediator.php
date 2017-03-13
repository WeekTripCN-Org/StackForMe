<?php

namespace mediator;

/**
 * Class HouseMediator
 *
 * @package \mediator
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class HouseMediator
{
    function rentHouse(Person $person)
    {
        $landlord = new Landlord('Fangdong');
        echo "By renter, " . $landlord->doSomething($person);
    }
}