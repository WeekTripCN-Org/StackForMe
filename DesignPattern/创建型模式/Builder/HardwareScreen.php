<?php

namespace builder;

/**
 * Class HardwareScreen
 *
 * @package \builder
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class HardwareScreen implements Hardware
{
    public function produce($size = '5.0')
    {
        echo "Screen size: " . $size . ".\n";
    }
}