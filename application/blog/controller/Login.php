<?php
namespace app\blog\controller;
use app\blog\model\Tp_common;
use app\blog\model\Tp_user as Users;
use think\Db;
use think\Model;
class Login extends Tp_common{
	public function __construct(){
		parent::__construct();
//		$session = Session::get();
//		if(isset($session['blog_user'])){
//			$this->redirect('index/index');
//		}
		$this->view->replace([
			'__PUBLIC__' =>'/static/blog', //调换当前路径
		]); 
	}
	
	function login_in(){
		$name = $_POST['username'];
		$_password = $_POST['password'];
		$password = md5($_password);
		if(($name == '') || ($_password == '') )
		{
			$this->error('用户名或密码不能为空');
		}
		$row = Db::name('user')->where(array('user_name'=>$name))->find();
		if($row['pass_word'] == $_password){
			$this->success('登录成功','/blog/index/index');
		}else{
			$this->error('密码错误，请重新输入!');
			exit;
		}
//		echo $row['user_name']; 
	}
	function login(){
		return view();
	}
	
	
}
?>