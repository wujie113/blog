<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use  think\Request;
use think\Db;
class Classify extends Tp_common{
	function classify (){
		$get = Request::instance()->param();
		$month_start = strtotime($get['type']);//指定月份月初时间戳  
		$month_end = mktime(23, 59, 59, date('m', strtotime($get['type']))+1, 00);//获取月末
		$info = Db::name('article')->where('create_time','elt',$month_end)->where('create_time','egt',$month_start)->select();
		$this->assign('info',$info);
//		print_r(date('Y-m-d',$month_end));	
//		echo "<br/>";
//		print_r(date('Y-m-d',$month_start)); 
//		echo "<br/>";
//		print_r($info);
//		print_r(date('Y-m-d',$endThismonth));
//		$type = strtotime($get['type']);
//		print_r($type);
		return view();
	}
}
?>