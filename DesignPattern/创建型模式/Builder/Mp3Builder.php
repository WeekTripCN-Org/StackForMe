<?php

namespace builder;

use builder\BuilderInterface;

/**
 * Class Mp3Builder
 *
 * @package \builder
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Mp3Builder implements BuilderInterface
{
    private $_name = '';

    private $_cpu = '';

    private $_ram = '';

    private $_storage = '';

    private $_os = '';

    public function __construct($name = '', $hardware = array(), $software = array()) 
    {
    	$this->_name = $name;
    	echo $this->_name . "Configure: \n";

    	$this->hardware($hardware);
    	$this->software($software);
    }

    public function hardware($hardware = array())
    {
    	$hardwareCpu = new HardwareCpu();
    	$this->_cpu  = $hardwareCpu->produce($hardware['cpu']);

    	$hardwareRam = new HardwareRam();
    	$this->_ram  = $hardwareRam->produce($hardware['ram']);

    	$hardwareStorage = new HardwareStorage();
    	$this->_storage = $hardwareStorage->produce($hardware['storage']);
    }

    public function software($software = array())
    {
    	$softwareOs = new SoftwareOs();
    	$this->_os  = $softwareOs->produce($software['os']);
    }
}