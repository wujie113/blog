<?php
namespace app\blog\controller;
use app\blog\model\Tp_common;
use app\blog\model\Tp_comment ;
use app\blog\model\Paging;
use think\Db;
use  think\Request;
class Comment extends Tp_common{
	function comment(){
		$info = Db::name('comart')->select();
		$this->assign('info',$info);
		return view();
	}
	//评论详情
	function comment_detail($action = ''){
		$post = Request::instance()->param();
		$id = $post['id'];
		//whereOr 查询数据库也满足后面语句
		$info = Db::table('tp_comment')->where(['id'=>$id])->whereOr(['anwser_id'=>$id])->select(); 
		$this->assign('maction',$action);
		$this->assign('info',$info);
		return view();
	}
	//删除某条留言以及回复的评论
	function comment_delet(){
		$post = Request::instance()->param();
		$id = $post['id'];
		$res =  Db::table('tp_comment')->where(['id'=>$id])->whereOr(['anwser_id'=>$id])->delete();
		if($res){
			$this->success('删除成功');
			$result=array('status'=>'成功','msg'=>1);
			return json_encode($result);
		}else{
			$this->error("修改失败");
			$result=array('status'=>'成功','msg'=>0);
			return json_encode($result);
		}
	}
	
}



?>