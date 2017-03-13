<?php

namespace visitor;


/**
 * Class Person
 *
 * @package \visitor
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Person implements AnimailInterface
{
    // 具体吃什么依照访问者而定
    public function eat(VisitorInterface $visitor)
    {
        $visitor->eat();
    }
}