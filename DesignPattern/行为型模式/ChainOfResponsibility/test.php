<?php
/**
 * 行为型模式 - 责任链模式
 * 把一个对象传递到一个对象链上，直到有对象处理这个对象
 * @author WeekTrip<weektrip@weektrip.cn>
 */
require_once (dirname($_SERVER['SCRIPT_FILENAME']) . '//..//../autoload.php');

use chainOfResponsibility\HandlerAccessToken;
use chainOfResponsibility\HandlerArguments;
use chainOfResponsibility\HandlerAuthority;
use chainOfResponsibility\HandlerFrequent;
use chainOfResponsibility\HandlerSign;
use chainOfResponsibility\Request;

try {
    //用责任链模式实现一个api-gateway[接口网关]

    //初始化一个请求
    $request = new Request();
    //设置一个请求身份id
    $request->requestId = uniqid();

    //初始化一个：令牌校验的handler
    $handlerAccessToken = new HandlerAccessToken();
    $handlerFrequent = new HandlerFrequent();
    $handlerArguments = new HandlerArguments();
    $handlerSign = new HandlerSign();
    $handlerAuthority = new HandlerAuthority();

    //构成对象链
    $handlerAccessToken->setNext($handlerFrequent)
        ->setNext($handlerArguments)
        ->setNext($handlerSign)
        ->setNext($handlerAuthority);

    //启动网关
    $handlerAccessToken->start($request);

} catch (\Exception $e) {
    echo $e->getMessage();
}