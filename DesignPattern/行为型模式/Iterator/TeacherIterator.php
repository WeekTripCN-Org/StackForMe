<?php

namespace iterator;

/**
 * Class TeacherIterator
 *
 * @package \iterator
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class TeacherIterator implements Iterator
{
    private $_index = 0;
    private $_teachers;

    public function __construct(School $school)
    {
        $this->_teachers = $school->teachers;
    }

    public function hasNext()
    {
        if ($this->_index < count($this->_teachers)) {
            return true;
        }
        return false;
    }

    public function next()
    {
        if (!$this->hasNext()) {
            echo NULL;
            return;
        }
        $index = $this->_index + 1;
        echo $this->_teachers[$index];
    }

    public function current()
    {
        if (!isset($this->_teachers[ $this->_index ])) {
            echo NULL;
            return;
        }
        $current= $this->_teachers[$this->_index];
        $this->_index += 1;
        echo $current . "\n";
    }

    public function index()
    {
        echo $this->_index;
    }
}