<?php
namespace Zhou;

/**
* 保存加密cookie
*/
class cookie
{
	// 加密值
	protected $pswstring;

	// 加密方式
	protected $pswtype;

	// COOKIE名称
	protected $cookiename;

	function __construct(argument)
	{
		# code...
	}
	// 设置加密值
	public function spswstring($value='')
	{
		$this->pswstring = $value;
	}

	// 设置加密方式
	public function spswtype($value='')
	{
		$this->pswtype = $value;
	}

	// 设置COOKIE名称
	public function scookiename($value='')
	{
		$this->cookiename = $value;
	}

	// 获取加密内容
	public function gcookie($name='')
	{
		return $name;
	}

	// 设置加密内容
	public function scookie($name='',$value='')
	{
		return $name;
	}
}