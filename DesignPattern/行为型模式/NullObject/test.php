<?php
/**
 * 行为型模式 - 空对象模式
 * 当程序运行过程中出现操作空对象时，程序依然能够通过操作提供的空对象继续执行
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

use nullObject\Teacher;
use nullObject\Student;

try {
    $teacher = new Teacher('Teacher');

    $stu_1 = new Student('Stu_1');
    $stu_2 = new Student('Stu_2');
    $stu_3 = new Student('Stu_3');

    //老师提问
    $teacher->doSomething($stu_1);
    $teacher->doSomething($stu_2);
    $teacher->doSomething($stu_3);
} catch (\Exception $e) {
    echo $e->getMessage();
}
