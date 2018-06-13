<?php
namespace app\blog\controller;
use app\blog\model\Tp_common;
use app\blog\model\Tp_message;
use think\Db;
use  think\Request;
class Message extends Tp_common{
	function message(Tp_message $message){
		$info = $message::all(['anwser_id'=>0]);
		$this->assign('info',$info);
		return view();
	}
	//查看评论详情
	function message_detail($action = ''){
		$get = Request::instance()->param();
		$id = $get['id'];
		$this->assign('maction',$action);
		$info = Db::table('tp_message')->where(['id'=>$id])->whereOr(['anwser_id'=>$id])->select(); 
		$this->assign('info',$info);
		return view();
	}
	//删除
	function  message_dele(){
		$get = Request::instance()->param();
		$id = $get['id'];
		$res =  Db::table('tp_message')->where(['id'=>$id])->whereOr(['anwser_id'=>$id])->delete();
		if($res){
			$this->success('删除成功');
		}else{
			$this->error("修改失败");
		}
	}
	
}







?>