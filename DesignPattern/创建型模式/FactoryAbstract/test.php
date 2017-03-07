<?php
/**
 * 创建型模式 - php抽象工厂模式
 *
 * @author WeekTrip<weektrip@weektrip.cn>
 */
 //加载自加载函数
require_once(dirname($_SERVER['SCRIPT_FILENAME']).'//..//../autoload.php');

use factoryAbstract\AnimalFactory;
use factoryAbstract\PlantFactory;

//初始化一个动物生产线，包含了一族产品
$animal = new AnimalFactory();

//初始化一个植物生产线，包含了一族产品
$plant = new PlantFactory();

//模拟调用，抽象工厂模式 核心是面向接口编程
function call(factoryAbstract\Factory $factory)
{
    $earn = function(factoryAbstract\Income $income) {
        $income->money();
    };
    $earn($factory->createFarm());
    $earn($factory->createZoo());
}

call($animal);
call($plant);
