<?php
/**
 * 行为型模式 - 中介者模式
 * 就是不同的对象之间通信，互相之间不直接调用，而是通过一个中间者
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

use mediator\Tenant;
use mediator\Landlord;
use mediator\HouseMediator;

try {
    // 初始化一个租客
    $tenant = new Tenant('Hary');

    $landlord = new Landlord('Fangdong');
    echo $landlord->doSomething($tenant);

    $mediator = new HouseMediator();
    $mediator->rentHouse($tenant);

} catch (\Exception $e) {
    echo $e->getMessage();
}