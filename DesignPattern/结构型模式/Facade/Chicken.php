<?php

namespace facade;

/**
 * Class Chicken
 *
 * @package \facade
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Chicken implements AnimalInterface
{
    public function produce()
    {
        echo "One Chicken~ \n";
    }
}