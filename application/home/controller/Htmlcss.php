<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use app\home\model\Tp_article;
class Htmlcss extends Tp_common{
	function htmlcss(Tp_article $action){
		$info = $action::all(['type'=>4]);
		$this->assign('info',$info);
		return view();
	}
}

?>