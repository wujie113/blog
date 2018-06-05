<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:82:"D:\phpStudy\WWW\thinkphp\public/../application/website\view\register\register.html";i:1508489174;s:71:"D:\phpStudy\WWW\thinkphp\public/../application/website\view\layout.html";i:1508314948;s:78:"D:\phpStudy\WWW\thinkphp\public/../application/website\view\public\header.html";i:1508488634;s:78:"D:\phpStudy\WWW\thinkphp\public/../application/website\view\public\footer.html";i:1508321312;}*/ ?>

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

<div class="banner_460  page_register">   
</div>
 <div class="container"> 
   <div class="regTab">
	<div id="js_regTabTit" class="regTabTit">
		<span id="qf_web" >网站主</span>
		<span id="qf_ad" >广告主</span>
		<a href="login.html">有账号？立即登录 &gt;</a>
	</div>
	<div id="js_regweb" class="regTabCon" style="display: none;">
		<div class="regList wzz">
			<form action="/register" name="form1" method="post" onsubmit="" id="form1">
				<dl>
					<dt>设置网站主用户名(不能使用中文)</dt>
					<input type="hidden" name="user_type" value="1">
					<dd><label><i>*</i>用户名：</label><input type="text" class="yhm" name="username" id="username"><span>请输入用户名,3-20位</span></dd>
					<dd><label><i>*</i>密码：</label><input type="password" class="mm" name="password" id="password"><span>使用英文字母加数字的组合，且在6-16个字符以内</span></dd>
					<dd><label><i>*</i>确认密码：</label><input type="password" class="qrmm" name="passwordre" id="passwordre"><span>请再输入一遍您上面输入的密码</span></dd>
				</dl>
				<dl>
					<dt>设置个人信息</dt>
					<dd><label><i>*</i>联系人：</label><input type="text" class="lxr" name="contact" id="contact"><span>请输入联系人姓名</span></dd>
					<dd><label><i>*</i>手机号码：</label><input type="text" class="sj" name="mobile" id="mobile"><span>请输入您的手机号码</span></dd>
					<dd><label><i>*</i>QQ号：</label><input type="text" class="qq" name="qq" id="qq"><span>请输入QQ号码</span></dd>
					<dd><label>地址：</label><input type="text" class="add" name="address" id="address"></dd>
					<dd><label><i>*</i>银行名称：</label><select class="bank" name="bank"  id="bank">
						<option value="icbc">中国工商银行</option>
						<option value="cmbc">招商银行</option>
						<option value="ccb">中国建设银行</option>
						<option value="abc">中国农业银行</option>
						<option value="cmbc2">民生银行</option>
						<option value="boc">中国银行</option>
						<option value="bocom">交通银行</option>
						<option value="citic">中信银行</option>
						<option value="cib">兴业银行</option>
						<option value="cebbank">光大银行</option>
						<option value="cgbchina">广发银行</option>
						<option value="hxb">华夏银行</option>
						<option value="pingan">平安银行</option>
						<option value="spdb">上海浦东发展银行 </option>
					</select></dd>
					<dd><label><i>*</i>收款人姓名：</label><input type="text" class="name2" name="accountname" id="accountname"><span>必须要跟开户银行帐号一致。注册后不可修改</span></dd>
					<dd><label><i>*</i>开户行所在地：</label><select name="prov" id="prov"  class="sel1">
							<option value="">选择省份</option>
							<option value="北京">北京</option>
							<option value="上海">上海</option>
							<option value="重庆">重庆</option>
							<option value="天津">天津</option>
							<option value="浙江">浙江</option>
							<option value="广东">广东</option>
							<option value="安徽">安徽</option>
							<option value="福建">福建</option>
							<option value="海南">海南</option>
							<option value="河北">河北</option>
							<option value="河南">河南</option>
							<option value="黑龙江">黑龙江</option>
							<option value="湖北">湖北</option>
							<option value="湖南">湖南</option>
							<option value="甘肃">甘肃</option>
							<option value="广西">广西</option>
							<option value="贵州">贵州</option>
							<option value="吉林">吉林</option>
							<option value="江西">江西</option>
							<option value="江苏">江苏</option>
							<option value="辽宁">辽宁</option>
							<option value="内蒙古">内蒙古</option>
							<option value="宁夏">宁夏</option>
							<option value="青海">青海</option>
							<option value="山东">山东</option>
							<option value="山西">山西</option>
							<option value="陕西">陕西</option>
							<option value="四川">四川</option>
							<option value="西藏">西藏</option>
							<option value="新疆">新疆</option>
							<option value="云南">云南</option>
							<option value="台湾">台湾</option>
							<option value="香港">香港</option>
							<option value="澳门">澳门</option>
													</select>
						<select name="city" id="city" class="sel2">
							<option value="">选择城市</option>
						</select><span>请选择开户行所在城市</span></dd>
					<dd><label><i>*</i>开户行：</label><input type="text" class="khh" name="bankname" id="bankname"><span>请务必填写详细的开户分行，如：xx市/县级市 xx支行</span></dd>
					<dd><label><i>*</i>收款账号：</label><input type="text" class="zh" name="bankacc" id="bankacc"><span>请填写正确的收款账号，一经提交，不能修改</span></dd>
					<dd><label><i>*</i>选择客服：</label>
						<select class="kf" name="serviceid" id="serviceid">
							<option>请选择客服</option>
							<option value="51">QF-张</option>
							<option value="45">QF-西西</option>
							<option value="48">QF-君君</option>
							<option value="50">QF-李庭</option>
							<option value="43">QF-为名</option>
						</select>
						<span>请选择客服</span></dd>
					<dd >
						<label style="float: left;"><i>*</i>验证码：</label>
						<input type="text" name="verifyCode" id="verifyCode" style="width:110px;">
						<img alt="点击换图" title="点击换图" align="absmiddle" id="yw0" src="/default/captcha?v=59880b408650b" style="display: inline-block">
						<a id="yw0_button" href="/default/captcha?refresh=1"></a>	
					</dd>
				</dl>
				<p><input type="submit" value="注册" name="submit" class="zcBtn" style="text-align: center;"></p>
			</form>
		</div>
		<div class="regList ggz" style="display: none;">
			<form action="/register" name="form2" method="post"  id="form2">
				<dl>
					<dt>设置用户名(不能使用中文)</dt>
					<input type="hidden" name="user_type" value="2">
					<dd><label><i>*</i>用户名：</label><input type="text" class="yhm" name="username" id="username"><span>请输入用户名,3-20位</span></dd>
					<dd><label><i>*</i>密码：</label><input type="password" class="mm" name="password" id="password"><span>使用英文字母加数字的组合，且在6-16个字符以内</span></dd>
					<dd><label><i>*</i>确认密码：</label><input type="password" class="qrmm" name="passwordre" id="passwordre"><span>请再输入一遍您上面输入的密码</span></dd>
				</dl>
				<dl>
					<dt>设置个人信息</dt>
					<dd><label><i>*</i>联系人：</label><input type="text" class="lxr" name="contact" id="contact"><span>请输入联系人姓名</span></dd>
					<dd><label><i>*</i>手机号码：</label><input type="text" class="sj" name="mobile" id="mobile"><span>请输入您的手机号码</span></dd>
					<dd><label><i>*</i>QQ号：</label><input type="text" class="qq" name="qq" id="qq"><span>请输入QQ号码</span></dd>
					<dd><label>地址：</label><input type="text" class="add" name="address" id="address"></dd>
					<dd><label><i>*</i>选择客服：</label>
						<select class="kf" name="advserviceid" id="advserviceid">
							<option>请选择客服</option>
														<option value="87">QF-张</option>
														<option value="86">QF-西西</option>
														<option value="937">QF-君君</option>
														<option value="7">QF-李庭</option>
														<option value="8">QF-为名</option>
													</select>
						<span>请选择客服</span></dd>
					<dd><label><i>*</i>验证码：</label>
						<input type="text" name="verifyCode" id="verifyCode" style="width:110px;">
						<img alt="点击换图" title="点击换图" align="absmiddle" id="yw1" src="/default/captcha?v=59880b408f176"><a id="yw1_button" href="/default/captcha?refresh=1"></a>					</dd>

				</dl>
				<p><input type="submit" value="注册" name="submit" class="zcBtn"></p>
			</form>
		</div>
	</div>
		<div id="js_regAd" class="regTabCon">
		<div class="regList wzz">
			<form action="/register" name="form1" method="post"  id="form2">
				<dl>
					<dt>设置广告主用户名(不能使用中文)</dt>
					<input type="hidden" name="user_type" value="1">
					<dd><label><i>*</i>用户名：</label><input type="text" class="yhm" name="username" id="username"><span>请输入用户名,3-20位</span></dd>
					<dd><label><i>*</i>密码：</label><input type="password" class="mm" name="password" id="password"><span>使用英文字母加数字的组合，且在6-16个字符以内</span></dd>
					<dd><label><i>*</i>确认密码：</label><input type="password" class="qrmm" name="passwordre" id="passwordre"><span>请再输入一遍您上面输入的密码</span></dd>
				</dl>
				<dl>
					<dt>设置个人信息</dt>
					<dd><label><i>*</i>联系人：</label><input type="text" class="lxr" name="contact" id="contact"><span>请输入联系人姓名</span></dd>
					<dd><label><i>*</i>手机号码：</label><input type="text" class="sj" name="mobile" id="mobile"><span>请输入您的手机号码</span></dd>
					<dd><label><i>*</i>QQ号：</label><input type="text" class="qq" name="qq" id="qq"><span>请输入QQ号码</span></dd>
					<dd><label>地址：</label><input type="text" class="add" name="address" id="address"></dd>
					<dd><label><i>*</i>银行名称：</label><select class="bank" name="bank" onchange="javascript:Dobank();" id="bank">
						<option value="icbc">中国工商银行</option>
						<option value="cmbc">招商银行</option>
						<option value="ccb">中国建设银行</option>
						<option value="abc">中国农业银行</option>
						<option value="cmbc2">民生银行</option>
						<option value="boc">中国银行</option>
						<option value="bocom">交通银行</option>
						<option value="citic">中信银行</option>
						<option value="cib">兴业银行</option>
						<option value="cebbank">光大银行</option>
						<option value="cgbchina">广发银行</option>
						<option value="hxb">华夏银行</option>
						<option value="pingan">平安银行</option>
						<option value="spdb">上海浦东发展银行 </option>
					</select></dd>
					<dd><label><i>*</i>收款人姓名：</label><input type="text" class="name2" name="accountname" id="accountname"><span>必须要跟开户银行帐号一致。注册后不可修改</span></dd>
					<dd><label><i>*</i>开户行所在地：</label><select name="prov" id="prov" onchange="change_province('prov','city')" class="sel1">
							<option value="">选择省份</option>
							<option value="北京">北京</option>
							<option value="上海">上海</option>
							<option value="重庆">重庆</option>
							<option value="天津">天津</option>
							<option value="浙江">浙江</option>
							<option value="广东">广东</option>
							<option value="安徽">安徽</option>
							<option value="福建">福建</option>
							<option value="海南">海南</option>
							<option value="河北">河北</option>
							<option value="河南">河南</option>
							<option value="黑龙江">黑龙江</option>
							<option value="湖北">湖北</option>
							<option value="湖南">湖南</option>
							<option value="甘肃">甘肃</option>
							<option value="广西">广西</option>
							<option value="贵州">贵州</option>
							<option value="吉林">吉林</option>
							<option value="江西">江西</option>
							<option value="江苏">江苏</option>
							<option value="辽宁">辽宁</option>
							<option value="内蒙古">内蒙古</option>
							<option value="宁夏">宁夏</option>
							<option value="青海">青海</option>
							<option value="山东">山东</option>
							<option value="山西">山西</option>
							<option value="陕西">陕西</option>
							<option value="四川">四川</option>
							<option value="西藏">西藏</option>
							<option value="新疆">新疆</option>
							<option value="云南">云南</option>
							<option value="台湾">台湾</option>
							<option value="香港">香港</option>
							<option value="澳门">澳门</option>
													</select>
						<select name="city" id="city" class="sel2">
							<option value="">选择城市</option>
						</select><span>请选择开户行所在城市</span></dd>
					<dd><label><i>*</i>开户行：</label><input type="text" class="khh" name="bankname" id="bankname"><span>请务必填写详细的开户分行，如：xx市/县级市 xx支行</span></dd>
					<dd><label><i>*</i>收款账号：</label><input type="text" class="zh" name="bankacc" id="bankacc"><span>请填写正确的收款账号，一经提交，不能修改</span></dd>
					<dd><label><i>*</i>选择客服：</label>
						<select class="kf" name="serviceid" id="serviceid">
							<option>请选择客服</option>
							<option value="51">QF-张</option>
							<option value="45">QF-西西</option>
							<option value="48">QF-君君</option>
							<option value="50">QF-李庭</option>
							<option value="43">QF-为名</option>
						</select>
						<span>请选择客服</span></dd>
					<dd >
						<label style="float: left;"><i>*</i>验证码：</label>
						<input type="text" name="verifyCode" id="verifyCode" style="width:110px;">
						<img alt="点击换图" title="点击换图" align="absmiddle" id="yw0" src="/default/captcha?v=59880b408650b" style="display: inline-block">
						<a id="yw0_button" href="/default/captcha?refresh=1"></a>	
					</dd>
				</dl>
				<p><input type="submit" value="注册" name="submit" class="zcBtn" style="text-align: center;"></p>
			</form>
		</div>
		<div class="regList ggz" style="display: none;">
			<form action="/register" name="form2" method="post" onsubmit="return jQuery.formValidator.PageIsValid('1');" id="form2">
				<dl>
					<dt>设置用户名(不能使用中文)</dt>
					<input type="hidden" name="user_type" value="2">
					<dd><label><i>*</i>用户名：</label><input type="text" class="yhm" name="username" id="username"><span>请输入用户名,3-20位</span></dd>
					<dd><label><i>*</i>密码：</label><input type="password" class="mm" name="password" id="password"><span>使用英文字母加数字的组合，且在6-16个字符以内</span></dd>
					<dd><label><i>*</i>确认密码：</label><input type="password" class="qrmm" name="passwordre" id="passwordre"><span>请再输入一遍您上面输入的密码</span></dd>
				</dl>
				<dl>
					<dt>设置个人信息</dt>
					<dd><label><i>*</i>联系人：</label><input type="text" class="lxr" name="contact" id="contact"><span>请输入联系人姓名</span></dd>
					<dd><label><i>*</i>手机号码：</label><input type="text" class="sj" name="mobile" id="mobile"><span>请输入您的手机号码</span></dd>
					<dd><label><i>*</i>QQ号：</label><input type="text" class="qq" name="qq" id="qq"><span>请输入QQ号码</span></dd>
					<dd><label>地址：</label><input type="text" class="add" name="address" id="address"></dd>
					<dd><label><i>*</i>选择客服：</label>
						<select class="kf" name="advserviceid" id="advserviceid">
							<option>请选择客服</option>
														<option value="87">QF-张</option>
														<option value="86">QF-西西</option>
														<option value="937">QF-君君</option>
														<option value="7">QF-李庭</option>
														<option value="8">QF-为名</option>
													</select>
						<span>请选择客服</span></dd>
					<dd><label><i>*</i>验证码：</label>
						<input type="text" name="verifyCode" id="verifyCode" style="width:110px;">
						<img alt="点击换图" title="点击换图" align="absmiddle" id="yw1" src="/default/captcha?v=59880b408f176"><a id="yw1_button" href="/default/captcha?refresh=1"></a>					</dd>

				</dl>
				<p><input type="submit" value="注册" name="submit" class="zcBtn"></p>
			</form>
		</div>
	</div>
</div>
    
	
</div>
<script type="text/javascript">
	$('#qf_web').click(function(){
			$('#js_regAd').css('display','none');
			$('#js_regweb').css('display','block');
			$('#qf_ad').removeClass('act');
			$('#qf_web').addClass('act');
			
		});
		//点击广告主的时候
		$('#qf_ad').click(function(){
			$('#js_regweb').css('display','none');
			$('#js_regAd').css('display','block');
			$('#qf_web').removeClass('act');
			$('#qf_ad').addClass('act');
		})
</script>
<div class="footer">
    <div class="footerbar w1200">
      <p>Copyright @ 2011-2016 www.qifann.com All rights reserved.    启凡   粤ICP备17015410号-5 </p>
    </div>
  </div><!--footer end-->
</div>
</body>
</html>

