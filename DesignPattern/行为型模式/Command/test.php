<?php
/**
 * 行为型模式 - 命令模式
 *
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

use command\Text;
use command\OrderCreate;
use command\OrderWrite;
use command\OrderSave;
use command\Console;

try{
    $text = new Text();

    $create = new OrderCreate($text, ['filename' => 'test.txt']);

    $write = new OrderWrite($text, ['filename' => 'test.txt', 'content' => 'life is a struggle']);

    $save = new OrderSave($text, ['filename' => 'text.txt']);

    $console = new Console();
    $console->add($create);
    $console->add($write);
    $console->add($save);

    $console->run();
} catch (\Exception $e) {
    echo $e->getMessage();
}