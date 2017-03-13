<?php

namespace memento;

/**
 * Class Memento
 *
 * @package \memento
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Memento
{
    // 备忘录列表
    private $_mementoList = [];

    /**
     * 添加编辑器实例状态
     * @param Editor $editor
     */
    public function add(Editor $editor)
    {
        array_push($this->_mementoList, $editor);
    }

    public function undo()
    {
        return array_pop($this->_mementoList);
    }

    public function redo()
    {
        return array_shift($this->_mementoList);
    }
}