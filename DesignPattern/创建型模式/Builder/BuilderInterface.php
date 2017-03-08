<?php

namespace builder;

/**
 * Class BuilderInterface
 *
 * @package \builder
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
Interface BuilderInterface
{
    /**
     * 构建硬件
     * @return void
     */
    public function hardware();

    /**
     * 构建软件
     */
    public function software();
}