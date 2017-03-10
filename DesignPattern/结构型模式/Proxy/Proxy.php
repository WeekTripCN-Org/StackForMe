<?php

namespace proxy;

use Exception;
/**
 * Class Proxy
 *
 * @package \proxy
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Proxy
{
    // 产品生成线对象
    private $_shoes;
    // 产品生产线类型
    private $_shoesType;

    public function __construct($shoesType)
    {
        $this->_shoesType = $shoesType;
    }

    public function product()
    {
        switch ($this->_shoesType) {
            case 'sport':
                echo "ShoesType sport\n";
                $this->_shoes = new ShoesSport();
                break;
            case 'skateboard':
                echo "ShoesType skateboard\n";
                $this->_shoes = new ShoesSkateboard();
                break;
            default:
                throw new Exception("Shoes type is not available", 404);
                break;
        }
        $this->_shoes->product();
    }
}