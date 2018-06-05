<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"D:\phpStudy\WWW\thinkphp\public/../application/erp\view\technol\weeklydetail.html";i:1511860350;s:67:"D:\phpStudy\WWW\thinkphp\public/../application/erp\view\layout.html";i:1511754310;s:74:"D:\phpStudy\WWW\thinkphp\public/../application/erp\view\public\header.html";i:1511768097;s:74:"D:\phpStudy\WWW\thinkphp\public/../application/erp\view\public\footer.html";i:1511766249;}*/ ?>
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
                                <a class="login-area" href="#" >
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
                                <a class="login-area qf_index_nav" href="javascript:void(0)" id="JsSignOut">
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
                    <li class="active">
                        <a href="index.html">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text"> 首页 </span>
                        </a>
                    </li>
                    <!--UI Elements -->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text"> 媒介组应用 </span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="webRecord.html">
                                    <span class="menu-text">日常站点记录</span>
                                </a>
                            </li>
                            <li>
                                <a href="webManage.html">
                                    <span class="menu-text">站点管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="webType.html">
                                    <span class="menu-text">站点类别</span>
                                </a>
                            </li>
                            <li>
                                <a href="webstatusmanage.html">
                                    <span class="menu-text">站长状态管理</span>
                                </a>
                            </li>
                             <li>
                                <a href="webAchieve.html">
                                    <span class="menu-text">业绩统计</span>
                                </a>
                            </li>
                            <li>
                                <a href="webindividual.html">
                                    <span class="menu-text">个别站长设置</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Tables-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-table"></i>
                            <span class="menu-text"> 市场组应用 </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="#">
                                    <span class="menu-text">去刷广告</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="menu-text">新刷广告</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                     <!--Charts-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-bar-chart-o"></i>
                            <span class="menu-text"> 技术组应用 </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="check.html">
                                    <span class="menu-text">质检详情</span>
                                </a>
                            </li>

                            <li>
                                <a href="weekly.html">
                                    <span class="menu-text"> 周报详情页</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Forms-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> 日常文档 </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="#">
                                    <span class="menu-text">工作计划</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <span class="menu-text">公告列表</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Mail-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-envelope-o"></i>
                            <span class="menu-text"> 综合管理 </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="departmanage.html">
                                    <span class="menu-text">部门管理</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <span class="menu-text">站长服务</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="menu-text">广告打款</span>
                                </a>
                            </li>
                            <li>
                                <a href="loginLog.html">
                                    <span class="menu-text">登陆日志</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                     <!--Mail-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-calendar"></i>
                            <span class="menu-text">平台管理 </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="aff_update.html">
                                    <span class="menu-text">站长数据更新</span>
                                </a>
                            </li>

                            <li>
                                <a href="special_aff.html">
                                    <span class="menu-text">个别站长管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="onlinepay.html">
                                    <span class="menu-text">广告商充值管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="adv_con.html">
                                    <span class="menu-text">广告商账号管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="serverLogs.html">
                                    <span class="menu-text">服务器操作日志</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->

<div class="page-content qf_content">
	 <div class="widget-body">
	 	<header  >
 			<a class="weekly_a weeky-a" onclick="javascript:history.go(-1);" >返回</a>
       		<label class="weeky-lable" >周报 [ 2017-11-20 --- 2017-11-26]</label>
       		<br />
		</header>
	 	
	 	<table class="table table-striped table-hover table-bordered qf_record" id="editabledatatable" style="text-align: center;margin-top: 15px;">
            <thead class="web_record_thead">
                <tr>
                	<th style="width:12.5%;"></th>
                	<th style="width:12.5%;">周一</th>
                	<th style="width:12.5%;">周二</th>
                	<th style="width:12.5%;">周三</th>
                	<th style="width:12.5%;">周四</th>
                	<th style="width:12.5%;">周五</th>
                	<th style="width:12.5%;">周六</th>
                	<th style="width:12.5%;">总结</th>
                	
                </tr>
            </thead>

            <tbody  class="qf_manage_tbody">
                <tr class="qf_weekly_th" id="qf_weekly_th">
                   <th class="th-middles">
						<h3>日常工作</h3>
					</th>
					<th>
						<label>
						
							
						</label>
					</th>
					<th>
						<label></label>
					</th>
					<th>
						<div></div>
					</th>
					<th>
						<label></label>
					</th>
					<th>
						<label></label>
					</th>
					<th>
						<label></label>
					</th>
					<th rowspan="3">
						<label style="display: block;width: 100%;">
							
						</label>
					</th>
                </tr>
                <tr class="qf_weekly_th">
                   <th class="th-middles">
						<h3>
							发现问题
						</h3>
					</th>
					<th>
						<label>
						
							
						</label>
					</th>
					<th>
						<label></label>
					</th>
					<th>
						<div></div>
					</th>
					<th>
						<label></label>
					</th>
					<th>
						<label></label>
					</th>
					<th>
						<label></label>
					</th>
                </tr>
            	<tr class="qf_weekly_th">
                    <th class="th-middles">
						<h3>
							解决问题
						</h3>
					</th>
					<th>
						<label>
						
							
						</label>
					</th>
					<th>
						<label></label>
					</th>
					<th>
						<div></div>
					</th>
					<th>
						<label></label>
					</th>
					<th>
						<label></label>
					</th>
					<th>
						<label></label>
					</th>
                </tr>
             
                 
            </tbody>
    </table>
  </div>
	
	
	
</div>

</div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    	
    <script src="__PUBLIC__/js/jquery-2.0.3.min.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
    <!--Beyond Scripts-->
    <script src="__PUBLIC__/js/beyond.min.js"></script>
	<script type="text/javascript">
		$('#JsSignOut').click(function(){
			layer.confirm('确定退出管理中心？',{
				title:'系统提示',
				btn:['确定','取消']
			},function(){
				location.href = 'login.html';
			});
		});			
	</script>
	</body>
</html>