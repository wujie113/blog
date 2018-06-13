<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use app\home\model\Tp_article;
use think\Db;
class Life extends Tp_common{
	function life(){
//		$action = new Tp_article;
//		$info = $action::all(['type'=>2]);
		$info = Db::name('article')->where(['type'=>2,'status'=>1])->order("create_time desc")->select();
		$this->assign('info',$info);
		return view();
	}
}

?>