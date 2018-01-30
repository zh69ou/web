<?php
namespace Zhou\security\login\class;

abstract class infoabstract
{
	// 是否使用密码
	protected $usepsw;

	// 有效时间-登录保存时间
	protected $validtime;

	// 更新时间-登录后更新频率
	protected $uptime;

	// 用户唯一值
	protected $uuid;

	// 加密字符串
	protected $securitystr;

	// 查找用户
	abstract function getuser();

	// 流程
	abstract function getflow();

	// 更新用户
	abstract function updateuser();

	// 是否登录
	public function island()
	{
		if($this->validtime>time())
		{
			return false;
		}
		return true;
	}

	// 检查密码
	public function checkpsw()
	{
		return true;
	}

	// 用户信息
	protected function userinfo()
	{
		return '';
	}
}