<?php
/**
 * 注册自加载函数
 *
 * @author WeekTrip<weektrip@weektrip.cn>
 */
spl_autoload_register('autoload');

function autoload($class)
{
  require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
}
