
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="/d/css/bootstrap.min.css" rel="stylesheet">
	<link href="/d/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="/d/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="/d/css/style-responsive.css" rel="stylesheet">
	<link  rel='stylesheet' type='text/css'>
	<!-- end: CSS -->	
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="/d/img/favicon.ico">
	<!-- end: Favicon -->	

	<style type="text/css">
    #page_page li{
        list-style-type: none;
        margin:0;
        padding: 0;
    }
    #page_page li{
        position: relative;
        float: left;
        padding: 6px 12px;
        line-height: 1.42857143;
        color: #337ab7;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd;
    }

   
</style>	
</head>

<body>
	<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>JANUX</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-bell"></i>
								<span class="badge red">
								7 </span>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-calendar"></i>
								<span class="badge red">
								5 </span>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-envelope"></i>
								<span class="badge red">
								4 </span>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="/d/img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="/d/img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="/d/img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="/d/img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="/d/img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>	
							</ul>
						</li>
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Dennis Ji
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
	
		<div class="container-fluid-full">
			<div class="row-fluid">
					
				<!-- start:  菜单-->
				<div id="sidebar-left" class="span2">
					<div class="nav-collapse sidebar-nav">
						<ul class="nav nav-tabs nav-stacked main-menu">

							<li>
								<a class="dropmenu" href="#"><i class="icon-user"></i><span class="hidden-tablet"> 用户管理</span></a>
								<ul>
									<li><a class="submenu" href="/admin/users"><i class="icon-usergroup"></i><span class="hidden-tablet">用户列表</span></a></li>
									<li><a class="submenu" href="/admin/users/create"><i class="icon-useradd"></i><span class="hidden-tablet">用户添加</span></a></li>

								</ul>	
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> 分类管理</span></a>
								<ul>
									<li><a class="submenu" href="/admin/cates"><i class="icon-usergroup"></i><span class="hidden-tablet">分类列表</span></a></li>
									<li><a class="submenu" href="/admin/cates/create"><i class="icon-useradd"></i><span class="hidden-tablet">分类添加</span></a></li>

								</ul>	
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> 管理员管理</span></a>
								<ul>
									<li><a class="submenu" href="/admin/adminuser"><i class="icon-usergroup"></i><span class="hidden-tablet">管理员列表</span></a></li>
									<li><a class="submenu" href="/admin/adminuser/create"><i class="icon-useradd"></i><span class="hidden-tablet">管理员添加</span></a></li>

								</ul>	
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> 角色管理</span></a>
								<ul>
									<li><a class="submenu" href="/admin/roles"><i class="icon-usergroup"></i><span class="hidden-tablet">角色列表</span></a></li>
									<li><a class="submenu" href="/admin/roles/create"><i class="icon-useradd"></i><span class="hidden-tablet">角色添加</span></a></li>

								</ul>	
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> 权限管理</span></a>
								<ul>
									<li><a class="submenu" href="/admin/nodes"><i class="icon-usergroup"></i><span class="hidden-tablet">权限列表</span></a></li>
									<li><a class="submenu" href="/admin/nodes/create"><i class="icon-useradd"></i><span class="hidden-tablet">权限添加</span></a></li>

								</ul>	
							</li>

						</ul>
					</div>
				</div>
				<!-- end: 菜单 -->
				
				<noscript>
					<div class="alert alert-block span10">
						<h4 class="alert-heading">Warning!</h4>
						<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
					</div>
				</noscript>
				
				<!--start: content-->
				<div id="content" class="span10">
					@if(session('success'))
						<div class='alert alert-success'>
							{{session('success')}}
						</div>
					@endif
					@if(session('error'))
						<div class='alert alert-error'>
							{{session('success')}}
						</div>
					@endif

					@section('content')
					@show

		        </div>
		
				<!-- end: Content -->
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="#">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="/d/js/jquery-1.9.1.min.js"></script>
	<script src="/d/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="/d/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="/d/js/jquery.ui.touch-punch.js"></script>
	
		<script src="/d/js/modernizr.js"></script>
	
		<script src="/d/js/bootstrap.min.js"></script>
	
		<script src="/d/js/jquery.cookie.js"></script>
	
		<script src='/d/js/fullcalendar.min.js'></script>
	
		<script src='/d/js/jquery.dataTables.min.js'></script>

		<script src="/d/js/excanvas.js"></script>
	<script src="/d/js/jquery.flot.js"></script>
	<script src="/d/js/jquery.flot.pie.js"></script>
	<script src="/d/js/jquery.flot.stack.js"></script>
	<script src="/d/js/jquery.flot.resize.min.js"></script>
	
		<script src="/d/js/jquery.chosen.min.js"></script>
	
		<script src="/d/js/jquery.uniform.min.js"></script>
		
		<script src="/d/js/jquery.cleditor.min.js"></script>
	
		<script src="/d/js/jquery.noty.js"></script>
	
		<script src="/d/js/jquery.elfinder.min.js"></script>
	
		<script src="/d/js/jquery.raty.min.js"></script>
	
		<script src="/d/js/jquery.iphone.toggle.js"></script>
	
		<script src="/d/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="/d/js/jquery.gritter.min.js"></script>
	
		<script src="/d/js/jquery.imagesloaded.js"></script>
	
		<script src="/d/js/jquery.masonry.min.js"></script>
	
		<script src="/d/js/jquery.knob.modified.js"></script>
	
		<script src="/d/js/jquery.sparkline.min.js"></script>
	
		<script src="/d/js/counter.js"></script>
	
		<script src="/d/js/retina.js"></script>

		<script src="/d/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
