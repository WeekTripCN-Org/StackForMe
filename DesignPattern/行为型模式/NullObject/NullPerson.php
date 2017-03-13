<?php

namespace nullObject;

/**
 * Class NullPerson
 *
 * @package \nullObject
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class NullPerson extends Person
{
    public function doSomething($person)
    {
        echo "Is this a null...\n";
    }
}