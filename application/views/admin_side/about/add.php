
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5<?php echo $this->session->userdata('admin_lang');?>.css" />

		<!-- BEGIN PAGE -->  
		    	<!-- start of ajax body-->
		    <form action="<?php echo site_url('about/insert'); ?>"  class="form-horizontal" method="post">
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET-->   
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i><?php echo tran('Add New Article For About Campany');?></div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
					
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
							

								<div class="control-group <?php echo (form_error('m_name') ) ? 'error' : ''; ?>">
									<label class="control-label"><?php echo tran('Name');?> :<span class='red'>*</span></label>
									<div class="controls">
										<input type="text" value="<?php echo set_value('m_name'); ?>"  name="m_name" class="span6 m-wrap popovers" data-trigger="hover" data-content="<?php echo tran('Type Title Here');?>"  />
										<span class="help-inline"><?php echo (form_error('m_name')) ? form_error('m_name') : ""; ?></span>
									</div>
								</div>
                                <div class="control-group <?php echo (form_error('m_summery') ) ? 'error' : ''; ?>">
									<label class="control-label"><?php echo tran('Summery');?> :<span class='red'>*</span></label>
									<div class="controls">
									<textarea class="span12 ckeditor m-wrap" rows="6" name="m_summery"><?php echo set_value('m_summnery'); ?></textarea>
									<span class="help-inline"><?php echo (form_error('m_summery')) ? form_error('m_summery') : ""; ?></span>
								    </div>
								</div>
								 <div class="control-group <?php echo (form_error('m_desc') ) ? 'error' : ''; ?>">
									<label class="control-label"><?php echo tran('Desxription');?> :<span class='red'>*</span></label>
									<div class="controls">
									<textarea class="span12 ckeditor m-wrap" rows="15" name="m_desc"><?php echo set_value('m_desc'); ?></textarea>

									<span class="help-inline"><?php echo (form_error('m_desc')) ? form_error('m_desc') : ""; ?></span>
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
				        

	<!-- BEGIN PAGE LEVEL PLUGINS -->
		<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/ckeditor/ckeditor.js"></script> 
<!-- 	<script type="text/javascript" src="<?php //echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
	<script type="text/javascript" src="<?php //echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
 -->
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url(); ?>admin_side/assets/scripts/app.js"></script>
	<script src="<?php echo base_url(); ?>admin_side/assets/scripts/form-components.js"></script>     
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		   FormComponents.init();
		});
	</script>