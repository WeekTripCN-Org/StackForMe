<?php

namespace memento;

/**
 * Class Editor
 *
 * @package \memento
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Editor
{
    private $_content = '';

    private $_memento;

    public function __construct($content)
    {
        $this->_content = $content;
        //打印初始内容
        $this->read();

        //初始化备忘录插件
        $this->_memento = new Memento();
        //第一次打开编辑器自动保存一次以提供重置状态操作
        $this->save($content);
    }

    /**
     * 写入内容
     * @param string $value
     */
    public function write($value = '')
    {
        $this->_content .= $value;
        $this->read();
    }

    public function read()
    {
        echo $this->_content ? $this->_content . "\n" : "Empty text \n";
    }

    public function save()
    {
        $this->_memento->add(clone $this);
    }

    /**
     * 后退
     */
    public function undo()
    {
        //获取上个状态
        $undo = $this->_memento->undo();
        //重置当前状态为上个状态
        $this->_content = $undo->_content;
    }

    /**
     * 复原
     */
    public function redo()
    {
        //获取开始状态
        $undo = $this->_memento->redo();
        //重置当前状态为开始状态
        $this->_content = $undo->_content;
    }
}