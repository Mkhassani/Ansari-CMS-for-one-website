		<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?php echo base_url(); ?>admin_side/assets/css/pages/lock.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER --> 
	<div class="page-lock">
		<div class="page-logo">
			<a class="brand" href="http://www.broozsoft.com">
			<center><img src="<?php echo base_url(); ?>admin_side/img/www.broozsoft.com-160X116.png" alt="logo" /></center>
			</a>
		</div>
		<div class="page-body">
			<img class="page-lock-img" src="<?php echo base_url(); ?>image/user/<?php echo $this->session->userdata('u_id').'_.jpg';?>" alt="">
			<div class="page-lock-info">
				<h1><?php echo $this->session->userdata('u_lastname');?></h1>
				<span><?php echo $this->session->userdata('u_email');?></span>
				<span><em>Locked</em></span>
				<form class="form-search" action="<?php echo site_url('admin/check_login');?>" method="post">
					<div class="input-append">
						<input type="hidden" name="u_email" value="<?php echo $this->session->userdata('u_email');?>" class="m-wrap" placeholder="email">
						<input type="password"  name="u_password" class="m-wrap" placeholder="Password">
						<button type="submit"  class="btn blue icn-only"><i class="m-icon-swapright m-icon-white"></i></button>
					</div>
					<div class="relogin">
						<a href="<?php echo site_url('user/logout')?>">Not <?php echo $this->session->userdata('u_lastname');?> ?</a>
					</div>
				</form>
			</div>
		</div>
		<center>
		<div class="page-footer" style="color:white">
						2015 &copy; <?php echo tran('Designed and Developed by ');?>
			<a href="http://www.broozsoft.com"><span style="color:rgb(6,146,197)"><?php echo tran('Soft');?></span>
				<span style="color:orange"><?php echo tran('Soft');?></span></a> <?php echo tran('IT Group');?>
		</div>
		<center>
	</div>
			<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   <script src="<?php echo base_url(); ?>admin_side/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>admin_side/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?php echo base_url(); ?>admin_side/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="<?php echo base_url(); ?>admin_side/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>admin_side/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="<?php echo base_url(); ?>admin_side/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>admin_side/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?php echo base_url(); ?>admin_side/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>admin_side/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo base_url();?>admin_side/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->   
	<script src="<?php echo base_url();?>admin_side/scripts/app.js"></script>  
	<script src="<?php echo base_url();?>admin_side/scripts/lock.js"></script>      
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		   Lock.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->