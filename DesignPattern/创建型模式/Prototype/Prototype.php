<?php 
namespace prototype;

/**
* 原型实体
*/
class Prototype extends PrototypeAbstract
{
	/**
	 * 构造函数
	 *
	 * @param string $name 属性
	 * @return void
	 */
	public function __construct($name = '')
	{
		$this->_name = $name;
	}

	/**
	 * 魔术方法
	 * --------------------------------------------------
	 * @Author   Robin-L
	 * @DateTime 2017-03-07T19:19:01+0800
	 * --------------------------------------------------
	 * @param    string                   $name  属性名称
	 * @param    string                   $value 属性值
	 */
	public function __set($name='', $value='')
	{
		$this->_name = $value;
	}

	/**
	 * 打印对象名称
	 * --------------------------------------------------
	 * @Author   Robin-L
	 * @DateTime 2017-03-08T09:34:39+0800
	 * --------------------------------------------------
	 * @return   string                   \
	 */
	public function getName()
	{
		echo "I'm obj: " . $this->_name ." \n\n";
	}

	/**
	 * 获取原型对象
	 * --------------------------------------------------
	 * @Author   Robin-L
	 * @DateTime 2017-03-08T09:35:29+0800
	 * --------------------------------------------------
	 * @return   obj                   
	 */
	public function getPrototype()
	{
		return clone $this;
	}
}