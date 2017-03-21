<?php
/**
 * IOC容器依赖注入模式
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once(dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

$trafficTool = new \inversionOfControl\Leg();

$tra = new \inversionOfControl\Traveller($trafficTool);
$tra->visitTibet();

//use inversionOfControl\Container;
//
//$app = new Container();
//
//// 完成容器的填充
//$app->bind("Visit", "Train");
//$app->bind("traveller", "Traveller");
//
//// 通过容器实现依赖注入，完成类的实例化
//$tra = $app->make('traveller');
//$tra->visitTibet();