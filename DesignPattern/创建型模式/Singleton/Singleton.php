<?php
namespace singleton;

/**
 * 单例模式Singleton类
 *
 * @author WeekTrip<weektrip@weektrip.cn>
 */
class Singleton
{
  /**
   * 自身实例
   *
   * @var object
   */
   private static $_instance;

   /**
    * 构造函数
    *
    * @return void
    */
    private function __construct()
    {
        # code
    }

    /**
     * 禁止clone对象
     *
     * @return string
     */
    public function __clone()
    {
        echo "Clone is forbidden";
    }

    /**
     * 获取实例
     *
     * @return object
     */
    public static function getInstance()
    {
        if (!self::$_instance instanceof self) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    /**
     * 测试方法
     *
     * @return string
     */
    public function test()
    {
        echo "This is a test\n";
    }

}
