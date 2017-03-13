<?php

namespace command;

/**
 * Class OrderCreate
 *
 * @package \command
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class OrderCreate implements Order
{
    private $_text;

    private $_arguments = [
        'filename' => ''
    ];

    public function __construct(Text $text, $arguments=[])
    {
        $this->_text        = $text;
        $this->_arguments   = $arguments;
    }

    public function execute()
    {
        $this->_text->create($this->_arguments['filename']);
    }
}