<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\blog\public/../application/blog\view\login\index.html";i:1526973111;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<meta name="viewport" content="width=device-width"/>
<meta name="viewport" content="initial-scale=1.0,user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="stylesheet" href="__PUBLIC__/css/login.css" type="text/css" />
</head>

<body>
<form  method="post" action="<?php echo url('Login/login_in'); ?>" > 
<div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
      <div class="login__form">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name login__input_name" required autofocus autocomplete="off" name="username" placeholder="Username"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass login__input_pass" required autocomplete="off" name="password" placeholder="Password"/>
        </div>
        <button type="button" class="login__submit">Login in</button>
        <p class="login__signup">Don't have an account? &nbsp;<a>Login up</a></p>
      </div>
    </div>
  </div>
</div>
</form>
<script type="text/javascript" src='__PUBLIC__/js/jquery-2.1.4.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/js/login.js'></script>

</body>
</html>

