<?php

namespace command;

/**
 * Class Console
 *
 * @package \command
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Console
{
    //命令队列
    private $_orderList = [];

    public function add(Order $order)
    {
        array_push($this->_orderList, $order);
    }

    public function run()
    {
        foreach ($this->_orderList as $k => $v) {
            $v->execute();
        }
    }
}