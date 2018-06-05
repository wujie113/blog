<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"D:\phpStudy\WWW\thinkphp\public/../application/website\view\index\index.html";i:1508491498;s:71:"D:\phpStudy\WWW\thinkphp\public/../application/website\view\layout.html";i:1508314948;s:78:"D:\phpStudy\WWW\thinkphp\public/../application/website\view\public\header.html";i:1508488634;s:78:"D:\phpStudy\WWW\thinkphp\public/../application/website\view\public\footer.html";i:1508321312;}*/ ?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="bookmark"  type="image/x-icon"  href="images/v2016/17un/favicon.ico"/>
<link rel="shortcut icon" href="images/v2016/17un/favicon.ico">
<title>启凡移动-移动广告营销平台</title>
<meta name="keywords" content="启凡,启凡移动,手机广告,手机应用推广,手机广告平台,APP推广,移动广告平台,移动营销平台,移动互联网广告,移动广告联盟">
<meta name="description" content="启凡移动是智能化的移动广告交易平台，通过与手机应用APP、DSP平台以及广告交易平台合作，能使广告主的投放效果得到显著提升、开发者降低广告管理成本并大幅提升广告收入。">
<link type="text/css" href="__PUBLIC__/css/common.css" rel="stylesheet">
<link type="text/css" href="__PUBLIC__/css/style_2016.css" rel="stylesheet">
<link type="text/css" href="__PUBLIC__/css/iconfont.css" rel="stylesheet">
<link type="text/css" href="__PUBLIC__/css/index.css" rel="stylesheet" />
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.10.2.js"></script>
<script src="__PUBLIC__/js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/index.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/website.js" type="text/javascript"></script>
<style>
	.login{
		color: #e77919!important;
	}
</style>
</head>
<body>
<div class="wrap">
  <div class="header fixed">
    <div class="topbar w1200">
      <div class="logo"><a href="index.html" title="启凡移动广告平台"><img src="__PUBLIC__/img/logo.png" title="启凡移动广告平台" /></a></div>
      <div class="nav">
	      <ul class="nav_list">
	      	<li><a href="<?php echo url('Index/index'); ?>" <?php if($maction == 'index'): ?>class="current"<?php endif; ?> >首页</a></li>
	      	<li><a href="<?php echo url('Web/web'); ?>" <?php if($maction == 'web'): ?>class="current"<?php endif; ?> >网站主</a></li>
	      	<li><a href="<?php echo url('Ad/ad'); ?>" <?php if($maction == 'ad'): ?>class="current"<?php endif; ?> >广告主</a></li>
	      	</li><li><a href="<?php echo url('Notice/notice'); ?>" <?php if($maction == 'notice'): ?>class="current"<?php endif; ?> >公告</a></li>
	      	<li><a href="<?php echo url('About/about'); ?>" <?php if($maction == 'about'): ?>class="current"<?php endif; ?> >关于我们</a></li>
			<div class="r hdR" style="margin-left: 80px;font-size: 16px;line-height: 45px;">
				<p>欢迎来到启凡网络
					<a href="<?php echo url('Login/login'); ?>" <?php if($maction == 'login'): ?>class="login"<?php endif; ?>>登录</a>
					<label style="padding-left: 20px;">|</label>
					<a href="<?php echo url('Register/register'); ?>" <?php if($maction == 'register'): ?>class="login"<?php endif; ?>>注册</a>
				</p>
		      	
	      </div>
	      </ul>
      </div>
   </div>
  </div>

<!--<p>jfoktpktp</p>-->
	<!--<a href="<?php echo url('index/test'); ?>">百度</a>-->
	<!--<a href="/website/index/test">百度</a>-->
	<!--<a href="?id=3">百度 本页面</a>-->
