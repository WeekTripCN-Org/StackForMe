<?php

namespace template;

/**
 * Class SmsCompanyOne
 *
 * @package \template
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class SmsCompanyOne extends Sms
{
    public function initialize($config = [])
    {
        // TODO: Implement initialize() method.
        $this->_config = $config;
    }

    function sendSms($mobile = 0)
    {
        echo "One Send [{$this->_text}] To [{$mobile}]\n";
    }
}