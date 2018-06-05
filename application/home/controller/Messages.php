<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use  think\Request;
use app\home\model\Tp_message;
use think\Db;
class Messages extends Tp_common{
	
	
	function messages(Tp_message $message){
		$info = $message::all();
		$this->assign("info",$info);
		return view();
	}
	//点击表情发送一个ajax请求 将表情的地址传送给前台
	function messages_ajax(){
		$res = $this->emmily;
		$arr = [];
		foreach($res as $name=>$value)
		{
			array_push($arr,$value);
		}
		$post = Request::instance()->param();
		$id = $post['id'];
		if($id){
			$result=array('status'=>'成功','msg'=>1,'data'=>$arr);
			return json_encode($result);
		}else{
			$result=array('status'=>'失败','msg'=>0);
			return json_encode($result);
		}
		
	}
	//提交评论的时候发送的ajax
	function comment(){
		$post = Request::instance()->param();
		$name = $post['name'];
		$email = $post['email'];
		$website = $post['website'];
		$editor = $post['editor'];
		$editors = "nihao + <img src='/static/home/images/arclist/victory.gif'  /> +oik";
		$datas = ['content' => $editors,'name' => $name ,'email' =>$email,'website'=>$website];
		$res = Db::name('message')->insert($datas);
		if($res){
			$result=array('status'=>'成功','msg'=>1);
			return json_encode($result);
		}else{
			$result=array('status'=>'成功','msg'=>1);
			return json_encode($result);
		}
	}
	//回复 评论
	function replay(){
		$post = Request::instance()->param();
		$anwser_id = $post['anwser_id'];
		$comments = $post['comments'];
		$datas = ['anwser_id'=>$anwser_id,'content'=>$comments];
		$res = Db::name('message')->insert($datas);
		if($res){
			$result=array('status'=>'成功','msg'=>1);
			return json_encode($result);
		}else{
			$result=array('status'=>'失败','msg'=>0);
			return json_encode($result);
		}
	}
}

?>