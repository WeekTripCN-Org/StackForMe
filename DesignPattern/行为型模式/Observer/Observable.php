<?php

namespace observer;

/**
 * Class Observable
 *
 * @package \observer
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Observable implements \SplSubject
{
    private $_observers = [];
    private $_message = 'Notify:';

    /**
     * 附加观察者
     * @param \SplObserver $observer
     */
    public function attach(\SplObserver $observer)
    {
        if (!in_array($observer, $this->_observers, true)) {
            $this->_observers[] = $observer;
        }
    }

    /**
     * 解除观察者
     * @param \SplObserver $observer
     */
    public function detach(\SplObserver $observer)
    {
        foreach ($this->_observers as $k => $v) {
            if ($v === $observer) {
                unset($this->_observers[$k]);
            }
        }
    }

    /**
     * 通知观察者
     */
    public function notify()
    {
        foreach ($this->_observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * 获取信息
     * @return string
     */
    public function getMessage()
    {
        return $this->_message;
    }

    public function setMessage($msg)
    {
        $this->_message = $msg;
    }

}