<?php

namespace filter;

/**
 * Class SportPerson
 *
 * @package \filter
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class SportPerson
{
    private $_gender = '';
    private $_sportType = '';

    public function __construct($gender = '', $sportType = '')
    {
        $this->_sportType = $sportType;
        $this->_gender = $gender;
    }

    public function __get($value = '')
    {
        $value = '_' . $value;
        return $this->$value;
    }
}