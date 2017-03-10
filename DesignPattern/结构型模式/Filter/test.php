<?php
/**
 * 结构型模式 - 过滤器模式
 * 使用不同的标准来过滤一组对象
 * @author WeekTrip<weektrip@weektrip.cn>
 */

require_once (dirname($_SERVER['SCRIPT_FILENAME']).'//..//../autoload.php');

use filter\SportPerson;
use filter\FilterGender;
use filter\FilterSportType;

try {
    $persons = [];
    $persons[] = new SportPerson('male', 'basketball');
    $persons[] = new SportPerson('female', 'basketball');
    $persons[] = new SportPerson('male', 'football');
    $persons[] = new SportPerson('female', 'football');
    $persons[] = new SportPerson('male', 'swim');
    $persons[] = new SportPerson('female', 'swim');

    // 过滤男性
    $filterGender = new FilterGender('male');
    print_r($filterGender->filter($persons));

    // 过滤篮球
    $filterSportType = new FilterSportType('basketball');;
    print_r($filterSportType->filter($persons));

} catch (\Exception $e) {
    echo $e->getMessage();
}
