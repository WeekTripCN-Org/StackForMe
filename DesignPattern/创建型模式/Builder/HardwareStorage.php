<?php

namespace builder;

/**
 * Class HardwareStorage
 *
 * @package \builder
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class HardwareStorage implements Hardware
{
    public function produce($size = '8')
    {
        echo "Storage size: " . $size . "G.\n";
    }
}