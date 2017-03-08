<?php
/**
 * 结构型模式 - 享元（轻量级）模式
 * @author WeekTrip<weektrip@weektrip.cn>
 */

require_once (dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

use flyweight\Farm;

$farm = new Farm();

$farm->produce('chicken')->getType();
$farm->produce('chicken')->getType();

