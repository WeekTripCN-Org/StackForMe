<?php

namespace chainOfResponsibility;

/**
 * Class HandlerArguments
 *
 * @package \chainOfResponsibility
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class HandlerArguments extends Handler
{
    public function Check(Request $request)
    {
        echo "Request {$request->requestId}: Arguments is passed~\n";
    }
}