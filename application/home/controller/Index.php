<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use app\home\model\Tp_article;
use think\Db;
class Index extends Tp_common{
	function index (){
		$action = new Tp_article;
		$info = $action::all(['status'=>1]);
		$this->assign('info',$info);
		$conts =   Db::table('tp_article')->where(['status'=>1])->count();//获取显示的文章总篇数
		$slowlife = Db::table('tp_article')->where(['status'=>1,'type'=>2])->count(); //慢生活显示的总数
		$program = Db::table('tp_article')->where(['status'=>1,'type'=>1])->count();
		$belles = Db::table('tp_article')->where(['status'=>1,'type'=>3])->count();
		$html = Db::table('tp_article')->where(['status'=>1,'type'=>4])->count();
		$this->assign('counts',$conts);
		$this->assign('slowlife',$slowlife);
		$this->assign('program',$program);
		$this->assign('belles',$belles);
		$this->assign('html',$html);
//		$last_time = Db::table('tp_article')->where(['status'=>1])->setField('update_time',time());
//		print_r($last_time) ;
//		$result = $Borrow->where($condition)->setField('sdate',time());
//		echo $conts;	
//		print_r($info);
		return view();
	}

	
	
	
}
?>