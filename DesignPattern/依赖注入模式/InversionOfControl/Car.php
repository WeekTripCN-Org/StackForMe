<?php

namespace inversionOfControl;

/**
 * Class Car
 *
 * @package \inversionOfControl
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Car implements Visit
{
    public function go()
    {
        echo "Driver car to Tibet!!";
    }
}