	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-datepicker/css/datepicker.css" />
	<!-- scripts for select and search capablity -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/chosen-bootstrap/chosen/chosen.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/select2/select2_metro.css" />

		<!-- BEGIN PAGE -->  
		    	<!-- start of ajax body-->
		    	  
		    <form action="<?php echo site_url('materail/insert'); ?>"  class="form-horizontal" method="post">
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET-->   
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i><?php echo tran('Add New Product');?></div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
					
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
							

								<div class="control-group <?php echo (form_error('m_name') ) ? 'error' : ''; ?>">
									<label class="control-label"><?php echo tran('Name');?>' :<span class='red'>*</span></label>
									<div class="controls">
										<input type="text" value="<?php echo set_value('m_name'); ?>"  name="m_name" class="span6 m-wrap popovers" data-trigger="hover" 
										data-content="<?php echo tran('Type Your Product Name');?>"
										 />
										<span class="help-inline"><?php echo (form_error('m_name')) ? form_error('m_name') : ""; ?></span>
									</div>
								</div>
								<div class="control-group <?php echo (form_error('m_type') ) ? 'error' : ''; ?>">
									<label class="control-label"><?php echo tran('Category');?> :</label>
									<div class="controls">
										<select  name="m_type" id="select2_sample1" class="span6 select2" placeholder="select city">
											<option value="p1"><?php echo tran('First Product');?></option>
											<option value="p2"><?php echo tran('Second Product');?></option>
											<option value="p3"><?php echo tran('Third Product');?></option>
										</select>
										<span class="help-inline"><?php echo (form_error('m_type')) ? form_error('m_type') : "<span class='red'>*</span>"; ?></span>
									</div>
								</div>
                                <div class="control-group <?php echo (form_error('m_summery') ) ? 'error' : ''; ?>">
									<label class="control-label"><?php echo tran('Summery');?> :<span class='red'>*</span></label>
									<div class="controls">
									<textarea class="span12 ckeditor m-wrap" rows="6" name="m_summery"><?php echo set_value('m_summner'); ?></textarea>
									<span class="help-inline"><?php echo (form_error('m_summery')) ? form_error('m_summery') : ""; ?></span>
								    </div>
								</div>
									<div class="form-actions">
										
										<button type="submit" class="btn black"><?php echo tran('Next');?></button>
										
									</div> 
						 
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
					</div>

				</div>
			</form>
				        


	<!-- END PAGE CONTENT -->
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/ckeditor/ckeditor.js"></script> 
<!-- 	<script type="text/javascript" src="<?php //echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
	<script type="text/javascript" src="<?php //echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script> -->

	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- scripts for select and search capablity -->
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/select2/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>

  
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url(); ?>admin_side/assets/scripts/app.js"></script>
	<script src="<?php echo base_url(); ?>admin_side/assets/scripts/form-components.js"></script>     
	<!-- END PAGE LEVEL SCRIPTS --> 
		<!-- END PAGE LEVEL SCRIPTS -->
		<div id="script"> 
	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		   FormComponents.init();
		// FormImageCrop.init();
		});
	</script>