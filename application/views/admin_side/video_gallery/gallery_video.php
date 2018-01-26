		<!-- BEGIN PAGE LEVEL STYLES -->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
	<!-- END PAGE LEVEL STYLES -->
		    	<!-- start of ajax body-->

				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET--> 
					<form action="<?php echo site_url('video_gallery/extra_url_insert/'.$id); ?>"  class="form-horizontal" method="post">  
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i><?php echo tran('Add More Videos To The Article');?></div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<div class="control-group <?php echo (form_error('y_url') ) ? 'error' : ''; ?>">
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


					</div>

				</div>

				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET--> 

						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i><?php echo tran('Videos Of Your Gallery');?></div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">	
								<?php $rows=$this->youtube_url_model->get_where(array('y_m_id'=>$id));
								foreach ($rows as $key => $value) {
								?>
								<div style="height: 260px;width: 440px;float:left;">
									
									<div u="player" style="position: relative;margin:20px; top: 0px; left: 0px; width: 440px; height: 220px; overflow: hidden;">         
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

						<!-- END SAMPLE FORM PORTLET-->


					</div>

				</div>

				       
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url(); ?>admin_side/assets/scripts/app.js"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		});
	</script>