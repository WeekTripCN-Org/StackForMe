<?php

namespace chainOfResponsibility;

/**
 * Class HandlerAccessToken
 *
 * @package \chainOfResponsibility
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class HandlerAccessToken extends Handler
{
    public function Check(Request $request)
    {
        echo "Request {$request->requestId}:Token is passed~ \n";
    }
}