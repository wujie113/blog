<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use app\home\model\Tp_comment;
use  think\Request;
use think\Db;
class Comment extends Tp_common{
	//评论文章的页面
	function comment(Tp_comment $comment){
		$post = Request::instance()->param();
		$c_id = $post['pageid'];
		$name = $post['name'];
		$email = $post['email'];
		$website = $post['website'];
		$date_time = time();
		$content = $post['editor'];
		$ismatched = preg_match_all('/:\w+:/',$content,$mat);//匹配全局preg_match_all 找到包含某个字符样的字符
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
				$contents = str_replace($a,$b,$content); //将整个数组替换
			}
		}else{
			$contents = $content;
		}
		$datas = ['c_id'=>$c_id,'content'=>$contents,'name'=>$name,'email'=>$email,'website'=>$website,'create_time'=>$date_time];
//		$res = $comment->save($datas);
		$res = Db::name('comment')->insert($datas);
		if($res){
			$result=array('status'=>'成功','msg'=>1);
			return json_encode($result);
		}else{
			$result=array('status'=>'失败','msg'=>0);
			return json_encode($result);
		}
	}
	//回复评论
	function replay_comment(){
		$post = Request::instance()->param();
		$anwser_id = $post['anwser_id'];
		$comments = $post['comments'];
		$date_time = time();
		$datas = ['anwser_id'=>$anwser_id,'content'=>$comments,'create_time'=>$date_time];
		$res = Db::name('comment')->insert($datas);
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