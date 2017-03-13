<?php

namespace nullObject;

/**
 * Class Teacher
 *
 * @package \nullObject
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Teacher extends Person
{
    public function doSomething($person)
    {
        if (!$person instanceof Student) {
            $person = new NullPerson('');
        }
        $person->doSomething($this);
    }
}