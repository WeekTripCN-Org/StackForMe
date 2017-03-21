<?php

namespace inversionOfControl;

/**
 * Class Traveller
 *
 * @package \inversionOfControl
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Traveller
{
    protected $trafficTool;
    public function __construct(Visit $trafficTool)
    {
        $this->trafficTool = $trafficTool;
    }

    public function visitTibet()
    {
        $this->trafficTool->go();
    }
}