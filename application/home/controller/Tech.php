<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use app\home\model\Tp_article;
class Tech extends Tp_common{
	function tech(){
		$action = new Tp_article;
		$info = $action::all(['type'=>1]);
		$this->assign('info',$info);
		return view();
	}
	
}
?>