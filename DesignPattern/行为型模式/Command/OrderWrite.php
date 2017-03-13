<?php

namespace command;

/**
 * Class OrderWrite
 *
 * @package \command
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class OrderWrite implements Order
{
    private $_text;

    private $_arguments = [
        'filename'  => '',
        'content'   => ''
    ];

    public function __construct(Text $text, $arguments=[])
    {
        $this->_text        = $text;
        $this->_arguments   = $arguments;
    }

    public function execute()
    {
        $this->_text->write(
            $this->_arguments['filename'],
            $this->_arguments['content']
        );
    }
}