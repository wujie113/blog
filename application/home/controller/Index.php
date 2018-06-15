<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use app\home\model\Tp_article;
use think\Db;
use think\Request;
class Index extends Tp_common{
	function index (){
		$request = Request::instance();
		$ip = $request->ip(); //获取当前ip
		$time = time(); //获取当前时间
		$date = ['ip'=>$ip,'create_time'=>$time];
		$year = date("Y");
		$month = date("m");
		$day = date("d");
		$start = mktime(0,0,0,$month,$day,$year);//当天开始时间戳
		$end= mktime(23,59,59,$month,$day,$year);//当天结束时间戳
		$aa =  Db::table('tp_loglogin')->whereTime('create_time', 'between', [$start, $end])->select(); //查询当天数据库里面的数据
		foreach($aa as $key=>$val ){
			 $ip_arr[] = $val['create_time']; //将时间戳存入数组
		}
		if(empty($ip_arr)){
			$this->login_log($date);
		}else if((in_array($time,$ip_arr) || (date('Y-m-d H-i-s') == date('Y-m-d H-i-s',$time)))){ //判断当前时间是否包含在数据库里面 并且当前时间和今天时间是不是相等
//			print_r(date('Y-m-d H-i-s'));
		}else{
			$this->login_log($date);
		}
//	    $this->assign('aa',$para['browser']);
//	    print_r(date('W',$time));

//		print_r($aa);
//		print_r(date('Y-m-d H:i:s',1529030384));
//		echo "<br/>";
//		print_r(date('Y-m-d H-i-s',$end));
//		$action = new Tp_article;
//		$info = $action::all(['status'=>1]);
//		print_r($info);
		$info = Db::name('article')->where(['status'=>1])->order("create_time desc")->select();
		foreach($info as $key=>$val){
			$info[$key]['create_time'] = floor(($time - $info[$key]['create_time'])/(3600*24));
		}
//		print_r($info);
		$this->assign('info',$info);
		$conts =   Db::table('tp_article')->where(['status'=>1])->count();//获取显示的文章总篇数
		$slowlife = Db::table('tp_article')->where(['status'=>1,'type'=>2])->count(); //慢生活显示的总数
		$program = Db::table('tp_article')->where(['status'=>1,'type'=>1])->count();
		$belles = Db::table('tp_article')->where(['status'=>1,'type'=>3])->count();
		$html = Db::table('tp_article')->where(['status'=>1,'type'=>4])->count();
		$rearticle =  Db::name('article')->where(['status'=>1])->order("create_time desc")->limit(4)->select();
		$coment = Db::name('comment')->where(['anwser_id'=>0])->count();
		$updates = time();//当前时间戳
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
		//时间戳转换成年月
		$time_type = Db::name('article')->where(['status'=>1])->order("create_time desc")->select();
		foreach($time_type as $key=>$val){
			$arr[] = date('Y-m',$val['create_time']);
		}
		$arr = array_unique($arr);  //数组去重
//		$date="2018-05-02";
//		dump(strtotime($date)); //=>1380601394
		$this->assign('time_type',$arr);
//		$last_time = Db::table('tp_article')->where(['status'=>1])->setField('update_time',time());
//		$result = $Borrow->where($condition)->setField('sdate',time());
//		echo $conts;	
//		print_r($info);
		return view();
	}
	//存入ip
	private function login_log($arr){
		$signlog = new Loglogin($arr);
		$signlog->save();
	}
	
	
	
}
?>