<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use app\home\model\Tp_article;
use think\Db;
class Htmlcss extends Tp_common{
	function htmlcss(Tp_article $action){
//		$info = $action::all(['type'=>4]);
		$info = Db::name('article')->where(['type'=>4])->order("create_time desc")->select();
		$this->assign('info',$info);
		return view();
	}
}

?>