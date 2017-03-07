<?php
namespace factory;

/**
 * 农场 - 生产动物
 */
class Farm implements Factory
{
    /**
     * 构造函数
     *
     * @return string
     */
    public function __construct()
    {
        echo "Init Farm now.\n";
    }

    /**
     * 生产方法
     *
     * @param string $type 动物类型
     * @return mixed
     */
    public function produce($type = '')
    {
        switch ($type) {
            case 'chicken':
                return new Chicken();
                break;

            case 'pig':
                return new Pig();
                break;

            default:
                echo "Don't support this type of {$type}. \n";
                break;
        }
    }
}
