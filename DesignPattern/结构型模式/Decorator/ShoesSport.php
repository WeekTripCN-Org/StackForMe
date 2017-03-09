<?php

namespace decorator;

/**
 * Class ShoesSport
 *
 * @package \decorator
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class ShoesSport implements ShoesInterface
{
    public function produce()
    {
        echo "Product a SportShoes \n";
    }
}