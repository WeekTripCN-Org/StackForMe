<?php 
/**
 * 创建型模式 - 原型模式 （用于创建对象成本过高时）
 *
 * @author WeekTrip<weektrip@weektrip.cn>
 */
 //加载自加载函数
require_once(dirname($_SERVER['SCRIPT_FILENAME']).'//..//../autoload.php');

use prototype\Prototype;

//创建一个原型对象
$prototype = new Prototype();

//获取一个原型的clone
$prototypeCloneOne = $prototype->getPrototype();
$prototypeCloneOne->_name = 'one';
$prototypeCloneOne->getName();

$prototypeCloneTwo = $prototype->getPrototype();
$prototypeCloneTwo->_name = 'two';
$prototypeCloneTwo->getName();

//再次获取$prototypeCloneOne的名称
$prototypeCloneOne->getName();