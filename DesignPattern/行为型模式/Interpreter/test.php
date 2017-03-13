<?php
/**
 * 行为型模式 - 解析器模式
 * 理解：就是一个上下文的连接器
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

use interpreter\SqlInterpreter;

try{
    SqlInterpreter::db('user')->insert([
        'nickname' => 'tigerb',
        'mobile'   => '1239099999',
        'password' => '123456'
    ]);

    SqlInterpreter::db('user')->delete([
        'nickname' => 'tigerb',
        'mobile'   => '1239099999'
    ]);

    SqlInterpreter::db('member')->update([
        'id'        => 1,
        'nickname'  => 'tigerbcode',
    ]);

    SqlInterpreter::db('member')->find([
        'mobile'    => '12399099999'
    ]);
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
