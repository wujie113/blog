<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:75:"D:\phpStudy\WWW\blog\public/../application/home\view\messages\messages.html";i:1528359819;s:64:"D:\phpStudy\WWW\blog\public/../application/home\view\layout.html";i:1524816741;s:71:"D:\phpStudy\WWW\blog\public/../application/home\view\public\header.html";i:1525920965;s:71:"D:\phpStudy\WWW\blog\public/../application/home\view\public\footer.html";i:1528685558;}*/ ?>
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

<div class="blog"  >
  	<div class="message-contend">
  		<h2 class="messge-pall-left" >留言板</h2>
  		<!--<div  class="messge-pall-right messge-pall" >
  			
  			<i class="icon iconfont  icon-fenxiang">
  				
  			</i>分享
  		</div>-->
  		<div class="message-boths">
  			<div class="messge-pall-right">
  				<a></a>
  			</div>
  		</div>
  		<div class="message-boths" >
  			<p class="line_height" >德才兼备  自强不息</p>
  			<p class="line_height">有任何问题以及建议都可以给我留言</p>
  		</div>
  		<div class="line_height">
  			<span class="messge-pall-left" >发表我的留言</span>
  			<span class="messge-pall-right" >
  				<button class="btn comment_btn">取消留言</button>
  			</span>
  		</div>
  	</div>
  	<div class="comt message-boths" >
  		<!--<div contentEditable="true" id="editor"  class="con input-block-level comt-area"  ></div> --> 
  		<textarea style="padding-left: 5px;width: 100%;" placeholder="  来都来了，说点什么吧…" style="width: 100%;min-height: 30px;" class="input-block-level comt-area" name="editor" id="editor" cols="100%" rows="3" tabindex="1"  ></textarea>
  	</div>
  	<div class="margin-top-10 emotion-height" >
  		<span class="messge-pall-left  emoticon">
  			<i class="icon iconfont  icon-biaoqing">表情</i>
  		</span>
  		<label class="messge-pall-right message-reply">
  			<input type="checkbox" name="comment_mail_notify" id="comment_mail_notify" value="comment_mail_notify"  class="vertical"  >
  			有人回复及时通知我
  			<button class="btn btn_submit"  name="submit" id="submits" tabindex="5" onclick="submits(this,'message')" >
  				<!--<i class="icon iconfont icon-pingluncomment43" class="vertical"  ></i>--> 
  				<i class="icon iconfont icon-3tuihuanhuozhengcegouxuan" class="vertical"  style="font-size: 16px;"  ></i> 
  				  <label style="position: relative;top: -2px;" > 提交评论 	</label>
  			</button>
  			
  		</label>
  	</div>
  	<div class="prompt" style="display: none;"  >
  		<p style="float: right;color: red;font-size: 16px;padding-right: 80px;">请勾选填写昵称和邮箱</p>
  	</div>
  	<div id="comment_smilies" class="hide message-boths message-margin-bottom" >
  		
	</div>
	<!--填入邮箱信息-->
	<div class="mailbox margin-top-10 message-boths fill-height"  >
		 <span style="" >
			<h4>hello！你需要填写昵称和邮箱哦(*^__^*) </h4>
		</span>
		<span >
			<ul>
				<li class="line_height message-margin">
					<label class="input_lable" >昵称（必填）:</label>
					<input type="text" name="name" id="name" class="input_text name" maxlength="12" placeholder="昵称..." onkeyup="value=value.replace(/[^\a-\z\A-\Z0-9\u4E00-\u9FA5\@\.]/g,'')"  />
				</li>
				<li class="line_height message-margin">
					<label class="input_lable">邮箱（必填）:</label>
					<input type="text" name="email" id="email" class="input_text email" placeholder="邮箱..."  />
				</li>
				<li class="line_height message-margin">
					<label class="input_lable">网址:</label>
					<input type="text" name="website" id="website" class="input_text website" placeholder="网址..." />
				</li>
				
			</ul>
		</span>
	</div>
	<div class="message-boths color_word" >
		<i class="icon iconfont  icon-liuyan" class="vertical"  ></i>
		<b><?php echo $mess_count; ?></b>
		个小伙伴正在吐槽
	</div>
	<hr class="hr_message"/>
	
	<div class="ul-padding" >
		<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
			<ul>
				<li>
					<div  class="message_blog"   >
						<img class="title_img" src='/static/home/images/default.png'  />
						<span>
							<div >
								<?php echo $val['content']; ?>
							</div>
							<div >
								<label><?php echo $val['name']; ?>&nbsp;&nbsp;2018-03-25</label>
								<a  class="reply_leave color_word" name="<?php echo $val['id']; ?>" onclick="reply(this)" >回复</a>
							</div>
						</span>
					</div>
					<div  class="reply_text" style="display: none;" >
					 	<textarea placeholder="来都来了，说点什么吧…" class="input-block-level comt-area" name="comment" class="comment" cols="100%" rows="3" tabindex="1"  ></textarea>
						<div  >
							<button class="btn-sure" onclick="determine(this,'messages')" >确定</button>
							<button class="btn_cancle" onclick="cancel(this)" >取消</button>
						</div>
					</div>
					<?php if(is_array($val['anwser_info']) || $val['anwser_info'] instanceof \think\Collection || $val['anwser_info'] instanceof \think\Paginator): $i = 0; $__LIST__ = $val['anwser_info'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rplay): $mod = ($i % 2 );++$i;?>
						<ul>
							<li>
								<div  class="message_blog"   >
									<img class="title_img" src='/static/home/images/default.png'  />
									<span>
										<div >
											<?php echo $rplay['content']; ?>
										</div>
										<div >
											<label><?php echo $rplay['name']; ?>&nbsp;&nbsp;2018-03-25</label>
											<!--每次回复是拿到父级id-->
											<a  class="reply_leave color_word" name="<?php echo $val['id']; ?>" onclick="reply(this)" >回复</a>
										</div>
									</span>
								</div>
								<div  class="reply_text" style="display: none;" >
								 	<textarea placeholder="来都来了，说点什么吧…" class="input-block-level comt-area" name="comment" class="comment" cols="100%" rows="3" tabindex="1"  ></textarea>
									<div>
										<button class="btn-sure" onclick="determine(this,'messages')" >确定</button>
										<button class="btn_cancle" onclick="cancel(this)" >取消</button>
									</div>
								</div>
								
							</li>
						</ul>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</li>
			</ul>
		<?php endforeach; endif; else: echo "" ;endif; ?>
				
	</div>
	
  </div>
  
  <aside>
  	jbojkj
  </aside>
 <script type="text/javascript">
	//点击取消评论的时候
	$('.comment_btn').click(function(){
		$('#editor').val("");
		if($('#comment_mail_notify').is(':checked')){
			$('#comment_mail_notify').prop("checked",false);
			$('.mailbox').css('display','none');
		}
	});
 </script>


