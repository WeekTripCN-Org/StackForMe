<?php
/**
 * 行为型模式 - 备忘录模式
 * 外部存储对象的状态，以供后退/恢复/复原
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

use memento\Editor;

try{
    // 初始化编辑器并新建一个空文件
    $editor = new Editor('');

    //写入一段文本
    $editor->write('Hello php!');
    //保存
    $editor->save();
    //修改刚才的文本
    $editor->write(' no code o file');
    //撤销
    $editor->undo();
    $editor->read();
    $editor->write('life is a struggle!');
    $editor->save();

    $editor->redo();
    $editor->read();
} catch (Exception $e) {
    echo "error:" . $e->getMessage();
}
