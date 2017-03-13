<?php
/**
 * 行为型模式 - 观察者模式
 * 观察者观察被观察者，被观察者通知观察者
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

// 注册一个被观察者对象
$observable = new \observer\Observable();
//注册观察者们
$observerExampleOne = new \observer\ObserverExampleOne();
$observerExampleTwo = new \observer\ObserverExampleTwo();

//附加观察者
$observable->attach($observerExampleOne);
$observable->attach($observerExampleTwo);

//被观察者通知观察者们
$observable->notify();