<?php
namespace factoryAbstract;

/**
 * 植物工厂
 */
class PlantFactory implements Factory
{
    public function createFarm()
    {
        return new RiceFarm();
    }

    public function createZoo()
    {
        return new PeonyZoo();
    }
}
