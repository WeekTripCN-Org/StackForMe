<?php

namespace bridge;

/**
 * 人抽象类
 *
 * @package \bridge
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
abstract  class PersonAbstract
{
    protected $_gender = ''; //性别
    protected $_tool   = ''; //工具

    /**
     * PersonAbstract constructor.
     * @param string       $gender
     * @param EatInterface $tool
     */
    public function __construct($gender='', EatInterface $tool)
    {
        $this->_gender = $gender;
        $this->_tool   = $tool;
    }

    /**
     * 吃的行为
     * @param string $food
     * @return mixed
     */
    abstract public function eat($food = '');
}