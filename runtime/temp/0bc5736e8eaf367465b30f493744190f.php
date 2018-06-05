<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"D:\phpStudy\WWW\thinkphp\public/../application/erp\view\custom\sitetatus.html";i:1511855342;s:67:"D:\phpStudy\WWW\thinkphp\public/../application/erp\view\layout.html";i:1511754310;s:74:"D:\phpStudy\WWW\thinkphp\public/../application/erp\view\public\header.html";i:1511946476;s:74:"D:\phpStudy\WWW\thinkphp\public/../application/erp\view\public\footer.html";i:1511940742;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>首页</title>
		<meta name="description" content="Dashboard" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <link rel="shortcut icon" href="__PUBLIC__/img/favicon.png" type="image/x-icon">
		<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" />
	    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
	    <link href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" />
	    <link href="__PUBLIC__/css/weather-icons.min.css" rel="stylesheet" />
<!--	    <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">-->
	    <link  href="__PUBLIC__/css/beyond.min.css" rel="stylesheet" type="text/css" />
	    <link href="__PUBLIC__/css/demo.min.css" rel="stylesheet" />
	    <link href="__PUBLIC__/css/typicons.min.css" rel="stylesheet" />
	    <link href="__PUBLIC__/css/animate.min.css" rel="stylesheet" />
	    <link id="skin-link" href="" rel="stylesheet" type="text/css" />
	    <link href="__PUBLIC__/css/qf.css" rel="stylesheet" type="text/css" />
	     <link href="__PUBLIC__/css/dataTables.bootstrap.css" rel="stylesheet" />
		<script type="text/javascript" src="__PUBLIC__/js/skins.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
		<script src="__PUBLIC__/js/layerUi/layer.js"></script>
	</head>
	<body>
		 <!-- Loading Container -->
    <div class="loading-container">
        <div class="loading-progress">
            <div class="rotator">
                <div class="rotator">
                    <div class="rotator colored">
                        <div class="rotator">
                            <div class="rotator colored">
                                <div class="rotator colored"></div>
                                <div class="rotator"></div>
                            </div>
                            <div class="rotator colored"></div>
                        </div>
                        <div class="rotator"></div>
                    </div>
                    <div class="rotator"></div>
                </div>
                <div class="rotator"></div>
            </div>
            <div class="rotator"></div>
        </div>
    </div>
    <!--  /Loading Container -->
	<!-- Navbar  -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="__PUBLIC__/img/logo.png" alt="" />
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings --->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                           <li>
                                <a class="login-area" href="<?php echo url('Index/index'); ?>" >
                                    <div class="avatar qf_index_nav" title="View your public profile" >
                                        <img src="__PUBLIC__/img/avatars/首页_2.svg">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>首页</span></span></h2>
                                    </section>
                                </a>
                            </li>
                           <li>
                                <a class="login-area" href="#" >
                                    <div class="avatar qf_index_nav" title="View your public profile">
                                        <img src="__PUBLIC__/img/avatars/bing.png">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>技术部伍洁</span></span></h2>
                                    </section>
                                </a>
                            </li>
                            <li>
                                <a class="login-area" href="#" >
                                    <div class="avatar qf_index_nav" title="View your public profile">
                                        <img src="__PUBLIC__/img/avatars/timg1.jpg">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>修改密码</span></span></h2>
                                    </section>
                                </a>
                            </li>
                            <li>
                                <a class="login-area qf_index_nav" href="<?php echo url('Login/login'); ?>" >
                                    <div class="avatar qf_index_nav" title="View your public profile">
                                        <img src="__PUBLIC__/img/avatars/30-25571.jpg">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>安全退出</span></span></h2>
                                    </section>
                                </a>
                            </li>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Navbar -->	
	<!-- Main Container -->
    <div class="main-container container-fluid" >
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar  left-bar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li <?php if($header == 'Index'): ?>class="active"<?php endif; ?>  >
                        <a href="<?php echo url('Index/index'); ?>">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text"> 首页 </span>
                        </a>
                    </li>
                    <!--UI Elements -->
                    <li <?php if($header == 'Custom'): ?> class="open"  <?php endif; ?> >
                        <a href="" class="menu-dropdown">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text"> 媒介组应用 </span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li <?php if($maction == 'index'): ?>class="active"<?php endif; ?> >
                                <a href="<?php echo url('Custom/index'); ?>">
                                    <span class="menu-text">日常站点记录</span>
                                </a>
                            </li>
                            <li <?php if($maction == 'sitetatus'): ?>class="active"<?php endif; ?>   >
                                <a href="<?php echo url('Custom/sitetatus'); ?>">
                                    <span class="menu-text">站点管理</span>
                                </a>
                            </li>
                            <li <?php if($maction == 'sitetype'): ?>class="active"<?php endif; ?>  >
                                <a href="<?php echo url('Custom/sitetype'); ?>">
                                    <span class="menu-text">站点类别</span>
                                </a>
                            </li>
                            <li <?php if($maction == 'sitemanage'): ?>class="active"<?php endif; ?>   >
                                <a href="<?php echo url('Custom/sitemanage'); ?>">
                                    <span class="menu-text">站长状态管理</span>
                                </a>
                            </li>
                             <li <?php if($maction == 'recordlog'): ?>class="active"<?php endif; ?>  >
                                <a href="<?php echo url('Custom/recordlog'); ?>">
                                    <span class="menu-text">业绩统计</span>
                                </a>
                            </li>
                            <li <?php if($maction == 'rate'): ?>class="active"<?php endif; ?> >
                                <a href="<?php echo url('Custom/rate'); ?>">
                                    <span class="menu-text">个别站长设置</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Tables-->
                    <li <?php if($header == 'Commer'): ?> class="open"  <?php endif; ?>  >
                        <a href="" class="menu-dropdown">
                            <i class="menu-icon fa fa-table"></i>
                            <span class="menu-text"> 市场组应用 </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li <?php if($maction == 'index'): ?>class="active"<?php endif; ?>   >
                                <a href="<?php echo url('Commer/index'); ?>">
                                    <span class="menu-text">去刷广告</span>
                                </a>
                            </li>
                            <li <?php if($maction == 'newad'): ?>class="active"<?php endif; ?> >
                                <a href="<?php echo url('Commer/newad'); ?>">
                                    <span class="menu-text">新刷广告</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                     <!--Charts-->
                    <li <?php if($header == 'Technol'): ?>class="open"<?php endif; ?>  >
                        <a href="" class="menu-dropdown">
                            <i class="menu-icon fa fa-bar-chart-o"></i>
                            <span class="menu-text"> 技术组应用 </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li <?php if($maction == 'index'): ?>class="active"<?php endif; ?>  >
                                <a href="<?php echo url('Technol/index'); ?>">
                                    <span class="menu-text">质检详情</span>
                                </a>
                            </li>

                            <li <?php if($maction == 'weekly'): ?>class="active"<?php endif; ?>  >
                                <a href="<?php echo url('Technol/weekly'); ?>">
                                    <span class="menu-text"> 周报详情页</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Forms-->
                    <li <?php if($header == 'Dailywork'): ?>class="open"<?php endif; ?> >
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> 日常文档 </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li  <?php if($maction == 'workplan'): ?>class="active"<?php endif; ?> >
                                <a href="<?php echo url('Dailywork/workplan'); ?>">
                                    <span class="menu-text">工作计划</span>
                                </a>
                            </li>

                            <li  <?php if($maction == 'notice'): ?>class="active"<?php endif; ?> >
                                <a href="<?php echo url('Dailywork/notice'); ?>">
                                    <span class="menu-text">公告列表</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Mail-->
                    <li <?php if($header == 'Comserv'): ?>class="open"<?php endif; ?>  >
                        <a href="" class="menu-dropdown">
                            <i class="menu-icon fa fa-envelope-o"></i>
                            <span class="menu-text"> 综合管理 </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li <?php if($maction == 'management'): ?>class="active"<?php endif; ?>  >
                                <a href="<?php echo url('Comserv/management'); ?>">
                                    <span class="menu-text">部门管理</span>
                                </a>
                            </li>

                            <li <?php if($maction == 'webservice'): ?>class="active"<?php endif; ?> >
                                <a href="<?php echo url('Comserv/webservice'); ?>">
                                    <span class="menu-text">站长服务</span>
                                </a>
                            </li>
                            <li <?php if($maction == 'admoney'): ?>class="active"<?php endif; ?> >
                                <a href="<?php echo url('Comserv/admoney'); ?>">
                                    <span class="menu-text">广告打款</span>
                                </a>
                            </li>
                            <li  <?php if($maction == 'login_log'): ?>class="active"<?php endif; ?> >
                                <a href="<?php echo url('Comserv/login_log'); ?>">
                                    <span class="menu-text">登陆日志</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                     <!--Mail-->
                    <li <?php if($header == 'Core'): ?>class="open"<?php endif; ?> >
                        <a href="" class="menu-dropdown">
                            <i class="menu-icon fa fa-calendar"></i>
                            <span class="menu-text">平台管理 </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li <?php if($maction == 'aff_update'): ?>class="open"<?php endif; ?> >
                                <a href="<?php echo url('Core/aff_update'); ?>">
                                    <span class="menu-text">站长数据更新</span>
                                </a>
                            </li>

                            <li <?php if($maction == 'special_aff'): ?>class="active"<?php endif; ?> >
                                <a href="<?php echo url('Core/special_aff'); ?>">
                                    <span class="menu-text">个别站长管理</span>
                                </a>
                            </li>
                            <li <?php if($maction == 'onlinepay'): ?>class="active"<?php endif; ?> >
                                <a href="<?php echo url('Core/onlinepay'); ?>">
                                    <span class="menu-text">广告商充值管理</span>
                                </a>
                            </li>
                            <li <?php if($maction == 'adv_con'): ?>class="active"<?php endif; ?> >
                                <a href="<?php echo url('Core/adv_con'); ?>">
                                    <span class="menu-text">广告商账号管理</span>
                                </a>
                            </li>
                            <li <?php if($maction == 'con_logs'): ?>class="active"<?php endif; ?>  >
                                <a href="<?php echo url('Core/con_logs'); ?>">
                                    <span class="menu-text">服务器操作日志</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->

  <div class="page-content qf_content" >
  	
  	  <div class="widget-body">
 		 	<header >
     			<h2 style="color: #57b5e3;padding-left: 10px;display: inline-block;">站点信息</h2>
     			<button class="btn btn-blue btn-status" id="addmanageSite" >新增站点</button>
 			</header>
 			<div style="padding-left: 130px;margin-top: 10px;">
 				<a href="#">全部</a>&nbsp;&nbsp;&nbsp;
 				<a href="#">西西</a>&nbsp;&nbsp;&nbsp;
 				<a href="#">君君</a>&nbsp;&nbsp;&nbsp;
 				<a href="#">彬彬</a>&nbsp;&nbsp;&nbsp;
 				<a href="#">前永</a>&nbsp;&nbsp;&nbsp;
 				<a href="#">尹可</a>&nbsp;&nbsp;&nbsp;
 				<a href="#">黄佛海</a>&nbsp;&nbsp;&nbsp;
 			</div>
 		 	<hr class="margin-bottoms" />
 		 	<form action="" method="post">
 		 		<table style="max-width: 100%;border-spacing: 0;" width="100%">
					<tbody>
						<tr>
						  <td>
							 &nbsp;
							<select name="type" id="">
								<option value="0" selected="">全部</option>
								<option value="1">站长名称</option>
								<option value="2">站点地址</option>
							</select>
							&nbsp;
							<span class="input-icon web_manage_span" >
                                <input type="text" name="value" class="form-control input-sm" value="">
                                <i class="glyphicon glyphicon-search blue"></i>
                            </span>
							
							&nbsp;
							&nbsp;
							<select name="classid" id="">
								<option value="0">全部类型</option>
								<option value="2">音乐影视</option>
								<option value="3">门户网站</option>
								<option value="4">网址导航</option>
								<option value="5">数码及手机</option>
								<option value="6">博客</option>
								<option value="7">电脑及硬件</option>
								<option value="8">医疗保健</option>
								<option value="9">女性时尚</option>
								<option value="10">教学及考试</option>
								<option value="11">生活服务</option>
								<option value="12">房产家居</option>
								<option value="13">汽车</option>
								<option value="14">交通旅游</option>
								<option value="15">体育运动</option>
								<option value="16">投资金融</option>
								<option value="17">新闻媒体</option>
								<option value="18">人文艺术</option>
								<option value="19">小说</option>
								<option value="20">人才招聘</option>
								<option value="21">网络购物</option>
								<option value="22">QQ及非主流</option>
								<option value="23">下载的</option>
								<option value="43">下载</option>
							</select>
							&nbsp;&nbsp; 
							<button class="label label-info graded web_manage_button" >搜索</button>
						  </td>
						</tr>
					</tbody>
 		 	</table>
 		 </form>
		 	<table class="table table-striped table-hover table-bordered qf_record" id="editabledatatable" style="text-align: center;margin-top: 15px;">
	            <thead class="web_record_thead">
	                <tr>
	                	<th >所属客服</th>
	                    <th >站点名称</th>
	                    <th >地址</th>
	                    <th >分类</th>
	                    <th >QQ</th>
	                	<th >Email</th>
	                	<th >状态</th>
	                	<th style="width: 8%;">最近操作时间</th>
	                	<th >操作</th>
	                </tr>
	            </thead>
	
	            <tbody  class="qf_manage_tbody">
	                <tr>
	                	<td ><label class="blacks">君君</label></td>
	                	<td  ><label class="deepBlue" >启凡</label></td>
	                	<td><label class="lightBlue">http://yundingjiayuan.com</label></td>
	                	<td >
	              			<label class="blacks">电脑及硬件</label>
	                	</td>
	                    <td ><label class="lightBlue">12345622</label></td>
	                    <td ><label class="deepBlue">321654</label></td>
	                    <td ><label>正常</label></td>
	                    <td class="deepBlue">
	                    	<label>2017-09-21 16:08:02</label>
	                    </td>
	                    <td>
	                        <a href="javascript:void(0)" onclick="fn(this)" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> 编辑</a>
	                        <a href="#" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> 删除</a>
	                    </td>
	                </tr>
	                <tr>
	                	<td ><label class="blacks">君君</label></td>
	                	<td  ><label class="deepBlue" >启凡</label></td>
	                	<td><label class="lightBlue">http://yundingjiayuan.com</label></td>
	                	<td >
	              			<label class="blacks">电脑及硬件</label>
	                	</td>
	                    <td ><label class="lightBlue">12345622</label></td>
	                    <td ><label class="deepBlue">321654</label></td>
	                    <td ><label>正常</label></td>
	                    <td class="deepBlue">
	                    	<label>2017-09-21 16:08:02</label>
	                    </td>
	                    <td>
	                        <a href="javascript:void(0)" onclick="fn(this)" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> 编辑</a>
	                        <a href="#" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> 删除</a>
	                    </td>
	                </tr>
	            	<tr>
	                	<td ><label class="blacks">君君</label></td>
	                	<td  ><label class="deepBlue" >启凡</label></td>
	                	<td><label class="lightBlue">http://yundingjiayuan.com</label></td>
	                	<td >
	              			<label class="blacks">电脑及硬件</label>
	                	</td>
	                    <td ><label class="lightBlue">12345622</label></td>
	                    <td ><label class="deepBlue">321654</label></td>
	                    <td ><label>正常</label></td>
	                    <td class="deepBlue">
	                    	<label>2017-09-21 16:08:02</label>
	                    </td>
	                    <td>
	                        <a href="javascript:void(0)" onclick="fn(this)"  class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> 编辑</a>
	                        <a href="#" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> 删除</a>
	                    </td>
	               </tr>   
	            </tbody>
	    </table>	
     </div>
      <div class="qf_paging" style="margin-top: 20px;">
				<div style="float:left;">
					<label>总共<label class="pagetotal">2</label>条,
						分<label class="pagesize">1</label>页,
						当前第<label class="pagenumber">1</label>页
					</label>
				</div>	
				<div style="float: right;">
					<ul class="page_entry">
						<li style="border:none;">
							<input type="text" id="recordinput" />
							<input type="button" id="redordinput" value="跳转" />
						</li>
						<li >
							<a style="color: #999;">首页</a>
						</li>
						<li class="prev disabled">
							<a style="color: #999;">上一页</a>
						</li>
						<li class="active">
							<a class="qf_current_page" >1</a>
						</li>
						<li class="prev disabled">
							<a style="color: #999;">2</a>
						</li>
						<li class="prev disabled">
							<a style="color: #999;">3</a>
						</li>
						<li class="next last">
							<a style="color: #999;">下一页</a>
						</li>
						<li >
							<a style="color: #999;">尾页</a>
						</li>
					</ul>
				</div>
			</div>    
      
      
      
      
      
  </div>

