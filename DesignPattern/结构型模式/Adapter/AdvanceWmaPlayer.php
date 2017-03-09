<?php

namespace adapter;

/**
 * Class AdvanceWmaPlayer
 *
 * @package \adapter
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class AdvanceWmaPlayer implements MediaAdvanceInterface
{
    public function playMp4($file = '')
    {
        // TODO: Implement playMp4() method.
    }

    public function playWma($file = '')
    {
        echo "AdvancePlayer driver playing~ \n";
    }
}