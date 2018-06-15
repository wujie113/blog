<?php
namespace app\blog\controller;
use app\blog\model\Tp_common;
use think\Db;
use think\Session;
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
		//获取访问量
		$visit_count = Db::name('loglogin')->count();
		$this->assign('art_count',$art_count);
		$this->assign('com_count',$com_count);
		$this->assign('mes_count',$mes_count);
		$this->assign('visit_count',$visit_count);
		$aa =  $this->getBrowser();
		$this->assign('browser',$aa['browser']);
		return view();
	}
	//获取浏览器	
	public function getBrowser(){
		 $flag=$_SERVER['HTTP_USER_AGENT'];//获取用户代理字符串   
		 $para=array();   
		 // 检查操作系统  
    	if(preg_match('/Windows[\d\. \w]*/',$flag, $match)) $para['os']=$match[0];  
		if(preg_match('/Chrome\/[\d\.\w]*/',$flag, $match)){  
	        // 检查Chrome  
	        $para['browser']=$match[0];  
	    }elseif(preg_match('/Safari\/[\d\.\w]*/',$flag, $match)){  
	        // 检查Safari  
	        $para['browser']=$match[0];  
	    }elseif(preg_match('/MSIE [\d\.\w]*/',$flag, $match)){  
	        // IE  
	        $para['browser']=$match[0];  
	    }elseif(preg_match('/Opera\/[\d\.\w]*/',$flag, $match)){  
	        // opera  
	        $para['browser']=$match[0];  
	    }elseif(preg_match('/Firefox\/[\d\.\w]*/',$flag, $match)){  
	        // Firefox  
	        $para['browser']=$match[0];  
	    }elseif(preg_match('/OmniWeb\/(v*)([^\s|;]+)/i',$flag, $match)){  
	        //OmniWeb  
	        $para['browser']=$match[2];  
	    }elseif(preg_match('/Netscape([\d]*)\/([^\s]+)/i',$flag, $match)){  
	        //Netscape  
	        $para['browser']=$match[2];  
	    }elseif(preg_match('/Lynx\/([^\s]+)/i',$flag, $match)){  
	        //Lynx  
	        $para['browser']=$match[1];  
	    }elseif(preg_match('/360SE/i',$flag, $match)){  
	        //360SE  
	        $para['browser']='360安全浏览器';  
	    }elseif(preg_match('/SE 2.x/i',$flag, $match)) {  
	        //搜狗  
	        $para['browser']='搜狗浏览器';  
	    }else{  
	        $para['browser']='unkown';  
	    } 
	    return $para;  
	}
	
}