<?php

namespace observer;

/**
 * Class ObserverExampleTwo
 *
 * @package \observer
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class ObserverExampleTwo implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo $subject->getMessage() . "Notify two.\n";
    }
}