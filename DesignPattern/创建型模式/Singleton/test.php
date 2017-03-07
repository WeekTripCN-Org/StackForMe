<?php
/**
 * 创建型模式 - 单例模式
 *
 *  @author WeekTrip<weektrip@weektrip.cn>
 */

 // 注册自加载
 spl_autoload_register('autoload');

 function autoload($class)
 {
   require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
 }

 use singleton\Singleton;

 // 获取单例
 $instance = Singleton::getInstance();
 $instance->test();

 // clone对象
 $instanceClone = clone $instance;

/**
 * 运行结果 php test.php
 *>> This is a test
 *>> Clone is forbidden
 */
