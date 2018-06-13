<?php
namespace app\blog\controller;
use app\blog\model\Tp_common;
use think\Db;
class Index extends Tp_common{
	public function __construct()
	{
		parent::__construct();
		
	}
//	public  function index(){ 
//		$data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
//		return ['data'=>$data,'cose'=>1,'message'=>'操作完成'];
//	}
	public function index(){
		//获取显示的文章总条数
		$art_count = Db::name('article')->where(['status'=>1])->count();
		//获取评论总数
		$com_count = Db::name('comment')->where(['anwser_id'=>0])->count();
		//获取留言条数
		$mes_count = Db::name('message')->where(['anwser_id'=>0])->count();
		$this->assign('art_count',$art_count);
		$this->assign('com_count',$com_count);
		$this->assign('mes_count',$mes_count);
		return view();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}