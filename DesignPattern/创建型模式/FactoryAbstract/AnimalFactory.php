<?php
namespace factoryAbstract;

/**
 * 动物工厂
 */
class AnimalFactory implements Factory
{

    public function createFarm()
    {
        return new PigFarm();
    }

    public function createZoo()
    {
        return new PandaZoo();
    }
}
