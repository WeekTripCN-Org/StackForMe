<?php

namespace filter;

/**
 * Class FilterSportType
 *
 * @package \filter
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class FilterSportType implements FilterInterface
{
    private $_sportType = '';

    public function __construct($sportType)
    {
        $this->_sportType = $sportType;
    }

    public function filter(array $person)
    {
        foreach ($person as $k => $v) {
            if ($v->sportType === $this->_sportType) {
                $personFilter[] = $person[$k];
            }
        }
        return $personFilter;
    }
}