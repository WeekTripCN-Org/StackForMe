<?php
/**
 * 结构型模式 - 外观模式
 * 把系统中类的调用委托给一个单独的类，对外隐藏了内部的复杂性
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

use facade\AnimalMaker;

$animalMaker = new AnimalMaker();

$animalMaker->producePig();

$animalMaker->produceChicken();
