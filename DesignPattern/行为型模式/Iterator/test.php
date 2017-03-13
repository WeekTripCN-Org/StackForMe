<?php
/**
 * 行为型模式 - 迭代器模式
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']).'//..//../autoload.php');

use iterator\SchoolExperimental;

try{
    $experimental = new SchoolExperimental();

    $experimental->addTeacher('Gri');
    $experimental->addTeacher('Cury');
    $experimental->addTeacher('Kd');

    //获取教师迭代器
    $iterator = $experimental->getIterator();
    //打印所有老师
    do{
        $iterator->current();
    } while ($iterator->hasNext());
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
