<?php
namespace app\home\model;
use think\Controller;
use think\Session;
use think\Request;
class Tp_common extends Controller{
	//表情
	protected $emmily = [
		'arrogant'=>"arrogant.gif",
		'awkward'=>'awkward.gif',
		'bigSmile'=>'bigSmile.gif',
		'laughter'=>'laughter.gif',
		'lovely'=>'lovely.gif',
		'surprised'=>'surprised.gif',
		'gi' =>'gi.gif',
		'comeon' => 'comeon.gif',
		'doubt' => 'doubt.gif',
		'knock' => 'knock.gif',
		'pig' => 'pig.gif',
		'hug' => 'hug.gif',
		'badsmile' => 'badsmile.gif',
		'moon' => 'moon.gif',
		'watermelon' => 'watermelon.gif',
		'flowers' => 'flowers.gif',
		'ok' => 'ok.gif',
		'coffee' => 'coffee.gif',
		'fuels' => 'fuels.gif',
		'victory' => 'victory.gif'
	];
	public function __construct(){
		
		
		parent::__construct();
		$this->view->replace([
			'__PUBLIC__' =>'/static/home', //调换当前路径
		]);
		$request = Request::instance(); //获取当前域名
		// $request->action()     当前操作名称是  
		//$request->controller()  当前控制器名称是
		//$request->module()      当前模块名称
		$this->assign("header",$request->controller());//这个获取的是当前是哪个控制器  
//		$this->assign("header",$request->controller());//第一个参数header表示在模版取值用的变量名，第二个参数是header变量的值。 
		$this->assign("maction",$request->action()); //将当前操作名称赋值给maction 然后根据判断当前操作的名称来添加类名 （获取的是当前哪个名字
		
		 
	}
}
