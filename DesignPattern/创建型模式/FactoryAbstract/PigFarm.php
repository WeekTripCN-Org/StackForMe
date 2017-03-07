<?php
namespace factoryAbstract;

/**
 * 猪农场接口
 */
class PigFarm implements FarmInterface
{

    public function harvest()
    {
        echo "PigFarm get meat\n";
    }

    public function money()
    {
        $this->harvest();
        echo "Sell pig meat\n\n";
    }
}
