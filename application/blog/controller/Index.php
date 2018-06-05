<?php
namespace app\blog\controller;
use app\blog\model\Tp_common;
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
		return view();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}