
	<!-- END PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/select2/select2_metro.css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?php echo base_url(); ?>admin_side/assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->

<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="login">
	<div class="logo">
	<a href="http://www.broozsoft.com">
		<img src="<?php echo base_url();?>admin_side/img/www.broozsoft.com-160X116.png" alt="" /> 
	</a>
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN LOGIN FORM -->
		<!-- BEGIN LOGIN FORM -->
		<form class="form-vertical login-form" action="<?php echo site_url('admin/check_login');?>" method="post">
			<h3 class="form-title"><?php echo tran('Login to your account');?></h3>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span><?php echo tran('Enter any username and password');?>.</span>
			</div>
			<div class="control-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9"><?php echo tran('Email');?></label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="<?php echo tran('Email');?>" name="u_email"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9"><?php echo tran('Password');?></label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" placeholder="<?php echo tran('Password');?>" name="u_password"/>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<label class="checkbox">
				<input type="checkbox" name="remember" value="1"/> <?php echo tran('Remember me');?>
				</label>
				<button type="submit" class="btn blue pull-right">
				<?php echo tran('Login');?> <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
			<div class="forget-password">
				<h4><?php echo tran('Forgot your password');?> ?</h4>
				<p>
					<?php echo tran('no worries, click');?> <a href="javascript:;"  id="forget-password"><?php echo tran('here');?></a>
					<?php echo tran('to reset your password');?>.
				</p>
			</div>
		</form>
		<!-- END LOGIN FORM -->   
		<!-- END LOGIN FORM -->        
		<!-- BEGIN FORGOT PASSWORD FORM -->
		<form class="form-vertical forget-form" action="<?php echo  site_url('admin/reset_request');?>" method="post">
			<h3 ><?php echo tran('Forget Password');?> ?</h3>
			<p><?php echo tran('Enter your e-mail address below to reset your password');?>.</p>
			<div class="control-group">
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-envelope"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" autocomplete="on" name="request_email" required/>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<button type="button" id="back-btn" class="btn">
				<i class="m-icon-swapleft"></i> <?php echo tran('Back');?>
				</button>
				<button type="submit" class="btn blue pull-right">
				<?php echo tran('Submit');?> <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
		</form>
		<!-- END FORGOT PASSWORD FORM -->
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright" style="color:white">
					2015 &copy; <?php echo tran('Designed and Developed by ');?>
			<a href="http://www.broozsoft.com" ><h4><span style="color:rgb(6,146,197)"><?php echo tran('Soft');?></span>
				<span style="color:orange"><?php echo tran('Soft');?></span></h4></a> <?php echo tran('IT Group');?>
	</div>
	<!-- END COPYRIGHT -->
<!-- END BODY -->
    <script src="<?php echo base_url();?>admin_side/assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>admin_side/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>admin_side/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="<?php echo base_url();?>admin_side/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>admin_side/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<script src="<?php echo base_url();?>admin_side/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>admin_side/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?php echo base_url();?>admin_side/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>admin_side/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<script src="<?php echo base_url();?>admin_side/assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>admin_side/assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>admin_side/assets/plugins/select2/select2.min.js" type="text/javascript" ></script>
	<script src="<?php echo base_url();?>admin_side/assets/scripts/app.js" type="text/javascript"></script>


	<script src="<?php echo base_url();?>admin_side/assets/scripts/login-soft.js" type="text/javascript"></script>      
	<!-- END PAGE LEVEL SCRIPTS --> 


	<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>

	<?php if (validation_errors()) {?>
			<script>

                jQuery('.login-form').hide();
	            jQuery('.register-form').show();
	</script>
	<?php }?>
