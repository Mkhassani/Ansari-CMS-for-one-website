<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Ansari</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="http://broozsoft.com" />
		<!-- css -->
		<link href="<?php echo base_url();?>bootstrap/css/bootstrap<?php echo $this->session->userdata('admin_lang');?>.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>bootstrap/css/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="<?php echo base_url('bootstrap/css/jcarousel.css" rel="stylesheet'); ?>" />
		<link href="<?php echo base_url('bootstrap/css/flexslider.css" rel="stylesheet'); ?>" />
		
		


		<!-- Theme skin -->
		<link href="<?php echo base_url('bootstrap/skins/default.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('bootstrap/css/style.css'); ?>" rel="stylesheet" />
		<link rel='stylesheet' href="<?php echo base_url();?>bootstrap/css/style<?php echo $this->session->userdata('admin_lang');?>.css" type='text/css' />
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		    <![endif]-->
			

	</head>
	<body>
		<?php
			if($this->uri->segment(1)=='' or $this->uri->segment(2)=='index'){
				$active_home='class="active"';
			}
			if ($this->uri->segment(2)=='products') {
				$active_products='class="active"';
			}
			if ($this->uri->segment(2)=='about') {
				$active_about='class="active"';
			}
			if ($this->uri->segment(2)=='contact') {
				$active_contact='class="active"';
			}
			if ($this->uri->segment(2)=='photo_gallery' or $this->uri->segment(2)=='video_gallery') {
				$active_gallery='class="active dropdown"';
			}
		?>
		<div id="wrapper">

			<!-- start header -->
				<header >
			        <div class="navbar navbar-default navbar-static-top" style="background:white">
			            <div class="container">
			                <div class="navbar-header">
			                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			                        <span class="icon-bar"></span>
			                        <span class="icon-bar"></span>
			                        <span class="icon-bar"></span>
			                    </button>
			                    <a class="navbar-brand" href="<?php echo base_url('pages/index'); ?>"><img src="<?php echo base_url();?>bootstrap/img/logo.gif" style="margin-top:-25px;"></a>
			                </div>
			                <div class="navbar-collapse collapse">
			                    <ul id="menu" class="nav navbar-nav">
			                        <li <?php echo (isset($active_home))? $active_home : ''; ?>><a href="<?php echo base_url('index.php/pages/index'); ?>"><?php echo tran('Home');?></a></li>
			                        <li <?php echo (isset($active_products))? $active_products : ''; ?>><a href="<?php echo base_url('index.php/pages/products'); ?>"><?php echo tran('Products');?></a></li>
			                        <li <?php echo (isset($active_about))? $active_about : ''; ?>><a href="<?php echo base_url('index.php/pages/about'); ?>"><?php echo tran('About Us');?></a></li>
			                        <li <?php echo (isset($active_contact))? $active_contact : ''; ?>><a href="<?php echo base_url('index.php/pages/contact'); ?>"><?php echo tran('Contact');?></a></li>
			                        <li <?php echo (isset($active_gallery))? $active_gallery : ''; ?>>
			                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown"
			                             data-delay="0" data-close-others="false"><?php echo tran('Gallery');?><b class=" icon-angle-down"></b></a>
			                            <ul class="dropdown-menu">
			                                <li><a href="<?php echo base_url('index.php/pages/photo_gallery'); ?>"><?php echo tran('Photo Gallery');?></a></li>
			                                <li><a href="<?php echo base_url('index.php/pages/video_gallery'); ?>"><?php echo tran('Video Gallery');?></a></li>
			                            </ul>
			                        </li>
		                        <!-- BEGIN LANGUAGE DROPDOWN -->
									<li>
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
										<img alt="" src="<?php echo base_url(); ?>admin_side/assets/img/flags/<?php echo $this->session->userdata('country_name');?>.png" />
										<span class="username"><?php echo $this->session->userdata('country_name');?></span>
										<i class="icon-angle-down"></i>
										</a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo site_url('pages/index/fa');?>"><img alt="" src="<?php echo base_url(); ?>admin_side/assets/img/flags/AF.png" /> <?php echo tran('Dari');?></a></li>
											<li><a href="<?php echo site_url('pages/index/en');?>"><img alt="" src="<?php echo base_url(); ?>admin_side/assets/img/flags/US.png" /> <?php echo tran('English');?></a></li>
										</ul>
									</li>
			                    </ul>
			                </div>
			            </div>
			        </div>
				</header>
			<!-- end header -->