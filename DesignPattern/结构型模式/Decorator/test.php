<?php
/**
 * 结构型模型 - 装饰器模式
 * 对现有的对象增加功能
 * 和适配器的区别： 适配器是连接俩个接口，装饰器是对现有的对象包装
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

use decorator\DecoratorBrand;
use decorator\ShoesSport;
use decorator\ShoesSkateboard;

try {
    echo "Behind add decorator: \n";
    // 生产运动鞋
    $shoesSport = new ShoesSport();
    $shoesSport->produce();

    echo "\n--------------------\n";

    echo "Add decorator brand: \n";

    // 初始化一个贴标签适配器
    $decoratorBrand = new DecoratorBrand(new ShoesSport());
    $decoratorBrand->_brand = 'nike';
    // 生产nike牌运动鞋
    $decoratorBrand->produce();
} catch (Exception $e) {
    echo $e->getMessage();
}
