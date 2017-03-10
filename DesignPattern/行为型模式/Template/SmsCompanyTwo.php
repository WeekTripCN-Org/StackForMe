<?php

namespace template;

/**
 * Class SmsCompanyTwo
 *
 * @package \template
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class SmsCompanyTwo extends sms
{
    public function initialize($config = [])
    {
        // TODO: Implement initialize() method.
        $this->_config = $config;
    }

    public function sendSms($mobile = 0)
    {
        // TODO: Implement sendSms() method.
        echo "Two Send [{$this->_text}] To [{$mobile}]\n";
    }
}