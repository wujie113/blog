<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use  think\Request;
use app\home\model\Tp_article;
use think\Db;
class Blogdetail extends Tp_common{
	//ajax请求成功后跳转的页面
	function blogdetail($action = ''){ //前端跳转传过来的值
		$datas = new Tp_article;
//		print_r($id);
		if($action == 1){
			$action ="tech";
		}else if($action == 2){
			$action ="life";
		}else if($action == 3){
			$action ="js";
		}else if($action == 4){
			$action ="htmlcss";
		}
		
		$this->assign('maction',$action);
		$post = Request::instance()->param();
		$id = $post['id'];
		$i = $post['i'];
		Db::table('tp_article')->where(['id'=>$id])->update(['sign'=>$i]);
		$info = $datas::all(['id'=>$id]);
		$this->assign('info',$info);
		$comment = Db::name('comment')->where(["anwser_id"=>0,'c_id'=>$id])->order("create_time desc")->select();
		foreach($comment as $key=>$value){ //遍历
			$comment[$key]['anwser_info'] = Db::name('comment')->where(["anwser_id"=>$value['id']])->select(); //查询回复的id和一级留言id一致的
		}	
		$this->assign("comment",$comment);
		//评论数量
		$comcount = Db::name('comment')->where(["anwser_id"=>0,'c_id'=>$id])->count();
		$this->assign("comcount",$comcount);
		return view();
	}
	//ajax 请求需要处理的逻辑
	function blogdetail_ajax(){
		$post = Request::instance()->param();
		$id = $post['id'];
//		$ip = Request::instance()->ip();
//		$data_ip = ["star_ip"=>$ip];
//		Db::table('tp_article')->where(['id'=>$id])->setField($data_ip);
//		$ip = Request::instance()->ip();
		//数据库查询前端带过来的id的数据给浏览数自加1
		$res = Db::table('tp_article')->where(['id'=>$id])->setInc('browser',1); 
		//查询从前端带过来的数据
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