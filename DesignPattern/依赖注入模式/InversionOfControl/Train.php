<?php

namespace inversionOfControl;

/**
 * Class Train
 *
 * @package \inversionOfControl
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Train implements Visit
{
    public function go()
    {
        echo "Go to Tibet by train!";
    }
}