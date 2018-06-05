<?php
namespace app\home\controller;
use app\home\model\Tp_common;
use  think\Request;
use app\home\model\Tp_star;
use app\home\model\Tp_article;
use think\Db;
class Star extends Tp_common{
		function star_ajax(){
			$post = Request::instance()->param();
			$id = $post['id'];
			$ip = Request::instance()->ip();//获取用户ip
			$datas = ['uid'=>$id,'star_ip'=>$ip];
			$res = Db::name('star')->where(['uid'=>$id,'star_ip'=>$ip])->find(); //从数据库是否能找到
			if($res){ //找到则已经点过赞了
				$result=array('status'=>'已经点过赞','msg'=>1);
				return json_encode($result);
			}else{  //没有点过 就往数据库里面添加
				Db::table('tp_article')->where(['id'=>$id])->setInc('star',1);//让文章的点赞书加1
				Db::name('star')->insert($datas);
				$result=array('status'=>'点赞成功','msg'=>0);
				return json_encode($result);	
			}

			
		}
}
?>