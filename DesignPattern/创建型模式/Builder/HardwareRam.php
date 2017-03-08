<?php

namespace builder;

/**
 * Class HardwareRam
 *
 * @package \builder
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class HardwareRam implements Hardware
{
    public function produce($size = 8)
    {
        echo "Ram size: " . $size . " G.\n";
    }
}