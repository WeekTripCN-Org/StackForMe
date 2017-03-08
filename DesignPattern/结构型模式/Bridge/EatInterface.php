<?php

namespace bridge;

interface EatInterface
{
    /**
     * 吃
     * @param string $food
     * @return mixed
     */
    public function eat($food = '');
}