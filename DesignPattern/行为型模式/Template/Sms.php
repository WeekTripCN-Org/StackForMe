<?php

namespace template;

use Exception;
/**
 * Class Sms
 *
 * @package \template
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
abstract class Sms
{
    protected $_config = [];

    protected $_text = 'This is your code:';

    public function __construct($config = [])
    {
        $this->initialize($config);
    }

    /**
     * 初始化运营商配置
     * @param array $config
     * @return mixed
     */
    abstract function initialize($config=[]);

    /**
     * 生成短信文本
     */
    public function makeText()
    {
        $this->_text .= rand(000000, 999999);
    }

    /**
     * 厂商发送短信方法
     * @param int $mobile
     * @return mixed
     */
    abstract function sendSms($mobile=0);

    /**
     * 发送短信
     * @param int $mobile
     */
    final function send($mobile=0)
    {
        $this->makeText();
        $this->sendSms($mobile);
    }

}