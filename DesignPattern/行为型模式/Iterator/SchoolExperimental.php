<?php

namespace iterator;

/**
 * Class SchoolExperimental
 *
 * @package \iterator
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class SchoolExperimental implements School
{
    private $_teachers = [];

    public function __get($name = '')
    {
        $name = '_' . $name;
        return $this->$name;
    }

    /**
     * 添加老师
     * @param string $name
     */
    public function addTeacher($name = '')
    {
        $this->_teachers[] = $name;
    }

    /**
     * 获取教师迭代器
     * @return TeacherIterator
     */
    public function getIterator()
    {
        return new TeacherIterator($this);
    }
}