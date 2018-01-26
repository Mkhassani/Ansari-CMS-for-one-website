
	<!-- BEGIN PAGE LEVEL STYLES --> 
	<link href="<?php echo base_url();?>admin_side/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5<?php echo $this->session->userdata('admin_lang');?>.css" />

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
								<div class="caption"><i class="icon-reorder"></i><?php echo tran('Update Title And Summery');?></div>
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
										<input type="text" value="<?php echo (isset($value->m_name))? $value->m_name : set_value('m_name'); ?>"  name="m_name" class="span6 m-wrap popovers" data-trigger="hover" data-content="<?php echo tran('Type New Title Here');?>" />
										<span class="help-inline"><?php echo (form_error('m_name')) ? form_error('m_name') : ""; ?></span>
									</div>
								</div>	
                                <div class="control-group <?php echo (form_error('m_summery') ) ? 'error' : ''; ?>">
									<label class="control-label"><?php echo tran('Summery');?> :<span class='red'>*</span></label>
									<div class="controls">
									<textarea class="span12 ckeditor m-wrap" rows="6" name="m_summery"><?php echo set_value('m_summner'); ?>
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
	<div class="row-fluid" >
					<div class="span12">
						<!-- BEGIN GALLERY MANAGER PORTLET-->
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i><?php echo tran('Manage picture');?></div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<!-- BEGIN GALLERY MANAGER PANEL-->
								<div class="row-fluid">
									
									
							<form action="<?php echo site_url('award/add_featured_image/update'); ?>" method="post" enctype="multipart/form-data">
                                		<input type="hidden" value="<?php echo $id;  ?>" name="id" class="btn pull-right green">
                                		<input type="hidden" value="<?php echo $this->uri->segment(4);  ?>" name="name" class="btn pull-right green">
                                		<input name="featured_image" type="file" id="uploadImage" style="float:left" class="btn pull-right green" />
                                		<input type="submit" value="<?php echo tran('Upload');?>" class="btn pull-right green">
                                
                            </form>
								<div class="row-fluid" style="margin-top:50px">
									<hr class="clearfix" />
									 <?php
									if(is_dir("image/materail/".$id."/thumb/")){
                                      if ($handle = opendir("image/materail/".$id."/thumb/")) {
                                      
                                          /* This is the correct way to loop over the directory. */
                                              while ($file = readdir($handle)) {
                                              	if($file != "." && $file != ".."){
                                              		

                                     ?>
									
									 <div class="span3">
										<div class="item">
											<a class="fancybox-button" data-rel="fancybox-button" title="Photo"
											 href="<?php  echo base_url();?>image/materail/<?php echo $id; ?>/<?php echo $file; ?>">
												<div class="zoom">
													<img width="250"  height="250" src="<?php  echo base_url();?>image/materail/<?php echo $id; ?>/thumb/<?php echo $file; ?>"  alt="Photo" />                    
													<div class="zoom-icon"></div>
												</div>
											</a>
											<div class="details">
												
												<a href="<?php echo site_url('photo_gallery/delete_image/').'/'.$id.'/'.$file; ?>" class="icon"><i class="icon-remove"></i></a>    
											</div>
										
										</div>
									</div>

									<?php }}
									 closedir($handle);
								}}?>
									
								</div>
							
								<!-- END GALLERY MANAGER LISTING-->
								
							</div>
						</div>
						<!-- END GALLERY MANAGER PORTLET-->
					</div>
	</div>
<?php  }?>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/select2/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/ckeditor/ckeditor.js"></script> 
<!-- 	<script type="text/javascript" src="<?php //echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
	<script type="text/javascript" src="<?php //echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>   
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo base_url();?>admin_side/assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>   
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