</article>
<div class="blank"></div>
<div id="copright">Design by DanceSmile</div>
<script  type="text/javascript" >
//点击继续阅读浏览
var id;
var index;
var i;
function browser(aa,index,i){
	id = $(aa).attr("name");
	index = index;
	i = i;
	console.log(id);
	window.location.reload();
	$.ajax({
		type:"post",
		url:"<?php echo url('Blogdetail/blogdetail_ajax'); ?>", //ajax请求需要的操作
		async:true,
		data:{'id':id},
		success:function(data){
			var data = JSON.parse(data);
			if(data.msg == 1){
				window.location.href = "/home/blogdetail/blogdetail/action/"+index+"/id/"+id+"/i/"+i; //页面跳转带的参数
			}
		}
	});
}
function titleName(type) {
	if (type == "tech") {
		return "技术谈论"
	}
}
//页面显示多少长度文字用。。。代替
$(function(){
 	$(".words").each(function () {
 		var maxwidth = 150;
   		if($(this).text().length >= maxwidth){
   			var b = $(this).children().is("label"); 
   			if(b){
   				$(this).children().text($(this).children().text().substring(0, maxwidth) + "...");  //截取我想要的长度
   			}else{
   				$(this).text($(this).text().substring(0, maxwidth));  
				$(this).text($(this).text() + "...");  
   			}
   		} 
 	});
 });
 //点赞
