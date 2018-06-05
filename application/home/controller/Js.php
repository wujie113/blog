<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use app\home\model\Tp_article;
class Js extends Tp_common{
	function js(Tp_article $action){
		$info = $action::all(['type'=>3]);
		$this->assign('info',$info);
		return view();
	}
}	

?>