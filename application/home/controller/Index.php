<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use app\home\model\Tp_article;
use think\Db;
class Index extends Tp_common{
	function index (){
//		$action = new Tp_article;
//		$info = $action::all(['status'=>1]);
//				print_r($info);
		$info = Db::name('article')->where(['status'=>1])->order("create_time desc")->select();
		$this->assign('info',$info);
		$conts =   Db::table('tp_article')->where(['status'=>1])->count();//获取显示的文章总篇数
		$slowlife = Db::table('tp_article')->where(['status'=>1,'type'=>2])->count(); //慢生活显示的总数
		$program = Db::table('tp_article')->where(['status'=>1,'type'=>1])->count();
		$belles = Db::table('tp_article')->where(['status'=>1,'type'=>3])->count();
		$html = Db::table('tp_article')->where(['status'=>1,'type'=>4])->count();
		$rearticle =  Db::name('article')->where(['status'=>1])->order("create_time desc")->limit(4)->select();
		$coment = Db::name('comment')->where(['anwser_id'=>0])->count();
		$updates = time();//当前时间
		$eartime = Db::name('article')->where(['status'=>1,'id'=>1])->select(); //第一条文章发表 （应该是博客创建时间才比较准确）
		$days =$updates - $eartime[0]['create_time'];
		$day = floor($days/(3600*24));
		$this->assign('day',$day);
		$this->assign('updates',$updates);
		$this->assign('coment',$coment);
		$this->assign('rearticle',$rearticle);
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