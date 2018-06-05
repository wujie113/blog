<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpStudy\WWW\blog\public/../application/home\view\public\header.html";i:1524822852;}*/ ?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title>心若向阳 无畏悲伤</title>
<meta name="Keywords" content="个人博客" >
<meta name="Description" content="个人原创博客" >
<link href="__PUBLIC__/css/index.css" rel="stylesheet">
<link href="__PUBLIC__/font/iconfont.css" rel="stylesheet" />
<link href="__PUBLIC__/font/demo.css" rel="stylesheet" />
<script src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/message.js" ></script>
<script type="text/javascript" src="__PUBLIC__/js/pre.js" ></script>
<script type="text/javascript" src="__PUBLIC__/js/love_clcik.js" ></script>
</head>
<body>
<header>
	<h1>
		<a href="#">陌上花开淡相随</a>
	</h1>
	<p>
		如果没有为陌上悄然伫立并为陌上风情所陶醉的人，那么花开也寂寞,风情也苍白...
	</p>
</header>
<!--nav begin-->
<div class="navswf">
<!--<object id="customMenu" data="__PUBLIC__/images/nav.swf" width="528" height="70" type="application/x-shockwave-flash">
	<param name="allowScriptAccess" value="always">
	<param name="allownetworking" value="all">
	<param name="allowFullScreen" value="true">
	<param name="wmode" value="transparent">
	<param name="menu" value="false">
	<param name="scale" value="noScale">
	<param name="salign" value="1">
</object>-->
<div style="display: block;height: 70px;"> </div>
<div id="nav" >
	<ul>
        <li><a  href="<?php echo url('Index/index'); ?>" <?php if($maction == 'index'): ?>class="active_a"<?php endif; ?>  title="首页">首页</a></li>
        <li><a  href="<?php echo url('Tech/tech'); ?>" <?php if($maction == 'tech'): ?>class="active_a"<?php endif; ?>  title="技术探讨">技术探讨</a></li>
        <li><a href="<?php echo url('Life/life'); ?>" <?php if($maction == 'life'): ?>class="active_a"<?php endif; ?>  title="Life/随笔">Life/随笔</a></li>
        <li><a href="<?php echo url('Js/js'); ?>" <?php if($maction == 'js'): ?>class="active_a"<?php endif; ?>  title="js/jquery">js/jquery</a></li>
        <li><a href="<?php echo url('Htmlcss/htmlcss'); ?>" <?php if($maction == 'htmlcss'): ?>class="active_a"<?php endif; ?>  title="html5/css3">html5|css3</a></li>       
        <li><a href="<?php echo url('About/about'); ?>" <?php if($maction == 'about'): ?>class="active_a"<?php endif; ?>  title="about me">about me</a></li>
       <li><a href="<?php echo url('Messages/messages'); ?>" <?php if($maction == 'messages'): ?>class="active_a"<?php endif; ?>  title="留言版">留言版</a></li>
    </ul>
</div>
</div>
<!--nav end-->

<!--nav begin-->

<!--nav  end-->
<div class="blank"></div>
<article >