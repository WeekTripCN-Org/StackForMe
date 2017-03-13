<?php

namespace visitor;

/**
 * Class VisitorAsia
 *
 * @package \visitor
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class VisitorAsia implements VisitorInterface
{
    public function eat()
    {
        echo "Asia, We are eat Rice~\n";
    }
}