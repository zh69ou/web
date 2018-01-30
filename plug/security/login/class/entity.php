<?php
namespace Zhou\security\login\class;

/**
* 数据库登录
*/
class entity extends infoabstract
{
	// 流程
	protected $flow=
		[
			// 名称		上一步	下一步
			'bcheck'	=>['formbox','checkname'],
			'cnerror'	=>['checkname','errorlog'],
			'cntrue'	=>['checkname','checkpsw'],
			'cperror'	=>['checkpsw','errorlog'],
			'cptrue'	=>['checkpsw','truelog'],
			'success'	=>['truelog','endflow'],
			'error'		=>['errorlog','formbox']
		];

	// 配置参数
	function __construct(argument)
	{
		# code...
	}

	public function getflow()
	{
		return $this->flow;
	}
}