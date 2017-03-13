<?php

namespace observer;

/**
 * Class ObserverExampleOne
 *
 * @package \observer
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class ObserverExampleOne implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo $subject->getMessage() . "Notify One.\n";
    }
}