<!--弹框-->
	<div class="qf_fixed"  >
		
	</div>
	<div class="qf_bomb qf_bomb_add" >
		<div class="qf_bomb_div qf_bomb_padding" >
		  <form action="" method="post">
			<div class="margin-bottoms">
         		<div class="form-group-col-2" >
         			站长名称:
         		</div>
         		<div class="form-label">
         			<span class="input-icon icon-right" style="display: inline-block;width: 200px;">
                        <input type="text" class="form-controls" placeholder="请输入站长名称.....">
                        <i class="fa fa-globe"></i>
                    </span>
         		</div>
         	</div>
         	<div class="margin-bottoms">
         		<div class="form-group-col-2" >
         			地址:
         		</div>
         		<div class="form-label">
         			<span class="input-icon icon-right" style="display: inline-block;width: 200px;">
                        <input type="text" class="form-controls" placeholder="请输入地址.....">
                        <i class="fa fa-globe"></i>
                    </span>
         		</div>
         	</div>
         	<div class="margin-bottoms">
         		<div class="form-group-col-2" >
         			QQ:
         		</div>
         		<div class="form-label">
         			<span class="input-icon icon-right" style="display: inline-block;width: 200px;">
                        <input type="text" class="form-controls" placeholder="请输入QQ.....">
                        <i class="fa fa-globe"></i>
                    </span>
         		</div>
         	</div>
         	<div class="margin-bottoms">
         		<div class="form-group-col-2" >
         			Email:
         		</div>
         		<div class="form-label">
         			<span class="input-icon icon-right" style="display: inline-block;width: 200px;">
                        <input type="text" class="form-controls" placeholder="请输入Email.....">
                        <i class="fa fa-globe"></i>
                    </span>
         		</div>
         	</div>
         	<div class="margin-bottoms">
         		<div class="form-group-col-2" >
         			分类:
         		</div>
         		<div class="form-label">
         			<select class="selects">
         				<option>电影</option>
         				<option>游戏</option>
         				<option>小说</option>
         				<option>资讯</option>
         				<option>动漫</option>
         				<option>门户</option>
         				<option>联盟</option>
         			</select>
         		</div>
         	</div>
         	<div class="margin-bottoms">
         		<div class="form-group-col-2" >
         			
         		</div>
         		<div class="form-label" style="padding-left: 50px;">
         			<button class="label label-azure web_manage_button" style="width: 50px;">提交 </button>
         		</div>
         	</div>
         	<div style="position: absolute;top: 4px;right: 5px;" class="webmanager">
	     		<img src="__PUBLIC__/img/avatars/closet_jia.png" width="20px" height="20px" />
	     	</div>
		  </form>
		</div>
	</div>
	
	<div class="qf_bomb qf_bomd_edit" >
		<div class="qf_bomb_div qf_bomb_padding" >
		  <form action="" method="post">
			<div class="margin-bottoms">
         		<div class="form-group-col-2" >
         			站长名称:
         		</div>
         		<div class="form-label">
         			<span class="input-icon icon-right" style="display: inline-block;width: 200px;">
                        <input type="text" class="form-controls" placeholder="请输入站长名称.....">
                        <i class="fa fa-globe"></i>
                    </span>
         		</div>
         	</div>
         	<div class="margin-bottoms">
         		<div class="form-group-col-2" >
         			地址:
         		</div>
         		<div class="form-label">
         			<span class="input-icon icon-right" style="display: inline-block;width: 200px;">
                        <input type="text" class="form-controls" placeholder="请输入地址.....">
                        <i class="fa fa-globe"></i>
                    </span>
         		</div>
         	</div>
         	<div class="margin-bottoms">
         		<div class="form-group-col-2" >
         			QQ:
         		</div>
         		<div class="form-label">
         			<span class="input-icon icon-right" style="display: inline-block;width: 200px;">
                        <input type="text" class="form-controls" placeholder="请输入QQ.....">
                        <i class="fa fa-globe"></i>
                    </span>
         		</div>
         	</div>
         	<div class="margin-bottoms">
         		<div class="form-group-col-2" >
         			Email:
         		</div>
         		<div class="form-label">
         			<span class="input-icon icon-right" style="display: inline-block;width: 200px;">
                        <input type="text" class="form-controls" placeholder="请输入Email.....">
                        <i class="fa fa-globe"></i>
                    </span>
         		</div>
         	</div>
         	<div class="margin-bottoms">
         		<div class="form-group-col-2" >
         			站点名称:
         		</div>
         		<div class="form-label">
         			<select class="selects">
         				<option>电影</option>
         				<option>游戏</option>
         				<option>小说</option>
         				<option>资讯</option>
         				<option>动漫</option>
         				<option>门户</option>
         				<option>联盟</option>
         			</select>
         		</div>
         	</div>
         	<div class="margin-bottoms">
         		<div class="form-group-col-2" >
         			
         		</div>
         		<div class="form-label" style="padding-left: 50px;">
         			<button class="label label-azure web_manage_button" style="width: 50px;">提交 </button>
         		</div>
         	</div>
         	<div style="position: absolute;top: 4px;right: 5px;" class="webmanager">
	     		<img src="__PUBLIC__/img/avatars/closet_jia.png" width="20px" height="20px" />
	     	</div>
		  </form>
		</div>
	</div>
	<script type="text/javascript">
		$('#addmanageSite').click(function(){
			$('.qf_fixed').css('display','block');
			$('.qf_bomb_add').css('display','block');
		});
		$('.webmanager').click(function(){
			$('.qf_fixed').css('display','none');
			$('.qf_bomb_add').css('display','none');
			$('.qf_bomd_edit').css('display','none');
		});
		function fn(){
			$('.qf_fixed').css('display','block');
			$('.qf_bomd_edit').css('display','block');
		}
	</script>
</div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    	
    <script src="__PUBLIC__/js/jquery-2.0.3.min.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
    <!--Beyond Scripts-->
    <script src="__PUBLIC__/js/beyond.min.js"></script>
	
	</body>
</html>