<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use  think\Request;
use app\home\model\Tp_message;
use think\Db;
class Messages extends Tp_common{
	function messages(){
		//获取留言并且根据时间排序
		$info = Db::name('message')->where(["anwser_id"=>0])->order("create_time desc")->select(); //获取一级留言 当anwser_id为0的时候 就为一级留言
		foreach($info as $key=>$value){ //遍历
			$info[$key]['anwser_info'] = Db::name('message')->where(["anwser_id"=>$value['id']])->select(); //查询回复的id和一级留言id一致的
		}	
		$count = Db::name('message')->where(["anwser_id"=>0])->count();	
		$this->assign("info",$info);
		$this->assign('mess_count',$count);
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
		$date_time = time();
		$ismatched = preg_match_all('/:\w+:/',$editor,$mat);//匹配全局preg_match_all 找到包含某个字符样的字符
		$arr = [];
		foreach($mat[0] as $key=>$value){//遍历将其存在数组里面
			array_push($arr,$value); 
		}
		if($ismatched){
			$i = 0;
			$len = count($arr);
			$a = [];
			$b = [];
			foreach($arr as $key=>$val){
				array_push($a,$val);
				array_push($b,"<img src='/static/home/images/arclist/".trim($val,':').".gif'/>");
				$editors = str_replace($a,$b,$editor); //将整个数组替换
			}
		}else{
			$editors = $editor;
		}
		$datas = ['content' => $editors,'name' => $name ,'email' =>$email,'website'=>$website,'create_time'=>$date_time];
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
		$date_time = time();
		$datas = ['anwser_id'=>$anwser_id,'content'=>$comments,'create_time'=>$date_time];
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