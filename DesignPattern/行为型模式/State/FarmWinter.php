<?php

namespace state;

/**
 * Class FarmWinter
 *
 * @package \state
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class FarmWinter implements Farm
{
    private $_name = 'follows';

    public function grow()
    {
        echo "Grow {$this->_name} \n";
    }

    public function havest()
    {
        echo "Havest {$this->_name} \n";
    }
}