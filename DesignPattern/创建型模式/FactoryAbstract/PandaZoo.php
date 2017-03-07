<?php
namespace factoryAbstract;

/**
 * 熊猫园
 */
class PandaZoo implements ZooInterface
{
    public function show()
    {
        echo "PandaZoo opening.\n";
    }

    public function money()
    {
        $this->show();
        echo "Sell tickets\n\n";
    }
}
