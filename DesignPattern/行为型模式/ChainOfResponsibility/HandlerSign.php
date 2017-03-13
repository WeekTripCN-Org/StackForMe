<?php

namespace chainOfResponsibility;

/**
 * Class HandlerSign
 *
 * @package \chainOfResponsibility
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class HandlerSign extends Handler
{
    public function Check(Request $request)
    {
        echo "Request {$request->requestId}: Sign is passed~\n";
    }
}