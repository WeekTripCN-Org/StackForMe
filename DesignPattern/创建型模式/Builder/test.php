<?php
/**
 * 创建型模式 - PHP建造者模式
 *
 * 简单对象构建复杂对象
 * 基本组件不变，但是组件之间的组合方式善变
 *
 * 构建手机和MP3
 * // 手机构成
 * 手机 => 名称，硬件，软件
 * // 硬件又由以下硬件构成
 * 硬件 => 屏幕，CPU，内存，存储，摄像头
 * // 软件又由以下组成
 * 软件 => Android，Ubuntu
 *
 * // MP3构成
 * 手机 => 名称，硬件，软件
 * 硬件 => cpu，内存，存储
 * 软件 => MP3 OS
 *
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once(dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

use builder\PhoneBuilder;
use builder\Mp3Builder;

// 创建一个 PhoneBuilder 生产一款手机
$builder = new PhoneBuilder('Iphone8', [
    'screen'    => '5.5',
    'cpu'       => 'A10',
    'ram'       => '8G',
    'storage'   => '128',
    'camera'    => '2000w'
], ['os' => 'Iphone A10']);

echo "\n";
echo "--------------\n";
echo "\n";

$builder = new Mp3Builder('MP3', [
    'cpu'       => 1,
    'ram'       => 1,
    'storage'   => 128
], ['os' => 'Mp3 os']);