		<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?php echo base_url(); ?>admin_side/assets/css/pages/lock.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER --> 
	<div class="page-lock">
		<div class="page-logo">
			<a class="brand" href="<?php echo site_url('front/index'); ?>">
			<center><img src="<?php echo base_url();?>admin_side/img/broozlogo-small.png" alt="logo" /></center>
			</a>
		</div>
		<div class="page-body">
			
				<p> durign two our you will recive an email to you email address
				 (<span style="color:white;font-size:18px"><?php echo $request_email;?></span>) to active you acount</p>

			
		</div>
		<div class="page-footer">
						2015 &copy; <a href="http://www.broozmarket.com">BroozMarket</a> by 
			<a href="http://www.broozsoft.com">BroozSoft</a> IT Group
		</div>
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