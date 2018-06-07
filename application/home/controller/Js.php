<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use app\home\model\Tp_article;
use think\Db;
class Js extends Tp_common{
	function js(Tp_article $action){
//		$info = $action::all(['type'=>3]);
		$info = Db::name('article')->where(['type'=>3])->order("create_time desc")->select();
		$this->assign('info',$info);
		return view();
	}
}	

?>