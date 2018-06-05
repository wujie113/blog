<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"D:\phpStudy\WWW\thinkphp\public/../application/website\view\login\login.html";i:1508401511;s:71:"D:\phpStudy\WWW\thinkphp\public/../application/website\view\layout.html";i:1508314948;s:78:"D:\phpStudy\WWW\thinkphp\public/../application/website\view\public\header.html";i:1508485258;s:78:"D:\phpStudy\WWW\thinkphp\public/../application/website\view\public\footer.html";i:1508321312;}*/ ?>

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

<!--<h1>登陆</h1>-->
	<div class="banner_460  page_register">   
</div>
  <div class="login_main_text">
            <div class="login_l">
                <div class="reg_frame">
                    <ul>
                        <li class="reg_frame_bg"><img src="__PUBLIC__/img/reg-1.png"></li>
                        <li class="reg_frame_text">
                            <input type="text" id="username" name="username" onfocus="if(value==defaultValue){value='';this.style.color='#333'}" onblur="if(!value){value=defaultValue;this.style.color='#999'}" style="color:#999999" placeholder="输入登录邮箱" class="text" value="">
                        </li>
                    </ul>
                </div>
                <div class="reg_sign">*
                </div>
                <div class="reg_frame">
                    <ul>
                        <li class="reg_frame_bg"><img src="__PUBLIC__/img/reg-2.png"></li>
                        <li class="reg_frame_text">
                            <input type="password" id="password" name="password" placeholder="输入密码" class="text" value="">                    
                        </li>
                    </ul>
                </div>
                <div class="reg_sign">*
                </div>

                <div style="width: 172px;float: left;margin-top: 10px;">
                    <input type="checkbox" name="remember" id="remember" onclick="ischecked()"> 记住我
                </div>
    <input type="submit" value="登  录" onclick="SubmitForm()" style="cursor: pointer;background: #FF8A00;border-radius: 10px;opacity: 0.8;color: #fff;font-weight: bold;font-size: 18px;margin:30px 18%;width:50%;height: 50px;">
            </div>
            <div class="login_r" >
            	<img src="__PUBLIC__/img/login_r.png" />
            </div>
        </div>

    <div class="block contact_box clearfix">
      <div class="w1200">
        <div class="contact_col1">
          <img src="__PUBLIC__/img/logo.png" />
          <p class="address">
         地址：深圳市宝安区宝民二路浩泰大厦608<br />
          </p>
          <img src="__PUBLIC__/img/erweima.png" class="ewm" />
        </div>
        <div class="contact_col2">
          <div class="col-2">
            <h3>广告主</h3>
            <div class="serv_list">
                <p><span><a target="_blank" href=""><img alt="QQ" src="http://wpa.qq.com/pa?p=1:3209150263:4" border="0" height="16">133222716</a></span></p>
                 <p><span><a target="_blank" href=""><img alt="QQ" src="http://wpa.qq.com/pa?p=1:3209150263:4" border="0" height="16"> 2892259217</a></span></p>
                 <p><span><a target="_blank" href=""><img alt="QQ" src="http://wpa.qq.com/pa?p=1:2725431255:4" border="0" height="16"> 772210873</a></span></p>         
                         
             </div>
          </div>
          <div class="col-2">
            <h3>网站主</h3>
            <div class="serv_list">
                 <p><span><a target="_blank" href="" border="0" height="16"><img alt="QQ" src="http://wpa.qq.com/pa?p=1:2355657055:4" border="0" height="16">1508790759</a></span></p>
                 <p><span><a target="_blank" href=""><img alt="QQ" src="http://wpa.qq.com/pa?p=1:2355657055:4" border="0" height="16">712621040</a></span></p>
                 <p><span><a target="_blank" href=""><img alt="QQ" src="http://wpa.qq.com/pa?p=1:2355657062:4" border="0" height="16"> 712621041</a></span></p>
                 <p><span><a target="_blank" href=""><img alt="QQ" src="http://wpa.qq.com/pa?p=1:2355657057:4" border="0" height="16"> 712621043</a></span></p>    
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="footer">
    <div class="footerbar w1200">
      <p>Copyright @ 2011-2016 www.qifann.com All rights reserved.    启凡   粤ICP备17015410号-5 </p>
    </div>
  </div><!--footer end-->
</div>
</body>
</html>

