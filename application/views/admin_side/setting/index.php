	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
	<!-- BEGIN PAGE --> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin_side/ajax_upload/css/imgareaselect-animated.css" />
		
				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->				
<div>
	<?php 
	$rows=$this->contact_info_model->get_where(array('ci_bu_table'=>'website'));
	foreach ($rows as $key => $value) {

	}

	?>
			<form action="<?php echo site_url('setting/new_update_address'); ?>" class="form-horizontal" method="post">
				<input type="hidden" name="ci_id" value="<?php echo (isset($value->ci_id))? $value->ci_id : ''; ?>">
				<div class="row-fluid">
					<div class="span12">
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i><?php echo tran('Location Information');?></div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
									<div class="control-group">
										<label class="control-label"><?php echo tran('Phone');?> :</label>
										<div class="controls">
											<input name="ci_phone" value="<?php echo (isset($value->ci_phone))? $value->ci_phone : ''; ?>" class="span6 m-wrap" id="mask_phone" type="text"  />
											<span class="help-inline"> (999) 999-999</span>
										</div>
									</div>
									<div class="control-group <?php echo (form_error('ci_mobile') ) ? 'error' : ''; ?>">
										<label class="control-label"><?php echo tran('Mobile');?> :</label>
										<div class="controls">
											<input value="<?php echo (isset($value->ci_mobile))? $value->ci_mobile: set_value('ci_mobile'); ?>"name="ci_mobile" class="span6 m-wrap" id="mask_phone" type="text"  />
											<span class="help-inline"><?php echo (validation_errors()) ? form_error('ci_mobile') : "(999) 999-999"; ?></span>
							 		     </div>
									</div>
									<div class="control-group <?php echo (form_error('ci_email') ) ? 'error' : ''; ?>">
										<label class="control-label"><?php echo tran('Email');?> :</label>
										<div class="controls">
											<input value="<?php echo (isset($value->ci_email))? $value->ci_email: set_value('ci_email'); ?>" name="ci_email" type="text" class="span6 m-wrap popovers" data-trigger="hover" data-content="Your Email Acts As Your Username." data-original-title="Your Personal Email" />
											<span class="help-inline"><?php echo (validation_errors()) ? form_error('ci_email') : ""; ?></span>
										</div>
									</div>
									<div class="control-group <?php echo (form_error('ci_city') ) ? 'error' : ''; ?>">
										<label class="control-label"><?php echo tran('City');?> :</label>
										<div class="controls">
											<select  name="ci_city" id="select2_sample1" class="span6 select2" placeholder="select city">
												<option value="h"><?php echo tran('Herat');?></option>
												<option value="k"><?php echo tran('Kabul');?></option>
												<option value="m"><?php echo tran('Mazar');?></option>
											</select>
											<span class="help-inline"><?php echo (form_error('ci_city')) ? form_error('ci_city') : "<span class='red'>*</span>"; ?></span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"><?php echo tran('Address');?></label>
										<div class="controls">
										<textarea name="ci_address" class="span12 wysihtml5 m-wrap" rows="6">
											<?php echo (isset($value->ci_address))? $value->ci_address: set_value('ci_address'); ?>
										</textarea>
									</div>
							</div>
							<div class="form-actions">	
								<button type="submit" class="btn black"><?php echo tran('Submit');?></button>
							</div> 
						</div>
					</div>
				</div>
		    </form>
	<?php 
	$socails=$this->socail_acount_model->get();
	foreach ($socails as $key => $socail) {
	}

	?>
			<form action="<?php echo site_url('setting/socail_acount_insert'); ?>" class="form-horizontal" method="post">
				<input type="hidden" name="ca_id" value="<?php echo (isset($socail->ca_id))? $socail->ca_id:'' ?>">
				<div class="row-fluid">
					<div class="span12">
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i><?php echo tran('Socail Address');?></div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
									<div class="control-group <?php echo (form_error('fb') ) ? 'error' : ''; ?>">
										<label class="control-label"><?php echo tran('facebook Page');?></label>
										<div class="controls">
											<input name="fb"  value="<?php echo (isset($socail->ca_fb))? $socail->ca_fb:'' ?>"  type="text"  class="span6 m-wrap popovers" data-trigger="hover" data-content="Your Email Acts As Your Username." data-original-title="Your Personal Email" />
											<span class="help-inline">http://www.facebook.com/your-page-name</span>
										</div>
									</div>
									<div class="control-group <?php echo (form_error('tw') ) ? 'error' : ''; ?>">
										<label class="control-label"><?php echo tran('Tweeter Acount');?></label>
										<div class="controls">
											<input value="<?php echo (isset($socail->ca_tw))? $socail->ca_tw:'' ?>"name="tw" type="text"  class="span6 m-wrap popovers"  data-trigger="hover" data-content="Your Email Acts As Your Username." data-original-title="Your Personal Email"  />
										
							 		     </div>
									</div>
									<div class="control-group <?php echo (form_error('gp') ) ? 'error' : ''; ?>">
										<label class="control-label"><?php echo tran('Google Plus+');?></label>
										<div class="controls">
											<input value="<?php echo (isset($socail->ca_gp))? $socail->ca_gp:'' ?>" name="gp" type="text" class="span6 m-wrap popovers" data-trigger="hover" data-content="Your Email Acts As Your Username." data-original-title="Your Personal Email" />
											
										</div>
									</div>
							        <div class="form-actions">	
								        <button type="submit" class="btn black"><?php echo tran('Submit');?></button>
							        </div> 
							</div>
						</div>
					</div>
				</div>
		    </form>

			<div class="row-fluid">
				<div class="span12">
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption"><i class="icon-reorder"></i><?php echo tran('Upload Your Logo');?></div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body form">
	                            <div class="wrap">
                                
                                	<!-- image preview area-->
                                <?php
									if(is_dir("image/logo/")){
                                      if ($handle = opendir("image/logo/")) {
                                      
                                          /* This is the correct way to loop over the directory. */
                                              while ($file = readdir($handle)) {
                                              	if($file != "." && $file != ".."){
                                              	$image_name=substr($file, 2);
                                     ?>
                                     <?php }
                                              }
                                              }
                                              } ?>
                                	<center><img id="uploadPreview" src="<?php echo base_url();?>image/logo/<?php echo $this->session->userdata('lang').$image_name;?>" style="display:block;"/></center>
                                	
                                	<!-- image uploading form -->
                                	<form action="<?php echo site_url('setting/add_logo'); ?>" method="post" enctype="multipart/form-data">
                                		<input type="hidden" name="id" value="<?php  //echo $id;?>">
                                		<input id="uploadImage" type="file" accept="image/jpeg" name="featured_image" />
                                		<input type="submit" value="<?php echo tran('Upload');?>">
                                	</form>
                                	
                                </div><!--wrap-->
						</div>
					</div>
				</div>
			</div>


</div>
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

	<script src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>


	<script type="text/javascript" src="<?php echo base_url();?>admin_side/ajax_upload/js/jquery.imgareaselect.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>admin_side/ajax_upload/js/script.js"></script>
	<!-- END PAGE CONTENT -->
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url(); ?>admin_side/assets/scripts/app.js"></script>
	<script src="<?php echo base_url(); ?>admin_side/assets/scripts/form-components.js"></script>     
	<!-- END PAGE LEVEL SCRIPTS --> 

	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		   FormComponents.init();
		// FormImageCrop.init();
		});
	</script>

