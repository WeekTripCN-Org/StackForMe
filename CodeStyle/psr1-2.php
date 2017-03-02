<?php
/**
 * 符合psr-1,2的编程实例
 *
 * @author WeekTrip<weektrip@weektrip.cn>
 */

 namespace Standard; // 顶部命名空间
 // 空一行
 use Test\TestClass; // use引入类

 /**
  * 类描述
  *
  * 类名必须大写开头驼峰
  */
 abstract class ClassName extends AnotherClass // {}必须换行
 {
   /**
    * 常量描述
    *
    * @var string
    */
    const THIS_IS_A_CONST = ''; // 常量全部大写下划线分割
    
 }
