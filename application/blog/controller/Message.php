<?php
namespace app\blog\controller;
use app\blog\model\Tp_common;
class Message extends Tp_common{
	function message(){
		return view();
	}
	function message_detail($action = ''){
		$this->assign('maction',$action);
		return view();
	}
	
	
}







?>