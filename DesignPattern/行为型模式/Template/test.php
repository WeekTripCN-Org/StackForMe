<?php
/**
 * 行为型模式 - 模版模式
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']).'//..//../autoload.php');

use template\SmsCompanyOne;
use template\SmsCompanyTwo;

try{
    $one = new SmsCompanyOne([
        'appkey' => '111111'
    ]);
    $one->send('111111111111');

    $two = new SmsCompanyTwo([
        'appkey' => '222222'
    ]);
    $two->send('222222222222');
} catch (Exception $e) {
    echo "error:" . $e->getMessage();
}
