	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-datepicker/css/datepicker.css" />
	<!-- scripts for select and search capablity -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/chosen-bootstrap/chosen/chosen.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/select2/select2_metro.css" />


		<!-- BEGIN PAGE CONTENT-->
	
			<div id="set_blog_ajax">
				

			<form action="<?php echo site_url('user/insert'); ?>" class="form-horizontal" method="post">
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET-->   
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i><?php echo tran('Basic information');?></div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
						    </div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->

									<div class="control-group <?php echo (form_error('u_name') ) ? 'error' : ''; ?>	">
										<label class="control-label"><?php echo tran('Name');?> :</label>
										<div class="controls">
											<input type="text"  value="<?php echo set_value('u_name'); ?>"name="u_name" class="span6 m-wrap popovers" data-trigger="hover" data-content="<?php echo tran('Type Your Name');?>" />
											<span class="help-inline"><?php echo (form_error('u_name') ) ? form_error('u_name') : "<span class='red'>*</span>"; ?></span>
										</div>
									</div>
										
										

									
									<div class="control-group <?php echo (form_error('u_lastname') ) ? 'error' : ''; ?>">
										<label class="control-label"><?php echo tran('Last Name');?> :</label>
										<div class="controls">
											<input type="text"  value="<?php echo set_value('u_lastname'); ?>"name="u_lastname" class="span6 m-wrap popovers" data-trigger="hover" data-content="<?php echo tran('Type Your Last Name');?>" />
											<span class="help-inline"><?php echo (form_error('u_lastname') ) ? form_error('u_lastname') : "<span class='red'>*</span>"; ?></span>
										</div>
									</div>
									<div class="control-group <?php echo (form_error('u_email') ) ? 'error' : ''; ?>">
										<label class="control-label"><?php echo tran('Email');?> :</label>
										<div class="controls">
											<input type="text" value="<?php echo set_value('u_email'); ?>" name="u_email"class="span6 m-wrap popovers" data-trigger="hover" data-content="<?php echo tran('Type Your Email It Acts As Your Username');?>"  />
											<span class="help-inline"><?php echo (form_error('u_email') ) ? form_error('u_email') : "<span class='red'>*</span>"; ?></span>
										</div>
									</div>
									<div class="control-group <?php echo (form_error('u_password') ) ? 'error' : ''; ?>">
										<label class="control-label"><?php echo tran('Password');?> :</label>
										<div class="controls"> 
											<input type="password" value="<?php echo set_value('u_password'); ?>" name="u_password"class="span6 m-wrap popovers" data-trigger="hover" data-content="<?php echo tran('Type Your Password Alghabatic, Nameric, Symboles');?>" />
											<span class="help-inline"><?php echo (form_error('u_password') ) ? form_error('u_password') : "<span class='red'>*</span>"; ?></span>
										</div>
									</div>
									<div class="control-group <?php echo (form_error('u_birth_date') ) ? 'error' : ''; ?>">
										<label class="control-label"><?php echo tran('Birth Of Date');?></label>
										<div class="controls">
											<div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
												<input  value="<?php echo set_value('u_birth_date'); ?>"   name="u_birth_date"class="m-wrap m-ctrl-medium date-picker" readonly size="16" type="text" value="" /><span class="add-on"><i class="icon-calendar"></i></span>dfsdf
												<span class="help-inline"><?php echo (form_error('u_birth_date')) ? form_error('u_birth_date'): "<span class='red'>*</span>"; ?></span>
											</div>
										</div>
									</div>
								
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span12">
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i><?php echo tran('Contact and Location information');?></div>
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
											<input name="ci_phone" class="span6 m-wrap" id="mask_phone" type="text"  />
											<span class="help-inline"> (999) 999-999</span>
										</div>
									</div>
									<div class="control-group <?php echo (form_error('ci_mobile') ) ? 'error' : ''; ?>">
										<label class="control-label"><?php echo tran('Mobile');?> :</label>
										<div class="controls">
											<input value="<?php echo set_value('ci_mobile'); ?>"name="ci_mobile" class="span6 m-wrap" id="mask_phone" type="text"  />
											<span class="help-inline"><?php echo (validation_errors()) ? form_error('ci_mobile') : "<span class='red'>*</span>(999) 999-999"; ?></span>
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
										<textarea name="ci_address" class="span12 wysihtml5 m-wrap" rows="6"></textarea>
									</div>
							</div>
								
								
								<!-- END FORM--> 
								<div class="form-actions">
									
								     <button type="submit" class="btn black"><?php echo tran('Next');?></button>
								    
								    
								     <!-- <button type="button" onclick="set_blog()" class="btn blue" >Set Blog ></button> -->
								      
							    </div> 
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
		    </form>
				<!-- crop specail scripts-->

                                        <div id="form_modal10" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
												<h3 id="myModalLabel10">Sample Form in Modal</h3>
											</div>
											<div class="modal-body">
												<div class="row-fluid">
													<form action="#" class="form-horizontal">
														
														
														<div class="control-group">
															<label class="control-label">Basic</label>
															<div class="controls">
																<select id="select2_sample_modal_1" class="span12 select2">
																	<option value="">&nbsp;</option>
																	<option value="AL">Alabama</option>
																	<option value="WY">Wyoming</option>
																</select>
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Phone</label>
															<div class="controls">
																<input class="span6 m-wrap" id="mask_phone" type="text"  />
																<span class="help-inline">(999) 999-9999</span>
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Loading Remote Data</label>
															<div class="controls">
																<input type="hidden" id="select2_sample_modal_6" class="span12 select2">
															</div>
														</div>
													</form>
												</div>
											</div>
											<div class="modal-footer">
												<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
												<button class="btn green btn-primary" data-dismiss="modal">Save changes</button>
											</div>
										</div>
			</div>

	<!-- END PAGE CONTENT -->
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

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
         </div>
	<!-- END JAVASCRIPTS --> 

	<!-- END PAGE LEVEL SCRIPTS -->