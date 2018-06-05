<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"E:\phpstudy\WWW\blog\public/../application/blog\view\article\article.html";i:1525849165;s:64:"E:\phpstudy\WWW\blog\public/../application/blog\view\layout.html";i:1524725738;s:71:"E:\phpstudy\WWW\blog\public/../application/blog\view\public\header.html";i:1525423597;s:71:"E:\phpstudy\WWW\blog\public/../application/blog\view\public\footer.html";i:1525423092;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>登录记录 - 心若向阳博客管理系统</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" href="__PUBLIC__/images/icon/icon.png">
<link rel="shortcut icon" href="__PUBLIC__/images/icon/favicon.ico">
<script src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
<!--[if gte IE 9]>
  <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="js/html5shiv.min.js" type="text/javascript"></script>
  <script src="js/respond.min.js" type="text/javascript"></script>
  <script src="js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
</head>

<body class="user-select">
<section class="container-fluid">
  <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          	<span class="sr-only">切换导航</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="/">YlsatCMS</a> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">消息 <span class="badge">1</span></a></li>
            <li class="dropdown">
            	<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            		admin <span class="caret"></span>
            	</a>
              <ul class="dropdown-menu dropdown-menu-left">
             <!--   <li><a title="查看或修改个人信息" data-toggle="modal" data-target="#seeUserInfo">个人信息</a></li>-->
                <!--<li><a title="查看您的登录记录" data-toggle="modal" data-target="#seeUserLoginlog" href="" >登录记录</a></li>-->
              </ul>
            </li>
            <li><a href="<?php echo url('Login/login'); ?>" onClick="if(!confirm('是否确认退出？'))return false;">退出登录</a></li>
           <!-- <li><a data-toggle="modal" data-target="#WeChat">帮助</a></li>-->
          </ul>
          <!--<form action="" method="post" class="navbar-form navbar-right" role="search">
            <div class="input-group">
              <input type="text" class="form-control" autocomplete="off" placeholder="键入关键字搜索" maxlength="15">
              <span class="input-group-btn">
              <button class="btn btn-default" type="submit">搜索</button>
              </span>
            </div>
          </form>-->
        </div>
      </div>
    </nav>
  </header>
  <div class="row">
    <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
 
      <ul class="nav nav-sidebar">
        <li <?php if($maction == 'index'): ?>class="active"<?php endif; ?>><a href="<?php echo url('Index/index'); ?>">报告</a></li>
        <li <?php if($maction == 'article'): ?>class="active"<?php endif; ?>><a href="<?php echo url('Article/article'); ?>">文章</a></li>
        <li <?php if($maction == 'comment'): ?>class="active"<?php endif; ?>> <a href="<?php echo url('Comment/comment'); ?>">评论</a></li>
        <li <?php if($maction == 'message'): ?>class="active"<?php endif; ?>><a href="<?php echo url('Message/message'); ?>">留言</a></li>
        <li <?php if($maction == 'loginlog'): ?>class="active"<?php endif; ?>><a class="dropdown-toggle" id="otherMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">访问记录</a>
          <ul class="dropdown-menu" aria-labelledby="otherMenu">
            <li><a href="<?php echo url('Loginlog/loginlog'); ?>">访问记录</a></li>
          </ul>
        </li>
        
      </ul>
    </aside>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">

 <form action="/Article/checkAll" method="post" >
        <h1 class="page-header">操作</h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo url('Article/add_article',array('action'=>'article')); ?>">增加文章</a></li>
        </ol>
        <h1 class="page-header">管理 <span class="badge">7</span></h1>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th><span class="glyphicon glyphicon-th-large"></span> <span class="visible-lg">选择</span></th>
                <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">标题</span></th>
                <th><span class="glyphicon glyphicon-list"></span> <span class="visible-lg">分类</span></th>
                <th class="hidden-sm"><span class="glyphicon glyphicon-tag"></span> <span class="visible-lg">点赞</span></th>
                <th class="hidden-sm"><span class="glyphicon glyphicon-comment"></span> <span class="visible-lg">评论</span></th>
                 <th class="hidden-sm"><span class="glyphicon glyphicon-comment"></span> <span class="visible-lg">浏览</span></th>
                <th><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">日期</span></th>
                <th><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
              </tr>
            </thead>
            <tbody>
            	<!--  name是数据里面的变量  id相当于foreach的val -->
            <?php if(is_array($info['info']) || $info['info'] instanceof \think\Collection || $info['info'] instanceof \think\Paginator): $i = 0; $__LIST__ = $info['info'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
              <tr>
                <td><input type="checkbox" class="input-control checkboxs" name="checkbox[]" value="<?php echo $val['id']; ?>" /></td>
                <td ><?php echo $val['title']; ?></td>
                <td><?php echo $val['type']; ?></td>
                <td class="hidden-sm"><?php echo $val['star']; ?></td>
                <td class="hidden-sm"><?php echo $val['star']; ?></td>
                <td class="hidden-sm"><?php echo $val['browser']; ?></td>
                <td><?php echo $val['update_time']; ?></td>
                <td><a href="<?php echo url('Articleupdate/updatearticle',array('action'=>'article','id'=>$val['id'])); ?>">修改</a> 
                	<a rel="6" name="delet" onClick="return confirm('确定要删除吗?')" href="<?php echo url('Article/article_del',array('action'=>'article','id'=>$val['id'])); ?>" >删除</a>
                </td>
              </tr>
             <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table>
        </div>
        <footer class="message_footer">
          <nav>
            <div class="btn-toolbar operation" role="toolbar">
              <div class="btn-group" role="group"> 
              	<a class="btn btn-default" onClick="selects()">全选</a> 
              	<a class="btn btn-default" onClick="reverse()">反选</a>
              	<a class="btn btn-default" onClick="noselect()">不选</a> 
              </div>
              <div class="btn-group submitAll" role="group" style="border: 1px solid #D0D0D0;padding: 0px 5px;height: 34px;">
                <!--<button    title="删除全部选中" >删除</button>-->
                <a style="line-height: 32px;">全部删除</a>
              </div>
            </div>
            <!--<ul class="pagination pagenav">
              <li class="disabled"><a aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
              	<li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              	<li><a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
              
            </ul>-->
            
            <?php if($info['page'] != '1'): ?>
                  <a title="上一页" href="<?php echo url('article/article',array('page'=>$info['page']-1)); ?>">上一页</a>
             <?php endif; if(is_array($info['fenye']) || $info['fenye'] instanceof \think\Collection || $info['fenye'] instanceof \think\Paginator): $i = 0; $__LIST__ = $info['fenye'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vals): $mod = ($i % 2 );++$i;if($vals == $info['page']): ?>
                    <a style="background:#ff6651;"><font color="#fff"><?php echo $vals; ?></font></a>
                    <?php else: ?>
                    <a href="<?php echo url('article/article',array('page'=>$vals)); ?>"><?php echo $vals; ?></a>
                <?php endif; endforeach; endif; else: echo "" ;endif; if($info['page'] != $info['zys']): ?>
                <a title="下一页" href="<?php echo url('article/article',array('page'=>$info['page']+1)); ?>">下一页</a>
            <?php endif; ?>
             <a>共<?php echo $info['zys']; ?>页</a>
          </nav>
        </footer>
</form>
<script type="text/javascript">
		var select_all = [];//全选
		var checkall=document.getElementsByName("checkbox[]"); 
		var che_selects = [];
		//删除的公共函数
		function chec_del(check){
			if(check.checked==true){
	    		select_all.push($(check).val());
	    	}
		}
		function selects(){
			select_all = [];
		    for(var i=0;i<checkall.length;i++){
		    	checkall[i].checked=true;
		    	chec_del(checkall[i]);
		    }
		}
		$('.checkboxs').click(function(){
			select_all = [];
			 for(var i=0;i<checkall.length;i++){
		    	chec_del(checkall[i]);
		    }
		})
		//反选
		function reverse(){
			select_all = [];
			for(var i=0;i<checkall.length;i++){  
				if(checkall[i].checked){  
					checkall[i].checked=false;  
				}else{  
					checkall[i].checked=true;
					chec_del(checkall[i]);
				}  
			}
		}
		//全不选     
		function noselect(){ 
			select_all = [];
			for(var $i=0;$i<checkall.length;$i++){  
				checkall[$i].checked=false;  
			}  
		} 
		//删除
		$('.submitAll').click(function(){ //jaxa请求将id传值过去删除选中的数据
			console.log(select_all);
			$.ajax({
				type:"post",
				url:"<?php echo url('article/check_all'); ?>",
				async:true,
				data: {"date":select_all},
				success:function(data){
					console.log(data);
				}
			});
		})

</script>
</div>
  </div>
</section>

<script src="__PUBLIC__/js/bootstrap.min.js"></script> 
<script src="__PUBLIC__/js/admin-scripts.js"></script> 
</body>
</html>
