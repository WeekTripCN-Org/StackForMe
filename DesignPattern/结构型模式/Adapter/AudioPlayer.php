<?php

namespace adapter;

/**
 * Class AudioPlayer
 *
 * @package \adapter
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class AudioPlayer implements MediaInterface
{
    public function play($file = '', $type = '')
    {
        switch ($type) {
            case 'mp3':
                echo 'playing file: ' . $file . ".mp3 \n";
                break;
            case 'mp4':
            case 'wma':
                $adapter = new Adapter($type);
                $adapter->play($file);
                break;
            default:
                throw new \Exception("{$type} is not supported \n");
                break;
        }
    }
}