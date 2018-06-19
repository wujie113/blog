<?php
namespace app\blog\controller;
use think\Controller;
use app\blog\model\Tp_user as Users;
use think\Db;
use think\Model;
use think\Request;
use think\Session;
//use app\blog\model\Tp_loglogin as Loglogin;
class Login extends Controller{
	public function __construct(){
		parent::__construct();
		$session = Session::get(); //取seeion的值
		if(isset($session['blog_user'])){
			$this->redirect('index/index');
		}
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
//			$request = Request::instance();
//			$ip = $request->ip();
//			$time = time();
//			$date = ['ip'=>$ip,'create_time'=>$time];
//			$this->login_log($date);
			//设置把值存在seeion里面
			Session::set('erp_user',$name); 
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