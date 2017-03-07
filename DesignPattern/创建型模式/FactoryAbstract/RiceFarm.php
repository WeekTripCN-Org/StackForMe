<?php
namespace factoryAbstract;

/**
 * 大米农场
 */
class RiceFarm implements FarmInterface
{
    public function harvest()
    {
        echo "RiceFarm get rice.\n";
    }

    public function money()
    {
        $this->harvest();
        echo "Sell rice.\n\n";
    }
}
