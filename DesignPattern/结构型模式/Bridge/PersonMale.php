<?php

namespace bridge;

/**
 * 男人实类
 * Class PersonMale
 *
 * @package \bridge
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class PersonMale extends PersonAbstract
{
    /**
     * 吃的具体方式
     * @param string $food
     * @return string
     */
    public function eat($food = '')
    {
        $this->_tool->eat($food);
    }
}