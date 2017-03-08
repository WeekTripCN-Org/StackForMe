<?php

namespace builder;

/**
 * Class SoftwareOs
 *
 * @package \builder
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class SoftwareOs implements Software
{
    public function produce($os = 'Iphone')
    {
    	echo "OS:" . $os . "\n";
    }
}