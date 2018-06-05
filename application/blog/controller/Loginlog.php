<?php
namespace app\blog\controller;
use app\blog\model\Tp_common;
use app\blog\model\Tp_loglogin;
use think\Request;
class Loginlog  extends Tp_common{
	function loginlog(){
		$log = new Tp_loglogin;
		 $info = $log::all();
		$this->assign('info',$info);
		$request = Request::instance();
		$ip = $request->ip();
//		print_r($ip);
		return view();
	}
	function del_loginlog(){
		
	}
}
?>