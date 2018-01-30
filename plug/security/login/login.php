<?php
namespace Zhou\security\login;

use Symfony\Component\Workflow\DefinitionBuilder;
use Symfony\Component\Workflow\Transition;
use Symfony\Component\Workflow\Workflow;
use Symfony\Component\Workflow\MarkingStore\SingleStateMarkingStore;


class login
{
	// 加载插件
	protected $type;

	// 工作流程
	protected $workflow;

	function __construct($name,$param)
	{
		// 判断类是否存在
		// if(file_exists('./class/'.$name.'.php'))
	}
	// 执行流程
	public function buildflow()
	{
		$definitionBuilder = new DefinitionBuilder();
		$definition = $definitionBuilder->addPlaces(['draft', 'review', 'rejected', 'published']);
		$definition->addTransition(new Transition('to_review', 'draft', 'review'));
    	$definition->addTransition(new Transition('publish', 'review', 'published'))
    	$definition->addTransition(new Transition('reject', 'review', 'rejected'))
    	$definition->build()
    	$marking = new SingleStateMarkingStore('currentState');
		$workflow = new Workflow($definition, $marking);
	}

	// 判断是否登录

	// 登录（流程）

	// 退出

	// 保存数据
}