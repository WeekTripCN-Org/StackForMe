<?php

namespace composite;

/**
 * 根节点和树节点都要实现的接口
 * Interface CompositeInterface
 * @package composite
 */
interface CompositeInterface
{
    // 增加一个节点对象
    public function add(CompositeInterface $composite);
    // 删除节点一个对象
    public function delete(CompositeInterface $composite);
    // 实体类要实现的方法
    public function operation();
    // 打印对象组合
    public function printComposite();
}