<?php
namespace factoryAbstract;

/**
 * 农场接口
 */
interface FarmInterface extends income
{
    public function harvest();
}
