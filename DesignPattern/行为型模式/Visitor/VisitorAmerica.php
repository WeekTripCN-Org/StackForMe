<?php

namespace visitor;

/**
 * Class VisitorAmerica
 *
 * @package \visitor
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class VisitorAmerica implements VisitorInterface
{
    public function eat()
    {
        echo "America, We eat hot dog~\n";
    }
}