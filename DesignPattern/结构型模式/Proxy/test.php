<?php
/**
 * 结构型模式 - 代理器模式
 * 对对象加以控制
 * 和适配器的区别：适配器是连接俩个接口
 * 和装饰器的区别：装饰器是对现有对象的包装
 * @author WeekTrip<weektrip@weektrip.cn>
 */

require_once (dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

use proxy\Proxy;
use proxy\ShoesSport;
use proxy\ShoesSkateboard;

try {
    echo "Behind add proxy:\n";

    $shoesSport = new ShoesSport();
    $shoesSport->product();

    echo "\n------------------------\n";

    echo "After add proxy:\n";
    $proxy = new proxy('sport');
    $proxy->product();
} catch (\Exception $e) {
    echo $e->getMessage();
}

