<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use app\home\model\Tp_article;
class Life extends Tp_common{
	function life(){
		$action = new Tp_article;
		$info = $action::all(['type'=>2]);
		$this->assign('info',$info);
		return view();
	}
}

?>