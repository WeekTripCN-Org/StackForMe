<?php
/**
 * 结构型模式 - 组合（部分整体）模式
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']).'//..//../autoload.php');

use composite\Folder;
use composite\File;

try {
    $root = new Folder('根目录');
    $testfile = new File('test.php');
    $usr = new Folder('usr');
    $mnt = new Folder('mnt');
    $root->add($testfile);
    $root->add($usr);
    $root->add($mnt);
    $usr->add($testfile);

    // 打印根节点文件夹节点
    $root->printComposite();
} catch (Exception $e) {
    echo $e->getMessage();
}
