
	<!-- BEGIN PAGE LEVEL STYLES --> 
	<link href="<?php echo base_url();?>admin_side/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>admin_side/assets/plugins/chosen-bootstrap/chosen/chosen.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->  
		<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/chosen-bootstrap/chosen/chosen.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/select2/select2_metro.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/clockface/css/clockface.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-datepicker/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-multi-select/css/multi-select-metro.css" />
	<link href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
	<!-- END PAGE LEVEL STYLES -->
		<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?php echo base_url(); ?>admin_side/assets/plugins/jcrop/css/jquery.Jcrop.min.css" rel="stylesheet"/>
	<!-- END PAGE LEVEL STYLES -->
	<link href="<?php echo base_url(); ?>admin_side/assets/css/pages/image-crop.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin_side/ajax_upload/css/imgareaselect-animated.css" />
		<!-- BEGIN PAGE -->  
		    	<!-- start of ajax body-->

		    	<?php
		    	if($this->uri->segment(2)!='update'){
		    	 $rows=$this->materail_model->get_where(array('m_id'=>$id));
		    	
		    	foreach ($rows as $key => $value) {
		    		
		    	}
		    }
		    	 ?>

 <form action="<?php echo site_url('award/update'); ?>"  class="form-horizontal" method="post">
		    	<input type="hidden" name="m_id" value="<?php echo (isset($value->m_id))? $value->m_id : set_value('m_id'); ?>">
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET-->   
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i><?php echo lang('hello');?></div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
					
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
							

								<div class="control-group <?php echo (form_error('m_name') ) ? 'error' : ''; ?>">
									<label class="control-label">name :<span class='red'>*</span></label>
									<div class="controls">
										<input type="text" value="<?php echo (isset($value->m_name))? $value->m_name : set_value('m_name'); ?>"  name="m_name" class="span6 m-wrap popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" />
										<span class="help-inline"><?php echo (form_error('m_name')) ? form_error('m_name') : ""; ?></span>
									</div>
								</div>	
                                <div class="control-group <?php echo (form_error('m_summery') ) ? 'error' : ''; ?>">
									<label class="control-label">summery :<span class='red'>*</span></label>
									<div class="controls">
									<textarea class="span12 wysihtml5 m-wrap" rows="6" name="m_summery"><?php echo set_value('m_summner'); ?>
										<?php echo (isset($value->m_summery))? $value->m_summery : set_value('m_summery'); ?>
									</textarea>
									<span class="help-inline"><?php echo (form_error('m_summery')) ? form_error('m_summery') : ""; ?></span>
								    </div>
								</div>
									<div class="form-actions">
										
										<button type="submit" class="btn black"><?php echo tran('Update'); ?></button>
										
									</div> 
						 
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
					</div>

				</div>
			</form>
<?php if($this->uri->segment(2)!='update'){?>
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
                                	<?php   $path = glob("image/materail/".$id."/*.jpg");
                                	
                                    foreach ($path as $key => $values) {
                                    	$image_name=substr($values, 18);
                                     ?>
                                	<center><img id="uploadPreview" src="<?php echo base_url();?>image/materail/<?php echo $id."/thumb/".$image_name;?>" style="display:block;"/></center>
                                	<?php  } ?>
                                	<!-- image uploading form -->
                                	<form action="<?php echo site_url('award/update_featured_image'); ?>" method="post" enctype="multipart/form-data">
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
<?php  }?>
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/ckeditor/ckeditor.js"></script>  
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/select2/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/clockface/js/clockface.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>   
	<script src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
	<script src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script> 
	<script src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
	<script src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-switch/static/js/bootstrap-switch.js" type="text/javascript" ></script>
	<script src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>
	<!-- END PAGE LEVEL PLUGINS -->


	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo base_url();?>admin_side/assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>   
	<script type="text/javascript" src="<?php echo base_url();?>admin_side/assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url();?>admin_side/assets/scripts/app.js"></script>   
	<script src="<?php echo base_url();?>admin_side/assets/scripts/gallery.js"></script>  
	<script src="<?php echo base_url(); ?>admin_side/assets/scripts/form-components.js"></script>  
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		   FormComponents.init();
		   Gallery.init();
		   $('.fancybox-video').fancybox({type: 'iframe'});
		});
	</script>
			<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<script src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>


		<script type="text/javascript" src="<?php echo base_url();?>admin_side/ajax_upload/js/jquery.imgareaselect.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>admin_side/ajax_upload/js/script.js"></script>