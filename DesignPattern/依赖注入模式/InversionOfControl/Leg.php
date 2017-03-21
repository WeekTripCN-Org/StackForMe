<?php

namespace inversionOfControl;

/**
 * Class Leg
 *
 * @package \inversionOfControl
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Leg implements Visit
{
    public function go()
    {
        echo 'Walk to Tibet!';
    }
}