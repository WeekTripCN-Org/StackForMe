<?php

namespace state;

/**
 * Class FarmAutumn
 *
 * @package \state
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class FarmAutumn implements Farm
{
    private $_name = 'carbudge';

    public function grow()
    {
        echo "Grow {$this->_name} \n";
    }

    public function havest()
    {
        echo "Havest {$this->_name} \n";
    }
}