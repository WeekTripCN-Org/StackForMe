<?php

namespace state;

/**
 * Class FarmSummer
 *
 * @package \state
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class FarmSummer implements Farm
{
    private $_name = 'waterBall';

    public function grow()
    {
        echo "Grow {$this->_name} \n";
    }

    public function havest()
    {
        echo "Havest {$this->_name} \n";
    }
}