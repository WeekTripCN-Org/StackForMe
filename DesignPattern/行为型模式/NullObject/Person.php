<?php

namespace nullObject;

abstract class Person
{
    private $_name = '';
    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function __get($name)
    {
        $name = '_' . $name;
        return $this->$name;
    }

    abstract function doSomething($person);
}