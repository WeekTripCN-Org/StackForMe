<?php

namespace state;

/**
 * Class FarmSpring
 *
 * @package \state
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class FarmSpring implements Farm
{
    private $_name = 'rice';

    public function grow()
    {
        echo "Grow {$this->_name} \n";
    }

    public function havest()
    {
        echo "Havest {$this->_name} \n";
    }
}