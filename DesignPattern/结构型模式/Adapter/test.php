<?php
/**
 * 结构型模式 - 适配器模式
 * 把实现不同接口的对象通过适配器的方式组合起来放在一个新的环境
 * @author WeekTrip<weektrip@weektrip.cn>
 */

require_once (dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

use adapter\AudioPlayer;

try {
    // 生产一台设备
    $mp4 = new AudioPlayer();
    // 播放MP3
    $mp4->play('Sun', 'mp3');
    // 播放wma
    $mp4->play('Sun', 'wma');
    // 播放mp4
    $mp4->play('Sun', 'mp4');
} catch (\Exception $e) {
    echo $e->getMessage();
}
