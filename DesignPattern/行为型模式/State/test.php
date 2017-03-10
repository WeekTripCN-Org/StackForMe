<?php
/**
 * 行为型模式 - 状态模式
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']).'//..//../autoload.php');

use state\Farmer;

try {
    $farmer = new Farmer();

    //春
    $farmer->grow();
    $farmer->havest();
    //夏
    $farmer->grow();
    $farmer->havest();
    //秋
    $farmer->grow();
    $farmer->havest();
    //冬
    $farmer->grow();
    $farmer->havest();
} catch (Exception $e) {
    echo $e->getMessage();
}