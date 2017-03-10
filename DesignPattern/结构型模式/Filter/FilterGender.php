<?php

namespace filter;

/**
 * Class FilterGender
 *
 * @package \filter
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class FilterGender implements FilterInterface
{
    private  $_gender = '';

    public function __construct($gender = '')
    {
        $this->_gender = $gender;
    }

    public function filter(array $person)
    {
        foreach ($person as $k => $v) {
            if ($v->gender === $this->_gender) {
                $personFilter[] = $person[$k];
            }
        }
        return $personFilter;
    }
}