<?php

namespace nullObject;

/**
 * Class Student
 *
 * @package \nullObject
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Student extends Person
{
    function doSomething($person)
    {
        echo "Teacher {$person->name} let student {$this->name} anwser a question\n";
    }
}