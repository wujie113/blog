<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use  think\Request;
use app\home\model\Tp_article;
use think\Db;
class Blogdetail extends Tp_common{
	//ajax请求成功后跳转的页面
	function blogdetail($action = ''){
		$datas = new Tp_article;
		$this->assign('maction',$action);
		$post = Request::instance()->param();
		$id = $post['id'];
		$i = $post['i'];
		Db::table('tp_article')->where(['id'=>$id])->update(['sign'=>$i]);
		$info = $datas::all(['id'=>$id]);
		$this->assign('info',$info);
//		echo $ip."<br/>".$id;
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