<?php
/**
 * 行为型模式 - 访问者模式
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

use visitor\Person;
use visitor\VisitorAsia;
use visitor\VisitorAmerica;

$person = new Person();

$person->eat(new VisitorAsia());

$person->eat(new VisitorAmerica());