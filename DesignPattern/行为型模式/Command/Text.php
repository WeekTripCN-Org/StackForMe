<?php

namespace command;

/**
 * Class Text
 *
 * @package \command
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Text
{
    public function create($filename = '')
    {
        echo "Create a file: {$filename} \n";
    }

    public function write($filename = '', $content = '')
    {
        echo "File {$filename} write {$content} \n";
    }

    public function save($filename = '')
    {
        echo "Save a file: {$filename} \n";
    }
}