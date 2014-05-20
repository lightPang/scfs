<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8" />
		<title>控制台 - Bootstrap后台管理系统模版Ace下载</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="__ROOT__/scfs/Public/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="__ROOT__/scfs/Public/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="__ROOT__/scfs/Public/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="__ROOT__/scfs/Public/css/ace.min.css" />
		<link rel="stylesheet" href="__ROOT__/scfs/Public/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="__ROOT__/scfs/Public/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="__ROOT__/scfs/Public/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="__ROOT__/scfs/Public/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="__ROOT__/scfs/Public/js/html5shiv.js"></script>
		<script src="__ROOT__/scfs/Public/js/respond.min.js"></script>
		<![endif]-->
    <script src="__ROOT__/scfs/Public/js/user_define/first.js"></script>
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							校园信息系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="__ROOT__/scfs/Public/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									Jason
								</span>
						
								<i class="icon-caret-down"></i>
							</a>
							
							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								<li>
									<a href="#">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li >
							<a href="__APP__/Common/index">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 信息管理 </span>
							</a>
						</li>

						<li>
							<a href="__APP__/Info">
								<i class="icon-text-width"></i>
								<span class="menu-text"> 信息录入 </span>
							</a>
						</li>
						
						<li>
							<a href="__APP__/Query">
								<i class="icon-tag"></i>
								<span class="menu-text"> 信息查询 </span>
							</a>
						</li>
						
						<li class="active">
							<a href="">
								<i class="icon-list"></i>
								<span class="menu-text"> 数据统计 </span>
							</a>
						</li>

		

					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>
							<li class="active">校园信息</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
					
						<h3 class="header smaller lighter blue" >
										数据统计分析
						</h3>
					
					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
								
								  <div class="row">
									
									<table class="table table-striped table-bordered table-hover" id="info_table">
									  <thead>
										<th>项目名称</th>
										<th>总金额</th>
									  </thead>
									  <tbody>
										 <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dt): $mod = ($i % 2 );++$i;?><tr>
											<td><?php echo ($dt["title"]); ?></td>
											<td><?php echo ($dt["content"]); ?></td>
										  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
										 <tr>
											<td>总计</td>
											<td><?php echo ($total_sum); ?></td>
										  </tr>
									  </tbody>
									</table>
								  </div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
            
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='__ROOT__/scfs/Public/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='__ROOT__/scfs/Public/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='__ROOT__/scfs/Public/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="__ROOT__/scfs/Public/js/bootstrap.min.js"></script>
		<script src="__ROOT__/scfs/Public/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="__ROOT__/scfs/Public/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="__ROOT__/scfs/Public/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="__ROOT__/scfs/Public/js/jquery.ui.touch-punch.min.js"></script>
		<script src="__ROOT__/scfs/Public/js/jquery.slimscroll.min.js"></script>
		<script src="__ROOT__/scfs/Public/js/jquery.easy-pie-chart.min.js"></script>
		<script src="__ROOT__/scfs/Public/js/jquery.sparkline.min.js"></script>
		<script src="__ROOT__/scfs/Public/js/flot/jquery.flot.min.js"></script>
		<script src="__ROOT__/scfs/Public/js/flot/jquery.flot.pie.min.js"></script>
		<script src="__ROOT__/scfs/Public/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="__ROOT__/scfs/Public/js/ace-elements.min.js"></script>
		<script src="__ROOT__/scfs/Public/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		
	<div style="display:none"></div>
</body>
</html>