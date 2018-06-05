<?php
namespace app\blog\controller;
use app\blog\model\Tp_common;
use  think\Request;
use app\blog\model\Tp_article ;
class Articleupdate extends Tp_common{
	
	protected function article(){
		return new Tp_article();
	}
	
	function updatearticle(){
		$article = new Tp_article;//实例化article 的model
		
		$get = Request::instance()->param();//得到点击带过来的参数
	 	$this->assign('maction',$get['action']);
	 	$ids = $get['id'];
		$info = $article::all($ids);//查询点击的数据库
		$this->assign("info",$info); //设置变量
		return view();
	}
	//修改成功后提交的函数
	function updatesusseful(){
		$article = new Tp_article;
		$post = $_POST;
		$arr['title'] = $post['up_title'];
		$arr['content'] = $post['up_content'];
		$arr['type'] = $post['up_category'];
		$arr['keywords'] = $post['up_keywords'];
		$arr['describe'] = $post['up_describe'];
		$arr['titlepic'] =$post['up_titlepic'];
		$arr['lock'] = $post['up_visibility'];
		$id = $post['up_id'];//得到修改id为多少的那条数据
//		print_r($arr);
		$res = $article->save($arr,['id'=>$id]);
		if($res){
			$this->success("修改成功","article/article");//插入成功  后面就跟插入成功的地址 
		}else{
			$this->error("修改失败");
		}
	}
	
}
?>