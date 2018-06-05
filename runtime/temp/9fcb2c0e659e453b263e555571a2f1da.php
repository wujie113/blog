<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"E:\phpstudy\WWW\blog\public/../application/home\view\blogdetail\blogdetail.html";i:1525879833;s:64:"E:\phpstudy\WWW\blog\public/../application/home\view\layout.html";i:1524816741;s:71:"E:\phpstudy\WWW\blog\public/../application/home\view\public\header.html";i:1525860602;s:71:"E:\phpstudy\WWW\blog\public/../application/home\view\public\footer.html";i:1525877677;}*/ ?>
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

 <div class="about">
 	<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
		 	<label class="blog_detail_lable">
		 		<i class="icon iconfont icon-home"></i>
		 		<span>></span>
		 		<label class="blog_detail_header" ><?php echo $val['sign']; ?></label>
		 		<span>></span>
		 		<label class="blog_detail_title"><?php echo $val['title']; ?></label>
		 	</label>
		  	<p class="blog_p_title" ><?php echo $val['title']; ?></p>
		  	<label>
		  		<i class="icon iconfont icon-rili vertical"  ></i>
		  		<label><?php echo $val['sign']; ?></label>
		  		<span class="margin-left-20">
	  				<i class="icon iconfont icon-gerenyonghutouxiang vertical"  ></i>
	     			<span>伍洁</span>
	  			</span>
	  			<span class="margin-left-20">
	  				<i class="icon iconfont icon-huiyishiqueren_huabanfuben vertical"  ></i>
	     			<span>7个月前（03-02）</span>
	  			</span>
	  			<span class="margin-left-20">
	  				<i class="icon iconfont icon-liulan vertical" ></i>
	     			<span><?php echo $val['browser']; ?>浏览</span>
	  			</span>
	  			<span class="margin-left-20">
	  				<i class="icon iconfont icon-pinglun vertical"  ></i>
	     			<span>0个评论</span>
	  			</span>
		  	</label>
		  	<div class="detail_content">
		  		<?php echo $val['content']; ?>
		  		
		  	</div>
		  	<!---->
		  	<div class="div_like" >
		  		<span class="span_like" >
			  		<a href="#" class="blog_detail_a  thumbs-ups" >
			  			<i class="icon iconfont icon-buoumaotubiao15 vertical"  ></i> 喜欢 (<span class="count">0</span>)
			  		</a>
		  		</span>
		  		<span class="span_share" >
			  		<a href="#" class="blog_detail_a share" >
			  			<i class="icon iconfont icon-weibiaoti-  vertical"  ></i> 分享 (<span class="bds_count">0</span>)
			  		</a>
			  		<div>
			  			<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare share action-popover"  >
							<a class="bds_tsina"></a>
							<a class="bds_qzone"></a>
							<a class="bds_tqq"></a>
							<a class="bds_renren"></a>
							<span class="bds_more"></span>
						</div>
			  		</div>
		  		</span>
		  	</div>
		  	<div>
		  		<img src='http://www.xuechenlei.com/wp-content/uploads/myimg/b_0001.gif' style="vertical-align: middle;" />
		  		<label style="margin-left: 5px;margin-right: 5px;">润润</label>
		  		<span style="color: wheat;">发表我的评论</span>
		  	</div>
		  	<div  class="reply_text" style="margin-top: 10px;" >
			 	<textarea placeholder="来都来了，说点什么吧…" class="input-block-level comt-area" name="comment" id="comment" cols="100%" rows="3" tabindex="1"  >
				</textarea>
			<div>
			<button class="btn-sure">确定</button><button class="btn_cancle" >取消</button></div></div>
		  </div>
		 <?php endforeach; endif; else: echo "" ;endif; ?>
		<aside> 
			<h2>博客分类</h2>
			<ul>
			  <li><a href="">慢生活</a></li>
			  <li><a href="">程序人生</a></li>
			  <li><a href="">经典美文</a></li>
			</ul>
			<h2>近期文章</h2>
			<ul>
			  <li><a href="/">女孩都有浪漫的小情怀</a></li>
			  <li><a href="/">也许下个路口就会遇见希望</a></li>
			  <li><a href="/">6月毕业季，祝福送给你</a></li>
			  <li><a href="/">生活常有缺席的-可搞笑从来不缺席</a></li>
			  <li><a href="/">为了一个不存在的梦，执念了那么多年</a></li>
			</ul>
			<h2>文章归档</h2>
			<ul>
			  <li><a href="/">2018 年一月</a></li>
			  <li><a href="/">2018 年二月</a></li>
			  <li><a href="/">2018 年三月</a></li>
			</ul>
			<!--<h2>友情链接</h2>
			<ul>
			  <li><a href="/">个人博客</a></li>
			  <li><a href="/">百度</a></li>
			  <li><a href="/">Google</a></li>
			</ul>-->
		<!-- Baidu Button BEGIN -->
		<!-- Baidu Button END -->
		</aside>  
		<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
		<script type="text/javascript" id="bdshell_js"></script>
		<script type="text/javascript">
		document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
		</script>
		<script type="text/javascript">
			$('.span_share').hover(function(){
				$('.action-popover').css('display','block')
			},function(){
				$('.action-popover').css('display','none')
			})
		</script>
		
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