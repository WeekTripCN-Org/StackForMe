<?php

namespace flyweight;

/**
 * Class Pig
 *
 * @package \flyweight
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Pig implements AnimalInterface
{
    private $_type = '';

    public function __construct()
    {
    }

    public function getType()
    {
        echo "This is a pig.\n";
    }
}