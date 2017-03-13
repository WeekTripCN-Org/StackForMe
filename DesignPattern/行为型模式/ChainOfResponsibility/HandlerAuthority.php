<?php

namespace chainOfResponsibility;

/**
 * Class HandlerAuthority
 *
 * @package \chainOfResponsibility
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class HandlerAuthority extends Handler
{
    public function Check(Request $request)
    {
        echo "Request {$request->requestId}:Authority is passed~\n";
    }
}