var star_id;
function star(aa){
	star_id = $(aa).attr("name");
	$.ajax({
		type:"post",
		url:"<?php echo url('Star/star_ajax'); ?>", //ajax请求需要的操作
		async:true,
		data:{'id':star_id},
		success:function(data){
			var datas = JSON.parse(data);
			var msg = datas.msg;
			if(msg){
				alert("您已经点过赞啦！");
			}else{
				location.reload();//点赞的话需要刷新页面
			}
		}
	});
}
//勾选回复需要填写邮箱和昵称
$('#comment_mail_notify').click(function(){
	if($('#comment_mail_notify').is(':checked')){
		$(".prompt").css('display','none');
		$('.mailbox').css('display','block');
	}else{
		$('.mailbox').css('display','none');
	}
});
//点击表情的时候 留言和评论
var img_block = 1;
$('.emoticon').click(function(){
	$.ajax({
		type:"post",
		url:"<?php echo url('Messages/messages_ajax'); ?>",
		async:true,
		data:{"id":1},
		success:function(data){
			var data = JSON.parse(data);
			var img_url = data.data;
			var img = '';
			for(var i = 0; i<img_url.length; i++ ){
				var img_attr = img_url[i].slice(0,img_url[i].length-4);//给每个标识
				img += "<img  data-smile="+img_attr+" src='__PUBLIC__/images/arclist/"+img_url[i]+"' onclick='employs(this)' />";
			}
			var img_employ = document.getElementById('comment_smilies');
			img_employ.innerHTML = img;
		}
	});
	if(img_block == 1){
		$('#comment_smilies').css('display','block');
		img_block = 0;
	}else if(img_block == 0){
		$('#comment_smilies').css('display','none');
		img_block = 1;
	}
});
//这个是吧表情放到输入框
function employs(aa){
	var img_src = $(aa).attr('data-smile');//获取图片自定义的属性
	var employ = ":"+img_src+":";
	var tet = $('#editor').val();
	if($.trim(tet)==""){ //判断输入框的内容是否为空
	 	$('#editor').val("  "+employ+"  ");
	}else{
	 	$('#editor').val(tet+"   "+employ);
	}
	$('#comment_smilies').css('display','none');
}
//点击回复留言和评论
//回复留言
function reply(aa){
	var  coment_id =  $(aa).attr('name');
	$('.reply_text').css('display','none');
	$(aa).parents('.message_blog').next('.reply_text').css('display','block');
	$(aa).parents('.message_blog').next('.reply_text').attr("anwser_id",coment_id);
};
//取消回复和评论
function cancel(aa){
	$(aa).parents('.reply_text').css("display",'none'); //找到当前这个让其取消
	$(aa).parent().prev().val("");
}
/*回复评论*/
function determine(replay,comment){
	var anwser_id= $(replay).parents('.reply_text').attr('anwser_id'); //回复哪条评论的父级id
	var comments = $(replay).parent().prev().val();
	if($.trim(comments)==""){ //判断输入框里面的内容为空
		return false;
	}
	var urls;
	if(comment =="comment"){
		urls = "<?php echo url('Comment/replay_comment'); ?>";
	}else if(comment =="messages"){
		urls = "<?php echo url('Messages/replay'); ?>";
	}
	$.ajax({
	 	type:"post",
	 	url:urls,
	 	data:{'anwser_id':anwser_id,'comments':comments},
	 	async:true,
	 	success:function(data){
	 		console.log(data);
	 		var dates = JSON.parse(data);
	 		if(dates.msg == 1){
	 			$(replay).parents('.reply_text').css("display",'none');
	 			location.reload();//点赞的话需要刷新页面
	 		}
	 	}
	 });
}
//点击提交的时候的逻辑
function submits(aa,comment){
	if(!$(".vertical").is(':checked')){
		alert('请勾选填写信息');
		return false;
	}
//	var allcookies = document.cookie;    
//	console.log(allcookies);
	//验证邮箱
	var filter=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	//验证网址
//	var strRegex ='(https?|ftp|file)://[-A-Za-z0-9+&@#/%?=~_|!:,.;]+[-A-Za-z0-9+&@#/%=~_|]'; 
	var strRegex ='[-A-Za-z0-9+&@#/%?=~_|!:,.;]+[-A-Za-z0-9+&@#/%=~_|]'; 
	var re=new RegExp(strRegex);
	var name = $('#name').val();
	var email = $('#email').val();
	var website = $('#website').val();
	var editor = $('#editor').val();
	if(filter.test(email)){
//		return true;
	}else{
		alert("请填写正确的邮箱地址");
		$('#email').val("");
		return false;
	}
	if(re.test(website)){
		
	}else{
		alert("请填写正确的url地址,带http://的");
		 $('#website').val();
		return false;
	}
	if($('#comment_mail_notify').is(':checked')){
		$(".prompt").css('display','none');
		if(name=="" || email=="" || website=="" || $.trim(editor)==""){
			alert("请填写完整的信息");
			return false;
		}
	}else{
		$(".prompt").css('display','block');
		alert("请填写完整的信息");
		return false;
	}
	var data,urls;
	if(comment =="message"){
		data = {'name':name,'email':email,'website':website,'editor':editor};
		urls ="<?php echo url('Messages/comment'); ?>";
	}else if(comment =="comment"){
		var pageid = $(aa).attr('pageid');
		data = {'name':name,'email':email,'website':website,'editor':editor,"pageid":pageid};
		urls ="<?php echo url('Comment/comment'); ?>";
	}
	 $.ajax({
	 	type:"post",
	 	url:urls,
	 	data:data,
	 	async:true,
	 	success:function(data){
	 		var datas = JSON.parse(data);
	 		if(datas.msg == 1){
	 			location.reload();
	 			$('.mailbox').css('display','none');
	 			$('#comment_mail_notify').attr('checked',false);
				
	 		}else{
	 			
	 		}
	 	}
	 });
};
</script>

</body>
</html>