<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use app\home\model\Tp_article;
use think\Db;
class Tech extends Tp_common{
	function tech(){
		$action = new Tp_article;
		$info = $action::all(['type'=>1]);
//		$info = Db::name('article')->where(['type'=>1])->order("create_time desc")->select();
		$this->assign('info',$info);
//		print_r($info);
		return view();
	}
	
}
?>