<?php
namespace factory;

/**
 * 实体猪
 *
 * @author WeekTrip<weektrip@weektrip.cn>
 */
class Pig implements AnimalInterface
{
    /**
     * 构造函数
     *
     * @return string
     */
    public function __construct()
    {
        echo "Produce a pig.\n";
    }
}
