<?php
namespace factory;

/**
 * 简单动物工厂
 * 无需实现动物工厂接口
 * 生产动物
 *
 * @author WeekTri<weektrip@weektrip.cn>
 */
class SampleFactory
{
    /**
     * 生产方法
     *
     * @param string $type 动物类型
     * @return mixed
     */
    public static function produce($type = '')
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
