<?php

namespace iterator;

interface Iterator
{
    // 是否还有下一个
    public function hasNext();
    // 下一个
    public function next();
    // 当前
    public function current();
    // 当前索引
    public function index();
}