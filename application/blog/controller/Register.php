<?php
namespace app\blog\controller;
use app\blog\model\Tp_common;
use app\blog\model\Tp_user;
use think\Db;
use think\Controller;
class Register extends Controller{
	function register_submit(){
		$name = $_POST['login_name'];
//		$email = $_POST['login_email'];
		$password = $_POST['passwd'];
		$data = ['user_name'=>$name,'pass_word'=>$password];
		$row =  Db::name('user')->insert($data);
		if($row){
			$this->success('注册成功','/blog/Login/login');
		}
//		if($row){
//			echo $row['user_name'];
//			$this->success('注册成功','/index/index');
//		}else{
//			$this->error('注册失败');
//		}
	}
	function register(){
		return view();
	}
	
}





?>