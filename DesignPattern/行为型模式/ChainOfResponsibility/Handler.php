<?php

namespace chainOfResponsibility;

/**
 * Class Handler
 *
 * @package \chainOfResponsibility
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
abstract class Handler
{
    // 下一个handler对象
    private $_nextHandler;

    /**
     * 校验方法
     * @param Request $request
     * @return mixed
     */
    abstract public function Check(Request $request);

    /**
     * 设置责任链的下一个对象
     * @param Handler $handler
     * @return Handler
     */
    public function setNext(Handler $handler)
    {
        $this->_nextHandler = $handler;
        return $handler;
    }

    /**
     * 启动
     * @param Request $request
     */
    public function start(Request $request)
    {
        $this->Check($request);
        //调用下一个对象
        if (!empty($this->_nextHandler)) {
            $this->_nextHandler->start($request);
        }
    }
}