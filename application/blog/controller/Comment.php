<?php
namespace app\blog\controller;
use app\blog\model\Tp_common;
class Comment extends Tp_common{
	function comment(){
		return view();
	}
	function comment_detail($action = ''){
		$this->assign('maction',$action);
		return view();
	}
	
}



?>