<?php 
namespace prototype;

abstract class PrototypeAbstract
{
	protected $_name;

	abstract public function getName();

	abstract public function getPrototype();
}