<?php

namespace adapter;

/**
 * Class AdvanceMp4Player
 *
 * @package \adapter
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class AdvanceMp4Player implements  MediaAdvanceInterface
{
    public function playMp4($file = '')
    {
        echo "AdvanceMp4Play driver playing~ \n";
    }

    public function playWma($file = '')
    {
        // TODO: Implement playWma() method.
    }
}