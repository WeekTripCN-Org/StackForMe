<?php

namespace builder;

/**
 * Class HardwareCpu
 *
 * @package \builder
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class HardwareCpu implements Hardware
{
    public function produce($quantity = 8)
    {
        echo "Cpu core: " . $quantity . " core.\n";
    }
}