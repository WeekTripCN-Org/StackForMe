<?php

namespace builder;

/**
 * Class HardwareCamera
 *
 * @package \builder
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class HardwareCamera implements Hardware
{
    public function produce($pixel = 32)
    {
        echo "Camara pixel: " . $pixel . "pixel.\n";
    }
}