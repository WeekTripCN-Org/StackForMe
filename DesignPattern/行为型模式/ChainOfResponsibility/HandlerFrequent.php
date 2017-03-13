<?php

namespace chainOfResponsibility;

/**
 * Class HandlerFrequent
 *
 * @package \chainOfResponsibility
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class HandlerFrequent extends Handler
{
    public function Check(Request $request)
    {
        echo "Request {$request->requestId}: Frequent is passed~\n";
    }
}