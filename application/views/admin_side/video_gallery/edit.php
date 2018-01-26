
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

 <form action="<?php echo site_url('video_gallery/update'); ?>"  class="form-horizontal" method="post">
		    	<input type="hidden" name="m_id" value="<?php echo (isset($value->m_id))? $value->m_id : set_value('m_id'); ?>">
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET-->   
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i><?php echo tran('Update Video Gallery');?></div>
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
										<input type="text" value="<?php echo (isset($value->m_name))? $value->m_name : set_value('m_name'); ?>"  name="m_name" class="span6 m-wrap popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" />
										<span class="help-inline"><?php echo (form_error('m_name')) ? form_error('m_name') : ""; ?></span>
									</div>
								</div>
                                <div class="control-group <?php echo (form_error('m_summery') ) ? 'error' : ''; ?>">
									<label class="control-label"><?php echo tran('Summery');?> :<span class='red'>*</span></label>
									<div class="controls">
									<textarea class="span12 ckeditor m-wrap" rows="6" name="m_summery">
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

				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET--> 
					<form action="<?php echo site_url('video_gallery/extra_url_insert/'.$id); ?>"  class="form-horizontal" method="post">  
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i><?php echo lang('Update Video');?></div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
					
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<div class="control-group <?php echo (form_error('m_desc') ) ? 'error' : ''; ?>">
									<label class="control-label"><?php echo tran('Youtube URL');?> :<span class='red'>*</span></label>
									<div class="controls">
										<input type="text" value="<?php echo set_value('y_url'); ?>"  name="y_url" class="span6 m-wrap popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" />
										<span class="help-inline"><?php echo (form_error('y_url')) ? form_error('y_url') : ""; ?></span>
									</div>
								</div>
									<div class="form-actions">
										
										<button type="submit" class="btn black"><?php echo tran('Update');?></button>
										
									</div> 
						 
							</div>
						</div>
					</form>
						<!-- END SAMPLE FORM PORTLET-->

							<div class="portlet-body">	
								<?php $rows=$this->youtube_url_model->get_where(array('y_m_id'=>$id));
								foreach ($rows as $key => $value) {
								?>
								<div style="height: 260px;width: 440px;float:left;">
									<div u="player" style="position: relative;float:left;margin:20px; top: 0px; left: 0px; width: 440px; height: 220px; overflow: hidden;">         
									    <iframe src="<?php echo $value->y_url;?>" frameborder="0" width="440" height="220">
									    </iframe>
									                    <!-- play cover begin (optional, can remove play cover) -->
									    <div u="cover" class="videoCover" style="position: absolute; top: 0px;
									         left: 0px; background-color: #000; background-image: url(<?php echo base_url('bootstrap/img/play.png'); ?>;
									         background-position: center center; background-repeat: no-repeat;
									         filter: alpha(opacity=40); opacity: .4; cursor: pointer; display: none;
									         z-index: 1;">
									    </div>
									</div>
									<a href="<?php echo site_url('video_gallery/delete_video_url/'.$value->y_id.'/'.$id);?>"><?php echo tran('Delete');?></a>
								</div>
								<?php }
								 ?>
							</div>
					</div>

				</div>


<?php  }?>
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/ckeditor/ckeditor.js"></script> 
<!-- 	<script type="text/javascript" src="<?php //echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
	<script type="text/javascript" src="<?php //echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script> -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url();?>admin_side/assets/scripts/app.js"></script>   
	<script src="<?php echo base_url(); ?>admin_side/assets/scripts/form-components.js"></script>  
	<!-- END PAGE LEVEL SCRIPTS -->


	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		   FormComponents.init();
		   Gallery.init();
		});
	</script>