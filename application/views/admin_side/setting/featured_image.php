
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin_side/ajax_upload/css/imgareaselect-animated.css" />
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

	<style>


	.wrap{
		width: 700px;
		margin: 10px auto;
		padding: 10px 15px;
		background: white;
		border: 2px solid #DBDBDB;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		text-align: center;
		overflow: hidden;
	}
	img#uploadPreview{
		border: 0;
		border-radius: 3px;
		-webkit-box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27);
		box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27);
		margin-bottom: 30px;
		overflow: hidden;
	}
	input[type="submit"]{
		border-radius: 10px;
		background-color: #61B3DE;
		border: 0;
		color: white;
		font-weight: bold;
		font-style: italic;
		padding: 6px 15px 5px;
		cursor: pointer;
	}
	</style>

                <div class="row-fluid" id="image_for_crop">
					<div class="span12">
						<!-- BEGIN PORTLET-->   
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>plaese upload your image <?php echo $this->session->userdata('u_lastname');?></div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
                                <div class="wrap">
                                
                                	<!-- image preview area-->
                                	<center><img id="uploadPreview" src="<?php echo base_url();?>image/user/upload_profile.jpg" style="display:block;"/></center>
                                	
                                	<!-- image uploading form -->
                                	<form action="<?php echo site_url('award/add_featured_image'); ?>" method="post" enctype="multipart/form-data">
                                		<input type="hidden" name="id" value="<?php  echo $id;?>">
                                		<input id="uploadImage" type="file" accept="image/jpeg" name="featured_image" />
                                		<input type="submit" value="Upload">
                                
                                	</form>
                                	
                                </div><!--wrap-->
									
						 
							</div>

						</div>

						<!-- END PORTLET-->
					</div>
				</div>



	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<script src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>


		<script type="text/javascript" src="<?php echo base_url();?>admin_side/ajax_upload/js/jquery.imgareaselect.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>admin_side/ajax_upload/js/script.js"></script>