<div class="slideshow">
 <div class="login_box">
      <div class="login_bd">
        <form id="form_login">
          <input type="hidden" name="ajax_do" value="1">
		  <input type="hidden" name="success_uri" value="">
          <div class="tit">用户登录</div>
          <div class="form_row">
            <input class="ipt" type="text" name="username" placeholder="手机号码/用户名/邮箱" id="username" />
          </div>
          <div class="form_row">
            <input class="ipt" type="password" name="password" placeholder="密码" id="password" />
          </div>
          <div class="form_row">
            <input class="ipt w150" type="text" name="auth_code" placeholder="验证码" id="auth_code" />
            <span class="yzm"><img id="jauth_code" src="http://www.17un.com/auth/captcha/1501817752.html" title="如果不显示请刷新" /></span>
          </div>        
          <div class="form_row">
            <a href="register.html" class="wjmm" style="float: left;">立即注册</a>
            <a href="forgetpassword.html" style="float: right;">  <span class="check_group"><label for="jzmm">忘记密码</label></span></a>
          </div>
          <div class="form_btn">
            <input name="提交" type="button" class="btn_login jbtn_login" value="登录" onclick="javascript:looders();" />
          </div>
    
        </form>
     </div>
      <div class="login_bg"></div>
    </div>	
	<div class="flexslider" >
			<ul class="slides">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
	</div>
 <div class="container" >
  	<div>
  		<div class="block ymys w1200 index_img" >
      		<h1>
      			产品与服务<p class="sm_txt">专业的效果营销服务</p>
      		</h1>
      			<ul>
    			<li >
    				<img src="__PUBLIC__/img/0001.jpg" />
    				<h2 style="text-align: center;margin-top: 20px;color: #333;">启凡广告平台</h3>
    				<h3 style="text-align: center;margin-top: 10px;">最具有性价比的</h3>
    				<h3 style="text-align: center;">效果广告平台</h3>
    			</li>
    			<li >
    				<img src="__PUBLIC__/img/0002.jpg" />
    				<h2 style="text-align: center;margin-top: 20px;color: #333;">精准投放</h3>
    				<h3 style="text-align: center;margin-top: 10px;">覆盖一二线</h3>
    				<h3 style="text-align: center;">主流移动新媒体</h3>
    			</li>
    			<li>
    				<img src="__PUBLIC__/img/0003.jpg"  />
    				<h2 style="text-align: center;margin-top: 20px;color: #333;">效果运营</h3>
    				<h3 style="text-align: center;margin-top: 10px;">按效果结算</h3>
    			</li>
    			<li>
    				<img src="__PUBLIC__/img/0004.jpg"  />
    				<h2 style="text-align: center;margin-top: 20px;color: #333;">品牌投放</h3>
    				<h3 style="text-align: center;margin-top: 10px;">朋友圈广告、</h3>
    				<h3 style="text-align: center;">视频媒体的开频/前贴</h3>
    			</li>
    			<li>
    				<img src="__PUBLIC__/img/0005.jpg" />
    				<h2 style="text-align: center;margin-top: 20px;color: #333;">应用市场</h3>
    				<h3 style="text-align: center;margin-top: 10px;">百手、应用宝、华为</h3>
    				<h3 style="text-align: center;">等主流市场合作</h3>
    			</li>
    		</ul>
     
    	</div>
  	</div>

 	 <div class="block w1200"  >
    	
    	<table width="1200" border="0" align="center" cellpadding="10" cellspacing="0" >
         <tbody><tr>
				      <td colspan="3" class="Z16">
				      	<!--<strong>合作伙伴</strong>-->
				      	<h1 style="margin-top: 40px;"><span class="txtGreen">启凡</span>战略合作伙伴<p class="sm_txt">实力伙伴，实力合作</p></h1>
				      </td>
				    </tr>
				    <tr>
				      <td width="15"><div class="AL_jt" >
				      	<img src="__PUBLIC__/img/prev.png" style="cursor:pointer;background: #F2F2F2;" width="30" height="35" onclick="Act_Marquee3()"></div></td>
				      <td width="910">
				<!--下面是向右滚动代码-->
				<div id="colee_right" style="overflow:hidden;width:1200px;margin-top: 30px;">
				<table cellpadding="0" cellspacing="0" border="0">
				<tbody><tr><td id="colee_right1" valign="top" align="center">
				<table cellpadding="2" cellspacing="0" border="0">
				<tbody><tr align="center">
				<td><img src="__PUBLIC__/img/001.jpg"></td>
				<td><img src="__PUBLIC__/img/002.jpg"></td>
				<td><img src="__PUBLIC__/img/003.jpg"></td>
				<td><img src="__PUBLIC__/img/004.jpg"></td>
				<td><img src="__PUBLIC__/img/005.jpg"></td>
				<td><img src="__PUBLIC__/img/006.jpg"></td>
				<td><img src="__PUBLIC__/img/007.jpg"></td>
				<td><img src="__PUBLIC__/img/008.jpg"></td>
				<td><img src="__PUBLIC__/img/009.jpg"></td>
				<td><img src="__PUBLIC__/img/010.jpg"></td>
				<td><img src="__PUBLIC__/img/011.jpg"></td>
				<td><img src="__PUBLIC__/img/012.jpg"></td>
				<td><img src="__PUBLIC__/img/013.jpg"></td>
				<td><img src="__PUBLIC__/img/014.jpg"></td>
				<td><img src="__PUBLIC__/img/015.jpg"></td>
				<td><img src="__PUBLIC__/img/016.jpg"></td>
				<td><img src="__PUBLIC__/img/017.jpg"></td>
				</tr>
				</tbody></table>
				</td>
				<td id="colee_right2" valign="top">
				<table cellpadding="2" cellspacing="0" border="0">
				<tbody><tr align="center">
				<td><img src="__PUBLIC__/img/001.jpg"></td>
				<td><img src="__PUBLIC__/img/002.jpg"></td>
				<td><img src="__PUBLIC__/img/003.jpg"></td>
				<td><img src="__PUBLIC__/img/004.jpg"></td>
				<td><img src="__PUBLIC__/img/005.jpg"></td>
				<td><img src="__PUBLIC__/img/006.jpg"></td>
				<td><img src="__PUBLIC__/img/007.jpg"></td>
				<td><img src="__PUBLIC__/img/008.jpg"></td>
				<td><img src="__PUBLIC__/img/009.jpg"></td>
				<td><img src="__PUBLIC__/img/010.jpg"></td>
				<td><img src="__PUBLIC__/img/011.jpg"></td>
				<td><img src="__PUBLIC__/img/012.jpg"></td>
				<td><img src="__PUBLIC__/img/013.jpg"></td>
				<td><img src="__PUBLIC__/img/014.jpg"></td>
				<td><img src="__PUBLIC__/img/015.jpg"></td>
				<td><img src="__PUBLIC__/img/016.jpg"></td>
				<td><img src="__PUBLIC__/img/017.jpg"></td>
				</tr>
				</tbody></table>
				</td>
				</tr>
				</tbody></table>
				</div>
<!--向右滚动代码结束-->
		</td>
		      <td width="15"><div class="AL_jt" style="background-position: 0px -210px;"><img src="__PUBLIC__/img/next.png" style="cursor:pointer;" width="30" height="35" onclick="Act_Marquee4()"></div></td>
		    </tr>
		  </tbody></table>
		    </div>
 
 
 <!--</div></div>-->
<div class="footer">
    <div class="footerbar w1200">
      <p>Copyright @ 2011-2016 www.qifann.com All rights reserved.    启凡   粤ICP备17015410号-5 </p>
    </div>
  </div><!--footer end-->
</div>
</body>
</html>

