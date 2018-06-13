<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use app\home\model\Tp_article;
use think\Db;
class Reservemodel extends Tp_common {
	public function find_createtime($day,$cid){
		//查询当天数据
		if($day==1){
			$today=strtotime(date('Y-m-d 00:00:00'));
			$data['cid']=$cid;
			$data['createtime'] = array('egt',$today);
			return $data;
		//查询本周数据
		}else if($day==2){
			$arr=array();
			$arr=getdate();
			$num=$arr['wday'];
			$start=time()-($num-1)*24*60*60;
			$end=time()+(7-$num)*24*60*60;
			$data['cid']=$cid;
			$data['createtime'] = array('between',array($start,$end));
			return $data;
		//查询本月数据
		}else if($day==3){
			$start=strtotime(date('Y-m-01 00:00:00'));
			$end = strtotime(date('Y-m-d H:i:s'));
			$data['cid']=$cid;
			$data['createtime'] = array('between',array($start,$end));
			return $data;
		//查询本季度数据
		}else if($day==4){
			$month=date('m');
			if($month==1 || $month==2 ||$month==3){ 
			$start=strtotime(date('Y-01-01 00:00:00')); 
			$end=strtotime(date("Y-03-31 23:59:59")); 
		}else if($month==4 || $month==5 ||$month==6){ 
			$start=strtotime(date('Y-04-01 00:00:00')); 
			$end=strtotime(date("Y-06-30 23:59:59")); 
		}else if($month==7 || $month==8 ||$month==9){ 
			$start=strtotime(date('Y-07-01 00:00:00')); 
			$end=strtotime(date("Y-09-30 23:59:59")); 
		}else{ 
			$start=strtotime(date('Y-10-01 00:00:00')); 
			$end=strtotime(date("Y-12-31 23:59:59")); 
		} 
		$data['cid']=$cid;
	}
}
?>