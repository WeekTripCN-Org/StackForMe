<?php

namespace command;

/**
 * Class OrderSave
 *
 * @package \command
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class OrderSave implements Order
{
    private $_text;

    private $_argument = [
        'filename' => '',
    ];

    public function __construct(Text $text, $arguments=[])
    {
        $this->_text    = $text;
        $this->_argument= $arguments;
    }

    public function execute()
    {
        $this->_text->save($this->_argument['filename']);
    }
}