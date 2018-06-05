<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpStudy\WWW\blog\public/../application/blog\view\register\register.html";i:1527133132;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style>
			body{background: grey;opacity: .5;}
			.register{width: 50%;text-align: center;margin-left: 25%;margin-top: 15%;box-shadow:0 0 8px #DDD;-moz-box-shadow:0 0 8px #DDD;-webkie-box-shadow:0 0 8px #DDD;padding: 40px 0px;}
			.register div{height: 40px;margin-bottom: 10px;}
			.register div label{display: inline-block;width: 120px;}
			.register div input[type="text"],.register div input[type="password"]{width: 260px;height: 30px;line-height: 30px;padding-left: 6px;}
			.register div input[type="submit"]{border: none;width: 80px;text-align: center;padding: 6px 0px;margin-top: 10px;}
		</style>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.js"></script>
	</head>
	<body >
		<form method="post" action="<?php echo url('register/register_submit'); ?>" accept-charset="utf-8"  >
		  <div class="register" >
		  	<div>
				<label>登录名</label>
				<input type="text" name="login_name" id = "login_name"  onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" maxlength="10" />
			</div>
			<!--<div>
				<label>博客邮箱</label>
				<input type="text" name="login_email" id="email" onclick="check()"   />
			</div>-->
			<div>
				<label>登陆密码</label>
				<input type="password" name="passwd" id="old_password" onkeyup="value=value.replace(/[^\a-\z\A-\Z0-9\@\.]/g,'')" maxlength="15"  />
			</div>
			<div>
				<label>确认密码</label>
				<input type="password" name="passwd" id="new_password" onkeyup="value=value.replace(/[^\a-\z\A-\Z0-9\@\.]/g,'')"  maxlength="15"    />
				<div id="tishi"></div>
			</div>
			<div>
				<input type="submit" value="确认提交"  id="submits" />
			</div>
		  </div>	
		</form>
	</body>
	<script>
		/*阻止submit的默认事件*/
		function defaults(){
			if (event.preventDefault) {
               event.preventDefault();
           	} else {
               event.returnValue = false;
           	}
		}
		//验证邮箱
		function check(e){
			var reg = new RegExp("^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$"); //正则表达式
			var obj = document.getElementById("email"); //要验证的对象
			if(obj.value === ""){ //输入不能为空
		　　　　alert("邮箱输入不能为空!");
			  obj.value = "";
		　　　　defaults();
		　　}else if(!reg.test(obj.value)){ //正则验证不通过，格式不对
		　　　　alert("验证不通过,请输入正确的邮箱号码!");
			  obj.value = "";
		　　　　defaults();
		　　}else{
		　　　　alert("通过！");
		　　　　return true;
		　　}
		}
		
		document.getElementById("submits").onclick =  function validate(event){
			var name = document.getElementById("login_name").value;
			var email = document.getElementById("email").value;
			var pwd1  = document.getElementById("old_password").value; 
			var pwd2  = document.getElementById("new_password").value;
			check();
			if(name === ""){
				alert("请输入登录名");
				defaults();
			}else if(pwd1 == pwd2) {
	            return true;
	        }else {
	              document.getElementById("tishi").innerHTML="<font color='red'>两次密码不相同,请重现输入</font>";
	              defaults();
	            
	        }
		}
	</script>
</html>
