<?php
/**
 * 行为型模式 - 策略模式
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']).'//..//../autoload.php');

use strategy\Substance;
use strategy\StrategyExampleOne;
use strategy\StrategyExampleTwo;

$substanceOne = new Substance(new StrategyExampleOne);
$substanceOne->someOperation();

$substanceTwo = new Substance(new StrategyExampleTwo);
$substanceTwo->someOperation();
