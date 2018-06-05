<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:63:"E:\phpstudy\WWW\blog\public/../application/home\view\js\js.html";i:1525878073;s:64:"E:\phpstudy\WWW\blog\public/../application/home\view\layout.html";i:1524816741;s:71:"E:\phpstudy\WWW\blog\public/../application/home\view\public\header.html";i:1525860602;s:71:"E:\phpstudy\WWW\blog\public/../application/home\view\public\footer.html";i:1525877677;}*/ ?>
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
<!--<script type="text/javascript" src="__PUBLIC__/js/pre.js" ></script>-->
<!--<script type="text/javascript" src="__PUBLIC__/js/love_clcik.js" ></script>-->
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
        <li><a href="<?php echo url('Life/life'); ?>" <?php if($maction == 'life'): ?>class="active_a"<?php endif; ?>  title="Life/随笔">慢生活</a></li>
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

<div class="pre_text" >
	<div id="scrollBox">
	    <ul id="con1">
	        <li>如果觉得文章写得不错,请点赞<li>
	        <li>前端分享学习博客，探究前端相关技术<li>
	        <li>有任何问题都可以留言一起探究<li>
	        <li>有好的建议可以留言一起讨论<li>
	      </ul>
	    <ul id="con2"></ul>
	</div>
</div>
<div class="blog"  >
  	<!-- blog list begin-->
  	<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
	  <div class="blog-div" >
	  	<h2><a href="#"><?php echo $val['title']; ?></a></h2>
	  	<p class="datetime"><?php echo $val['create_time']; ?></p>
		<a class="topimg" href="#" >
			<img src="<?php echo $val['titlepic']; ?>"  >
		</a>
		<label class="lable_content" >
			<span>
				<?php echo $val['describe']; ?>
			</span>
			<a name="<?php echo $val['id']; ?>" onclick="browser(this,'js',4)"  rel="nofollow" class="more-link">继续阅读 »</a>
			<p class="read">
	  			<span >
	  				<i class="icon iconfont icon-touxiang" ></i>
	     			<span>伍洁</span>
	  			</span>
	  			<span >
	  				<i class="icon iconfont icon-huiyishiqueren_huabanfuben" ></i>
	     			<span>7个月前（03-02）</span>
	  			</span>
	  			<span >
	  				<i class="icon iconfont icon-liulan" ></i>
	     			<span><?php echo $val['browser']; ?>浏览</span>
	  			</span>
	  			<span >
	  				<a href="javascript:;" class="thumbs-up" >
	  					<i class="icon iconfont icon-buoumaotubiao16" ></i>
	     				<span>4个赞</span>
	  				</a>
	  			</span>
	  		</p>
		</label>
	 </div>
	 <hr />
	 <?php endforeach; endif; else: echo "" ;endif; ?>
 <!-- blog list end-->
  </div>
  
  <aside>
  	jbojkj
  </aside>
  <script type="text/javascript" src="__PUBLIC__/js/pre.js" ></script>
</article>
<div class="blank"></div>
<div id="copright">Design by DanceSmile</div>
<script>
	var id;
	var index;
	var i;
	function browser(aa,index,i){
		id = $(aa).attr("name");
		index = index;
		i = i;
		console.log(id);
		$.ajax({
			type:"post",
			url:"<?php echo url('Blogdetail/blogdetail_ajax'); ?>", //ajax请求需要的操作
			async:true,
			data:{'id':id},
			success:function(data){
				console.log(data);
				location.href = "/home/blogdetail/blogdetail/action/"+index+"/id/"+id+"/i/"+i; //页面跳转带的参数
			}
		});
	}


function titleName(type) {
	if (type == "tech") {
		return "技术谈论"
	}
}

</script>
</body>
</html>