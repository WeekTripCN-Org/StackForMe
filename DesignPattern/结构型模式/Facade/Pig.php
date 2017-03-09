<?php

namespace facade;

/**
 * Class Pig
 *
 * @package \facade
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Pig implements AnimalInterface
{
    public function produce()
    {
        echo "One Pig~ \n";
    }
}