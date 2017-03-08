<?php

namespace builder;

use builder\BuilderInterface;

/**
 * Class HardwareStorage
 *
 * @package \builder
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class PhoneBuilder implements BuilderInterface
{
    private $_name = '';

    private $_cpu = '';

    private $_ram = '';

    private $_storage = '';

    private $_os = '';

	/**
	* 构造函数
	* @param string $name     名称
	* @param array  $hardware 构建硬件
	* @param array  $software 构建软件
	*/
	public function __construct($name='', $hardware=array(), $software=array())
	{
		// 名称
		$this->_name = $name;
		echo $this->_name . " Configure: \n";
		// 构建硬件
		$this->hardware($hardware);
		// 构建软件
		$this->software($software);
	}
	/**
	* 构建硬件
	* @param  array  $hardware 硬件参数
	* @return void
	*/
	public function hardware($hardware=array())
	{
		// 创建屏幕
		$hardwareScreen  = new HardwareScreen();
		$this->_screen   = $hardwareScreen->produce($hardware['screen']);
		// 创建cpu
		$hardwareCpu     = new HardwareCpu();
		$this->_cpu      = $hardwareCpu->produce($hardware['cpu']);
		// 创建内存
		$hardwareRam     = new HardwareRam();
		$this->_ram      = $hardwareRam->produce($hardware['ram']);
		// 创建储存
		$hardwareStorage = new HardwareStorage();
		$this->_storage  = $hardwareStorage->produce($hardware['storage']);
		// 创建摄像头
		$hardwareCamera  = new HardwareCamera();
		$this->_camera   = $hardwareCamera->produce($hardware['camera']);
	}
	/**
	* 构建软件
	* @param  array  $software 软件参数
	* @return void
	*/
	public function software($software=array())
	{
		// 创建操作系统
		$softwareOs     = new SoftwareOs();
		$this->_os      = $softwareOs->produce($software['os']);
	}
}