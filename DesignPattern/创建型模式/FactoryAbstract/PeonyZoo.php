<?php
namespace factoryAbstract;

/**
 * 牡丹园
 */
class PeonyZoo implements ZooInterface
{
    public function show()
    {
        echo "PoneyZoo opening\n";
    }

    public function money()
    {
        $this->show();
        echo "Sell tickets\n\n";
    }
}
