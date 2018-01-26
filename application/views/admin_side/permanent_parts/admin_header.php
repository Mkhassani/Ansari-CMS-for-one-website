<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title><?php echo $this->session->userdata('site_title')." | ".$this->session->userdata('cl_page_title')." | ".$fu_page_title;?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap/css/bootstrap<?php echo $this->session->userdata('admin_lang');?>.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap/css/bootstrap-responsive<?php echo $this->session->userdata('admin_lang');?>.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>admin_side/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>admin_side/assets/css/style-metro<?php echo $this->session->userdata('admin_lang');?>.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>admin_side/assets/css/style<?php echo $this->session->userdata('admin_lang');?>.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>admin_side/assets/css/style-responsive<?php echo $this->session->userdata('admin_lang');?>.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>admin_side/assets/css/themes/default<?php echo $this->session->userdata('admin_lang');?>.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url(); ?>admin_side/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->   
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="http://www.broozsoft.com" target="_blank">
				<img src="<?php echo base_url(); ?>admin_side/img/www.broozsoft.com.png" alt="logo" />
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="<?php echo base_url(); ?>admin_side/assets/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->            
				<!-- BEGIN TOP NAVIGATION MENU -->              
				<ul class="nav pull-right">
					<!-- BEGIN LANGUAGE DROPDOWN -->
					<li class="dropdown language">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" src="<?php echo base_url(); ?>admin_side/assets/img/flags/<?php echo $this->session->userdata('country_name');?>.png" />
						<span class="username"><?php echo $this->session->userdata('country_name');?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('admin/index/fa');?>"><img alt="" src="<?php echo base_url(); ?>admin_side/assets/img/flags/af.png" /> <?php echo tran('Dari');?></a></li>
							<li><a href="<?php echo site_url('admin/index/en');?>"><img alt="" src="<?php echo base_url(); ?>admin_side/assets/img/flags/us.png" /> <?php echo tran('English');?></a></li>
							
						</ul>
					</li>
					<!-- END LANGUAGE DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" width="30" height="30" src="<?php echo base_url();?>image/user/<?php echo $this->session->userdata('u_id').'_.jpg';?>" />
						<span class="username"><?php echo $this->session->userdata('u_name').' ' .$this->session->userdata('u_lastname');?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('pages/index/'); ?>"><i class="icon-user"></i> <?php echo tran('Go To WebSite');?></a></li>
							<li><a href="<?php echo site_url('user/user_profile/'.$this->session->userdata('u_id')); ?>"><i class="icon-user"></i> <?php echo tran('My Profile');?></a></li>
							<!-- <li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
							<li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox <span class="badge badge-important">3</span></a></li>
							<li><a href="#"><i class="icon-tasks"></i> My Tasks <span class="badge badge-success">8</span></a></li> -->
							<li class="divider"></li>
							<li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> <?php echo tran('Full Screen');?></a></li>
							<li><a href="<?php echo base_url();?>user/user_lock"><i class="icon-lock"></i> <?php echo tran('Lock Screen');?></a></li>
							<li><a href="<?php echo base_url();?>index.php/admin/logout"><i class="icon-key"></i> <?php echo tran('Log Out');?></a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU --> 
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->

		<!-- BEGIN CONTAINER -->   
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->