<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"D:\phpStudy\WWW\blog\public/../application/blog\view\comment\comment.html";i:1528710434;s:64:"D:\phpStudy\WWW\blog\public/../application/blog\view\layout.html";i:1524725738;s:71:"D:\phpStudy\WWW\blog\public/../application/blog\view\public\header.html";i:1528771347;s:71:"D:\phpStudy\WWW\blog\public/../application/blog\view\public\footer.html";i:1525423092;}*/ ?>
<!Doctype html>
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
            <li>
            	<a href="">消息 <span class="badge">1</span></a>
            </li>
            <li class="dropdown">
            	<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            		admin <span class="caret"></span>
            	</a>
              <!--<ul class="dropdown-menu dropdown-menu-left">
                <li><a title="查看或修改个人信息" data-toggle="modal" data-target="#seeUserInfo">个人信息</a></li>
                <li><a title="查看您的登录记录" data-toggle="modal" data-target="#seeUserLoginlog" href="" >登录记录</a></li>
              </ul>-->
            </li>
            <li><a href="<?php echo url('Login/login'); ?>" onClick="if(!confirm('是否确认退出？'))return false;">退出登录</a></li>
            <li><a href="<?php echo url('Register/register'); ?>" >注册</a></li>
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

    <h1 class="page-header">管理 <span class="badge">4</span></h1>
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">标题</span></th>
            <th><span class="glyphicon glyphicon-th-large"></span> <span class="visible-lg">评论内容</span></th>
            <th><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">日期</span></th>
            <th><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
          </tr>
        </thead>
        <tbody>
      	<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
          <tr>
            <td><?php echo $val['title']; ?></td>
            <td class="article-title"><?php echo $val['content']; ?></td>
            <td><?php echo date('Y-m-d',$val['create_time']); ?></td>
            <!--href="<?php echo url('Comment/comment_detail',array('action'=>'comment')); ?>"-->
            <td><a rel="<?php echo $val['id']; ?>" name="see"  class="see" onclick="see(this)"  >查看</a> 
            	<a rel="<?php echo $val['id']; ?>" name="delete" class="deletes" onclick="deletes(this)">删除</a>
            </td>
          </tr>
         <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>
    </div>
<script type="text/javascript">
	//点击查看
	function see(comments ){
		var id =  $(comments).attr("rel");
		var index = "comment";
		$.ajax({
			type:"post",
			url:"<?php echo url('Comment/comment_detail'); ?>",
			async:true,
			data:{"id":id},
			success:function(data){
					window.location.href = "/blog/comment/comment_detail/action/"+index+"/id/"+id; //页面跳转带的参数
			}
		});
	}
	//删除
	function deletes(del){
		var id =  $(del).attr("rel");
		if(!confirm('确定要删除吗?')){
			return false;
		};
		$.ajax({
			type:"post",
			url:"<?php echo url('Comment/comment_delet'); ?>",
			async:true,
			data:{"id":id},
			success:function(data){
					window.location.reload();
			}
		});
	}
</script>
      
</div>
  </div>
</section>

<script src="__PUBLIC__/js/bootstrap.min.js"></script> 
<script src="__PUBLIC__/js/admin-scripts.js"></script> 
</body>
</html>
