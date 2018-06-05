<?php
namespace app\blog\controller;
use app\blog\model\Tp_common;
use app\blog\model\Tp_article ;
use app\blog\model\Paging;
use think\Db;
use  think\Request;
class Article extends Tp_common{
	public function article(Tp_article $article){
		$page = 1;//当前页默认为1
		$page_curent = Request::instance()->param();
		if(isset($page_curent['page'])) //判断是否能获设置了当前页
		$page = $page_curent['page'];
		$res = new Paging('article');//连接数据表
		$info = $res->page_info($page,['status'=>1]);//调用方法
		foreach($info['info'] as $key=>$val  ){
			$status = [1=>'技术探讨',2=>'慢生活',3=>'js',4=>'html'];
			$info['info'][$key]['type'] = $status[$val['type']];
		}
		$this->assign("info",$info);
		return view();
	}
	public function add_article($action = ''){
		  $this->assign('maction',$action);
		
		return view();
	}
	//发布文章的时候 后台需要接收的内容
	public function post(Tp_article $article){
		$post = $_POST;
		$arr['title'] = $post['title'];//标题
		$arr['content'] = $post['content'];//内容
		$arr['type'] = $post['category'];//分类
		$arr['keywords'] = $post['keywords'];//关键字
		$arr['describe'] = $post['describe'];//描述
		//$arr['titlepic'] ="/static".$post['titlepic'];//上传图片
		$arr['titlepic'] =$post['titlepic'];
		$arr['lock'] = $post['visibility'];//是否加密
		 $res = $article->save($arr);//save插入内容 到数据库  将前端传来的数据插入到数据库
		 if($res){
		 	$this->success("插入成功","article/article");//插入成功  后面就跟插入成功的地址 
		 }else{
		 	$this->error("插入失败");
		 }
		
	}
	//删除文章  ajax删除
	function article_del(){
		$get = Request::instance()->param();
		$this->assign('maction',$get['action']);
	 	$ids = $get['id'];
	 	$res = Db::table('tp_article')->where(['id'=>$ids])->update(['status'=>0]);
//	 	$res = Db::table('tp_article')->where('id',$id)->delete();
	 	if($res)
		{
			$this->success('删除成功');
		}
		else
		{
			$this->error('删除失败');
		}
	}
	// ajax 请求全部删除
	function check_all(){
		$post = $_POST;
		$id = $post['date'];
		foreach($id as $value){
			$res = $this->del_data($value);
		}
		if($res){
			$result=array('status'=>'成功','msg'=>1);
			return json_encode($result);
		}else{
			$result=array('status'=>'失败','msg'=>0);
			return json_encode($result);
		}
		
	}
	//删除逻辑  删除的时候 修改数据库中字段为status改为0 默认为1 改为0 后 就是此条数据不显示
	function del_data($v){
		return  Db::table('tp_article')->where(['id'=>$v])->update(['status'=>0]);
	}
}
?>