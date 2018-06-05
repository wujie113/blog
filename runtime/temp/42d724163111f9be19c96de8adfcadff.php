<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"D:\phpStudy\WWW\thinkphp\public/../application/erp\view\custom\index.html";i:1511839943;s:67:"D:\phpStudy\WWW\thinkphp\public/../application/erp\view\layout.html";i:1511754310;s:74:"D:\phpStudy\WWW\thinkphp\public/../application/erp\view\public\header.html";i:1511946476;s:74:"D:\phpStudy\WWW\thinkphp\public/../application/erp\view\public\footer.html";i:1511940742;}*/ ?>
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
         	
	<!--中间内容部分-->
	           	<div class="widget-body">
                    <div class="table-toolbar">
                        <div class="web_manage_notice">
                        	<label>公告：</label>
                        	1. 每日  周任务要全力完成; 2. 网站日志须每天及时与按质完成5,6个以上！ （所谓  及时，是指跟网站主聊完获得情况后，就立即更新系统）！
                        </div>
                        <div class="web_manage_function">
                        	<label>目前操作功能     :  启凡办公系统</label>
                        	<span >-&gt;</span>媒介管理
                        	<span >-&gt;</span>站点列表
                        	&nbsp;&nbsp;
                        	<a href="#">君君</a>
                        	&nbsp;&nbsp;
                        	<a href="#">西西</a>
                        	&nbsp;&nbsp;
                        	<a href="#">彬彬</a>
                        	&nbsp;&nbsp;
                        	<a href="#">前永</a>
                        	&nbsp;&nbsp;
                        	<a href="#">尹可</a>
                        	&nbsp;&nbsp;
                        	<a href="#">黄佛海</a>
                        </div>
                        <div class="web_manage_choice" >
                        	<div style="float: left;">
                        	  <table style="max-width: 100%;border-spacing: 0;" width="100%">
							    <tbody>
								  <tr>
					 				<td> &nbsp;
									 <select class="mj_sele" name="contact_status" id="">
										<option value="0">QQ状态</option>
										<option value="1">已回复</option>
										<option value="2">已确认</option>
										<option value="3">未确认</option>
									 </select>&nbsp;
									 <select class="mj_sele" name="classid" id="">
										<option value="0">站点类别</option>
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
										<option value="43">下载</option>
									 </select>&nbsp;
									 <select class="mj_sele" name="status" id="">
										<option value="0">站点状态</option>
										<option value="1">投放中</option>
										<option value="2">下代码</option>
										<option value="4">★新联系方式</option>
										<option value="6">★沟通中</option>
									 </select>
									&nbsp;站点名称：<input class="qf_webmanage_input" name="sitename" value="" type="text" id="">&nbsp;
									站点网址：<input class="qf_webmanage_input" name="siteurl" value="" type="text" id="">
									&nbsp;<input class="button_bak" type="submit" name="" value="搜索" >
					  			   </td>
					            </tr>
							   </tbody>
                             </table>
                        	</div>
                        	<div style="float: right;padding-right: 16px;">
                        		今日新联系（<label class="medum_corlor">0</label>）；
								今日回复（<label class="medum_corlor">0</label>）；
								本周上站（<label class="medum_corlor">0</label>）；
								本周下站（<label class="medum_corlor">0</label>）；
								<a class="addsite" href="addSite.html">添加站点</a>
                        	</div>
						</div>
                        <div class="btn-group pull-right">

                      </div>
                   </div>
                	<table class="table table-striped table-hover table-bordered qf_record" id="editabledatatable" style="text-align: center;">
	                   <thead class="web_record_thead">
                        <tr>
                        	<th style="width: 5%;">添加时间</th>
                            <th style="width: 5%;">更新时间</th>
                            <th style="width: 6%;">状态</th>
                            <th style="width: 6%;">网站</th>
                            <th style="width: 8%;">账号</th>
                            <th style="width:4%;">类别</th>
                        	<th style="width: 4%;">联系方式</th>
                        	<th style="width: 4%;">媒介</th>
                        	<th style="width: 12%;">投放情况</th>
                        	<th style="width: 25%;">沟通日志</th>
                        	<th style="width: 3%;">日付</th>
                        	<th style="width: 2%;">IP</th>
                        	<th style="width: 2%;">权重</th>
                        	<th style="width: 4%;">操作</th>
                        </tr>
	                   </thead>
	
	                    <tbody style="font-size: 12px;font-weight: normal;">
	                        <tr>
	                        	<td><label class="blacks">2017-09-21 15:29:48</label></td>
	                        	<td ><label class="lightBlue">2017-09-21 15:29:48</label></td>
	                        	<td ><label class="deepBlue">★新联系方式</label></td>
	                        	<td>
	                        		<font class="red">淘宝</font>
									<a href="sitetatusinfo.html">http://www.taobao.com </a>
	                        	</td>
	                            <td><label class="lightBlue">投资金融</label></td>
	                            <td><label>电影</label></td>
	                            <td><label class="deepBlue">已回复</label></td>
	                            <td><label>君君</label></td>
	                            <td class="deepBlue">
	                            	<label>banner:四维 <br>随大流</label>
	                            </td>
	                            <td style="text-align: left;">
	                            	<label>http://www.youmsm.com/ <br>
									<br>
									1-4：有移动端的底部悬浮量了，但是暂时还跑不了代码，后期再跟进下<br>
									5-19：限额每天不超过5k，来说去掉透明层<br>
									6-12：来问广告情况，让过两天联系，给他说跑1k，说过两天再看<br>
									6-15:答应安排上量</label>
	                            </td>
	                            <td><label class="violet">20000</label></td>
	                            <td class="red"><label>5</label></td>
	                            <td class="red">5</td>
	                            <td>
	                                <a href="editsite.html" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> 编辑</a>
	                                <a href="#" class="btn btn-danger btn-xs delete qf_marginTop"><i class="fa fa-trash-o"></i> 删除</a>
	                            </td>
	                        </tr>
	                      
	                         
	                    </tbody>
                	</table>
           	    </div>
                 <div class="qf_paging">
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