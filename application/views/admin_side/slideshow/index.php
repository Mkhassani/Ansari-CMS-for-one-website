	<!-- BEGIN PAGE LEVEL STYLES --> 
	<link href="<?php echo base_url();?>admin_side/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>admin_side/assets/plugins/chosen-bootstrap/chosen/chosen.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->  
	<div class="row-fluid" >
					<div class="span12">
						<!-- BEGIN GALLERY MANAGER PORTLET-->
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i><?php echo tran('Manage slideshow');?></div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<!-- BEGIN GALLERY MANAGER PANEL-->
								<div class="row-fluid">
									
									
							<form action="<?php echo site_url('slideshow/add_slideshow_image'); ?>" method="post" enctype="multipart/form-data">
                                		
                                		<input multiple name="more_image[]" type="file" id="uploadImage" style="float:left" class="btn pull-right green" />
                                		<input type="submit" value="<?php echo tran('Upload');?>" class="btn pull-right green">
                                
                            </form>
								<div class="row-fluid" style="margin-top:50px">
									<hr class="clearfix" />

									 <?php 
			
									if(is_dir("image/slideshow/thumb")){
                                      if ($handle = opendir("image/slideshow/thumb")) {
                                      
                                          /* This is the correct way to loop over the directory. */
                                              while ($file = readdir($handle)) {
                                              	if($file != "." && $file != ".."){
                                     ?>
										
									<div class="span3">
										<div class="item">
											<a class="fancybox-button" data-rel="fancybox-button" title="Photo"
											 href="<?php echo base_url();?>image/slideshow/<?php  echo $file;?>">
												<div class="zoom">
													<img src="<?php echo base_url();?>image/slideshow/thumb/<?php  echo $file;?>" alt="Photo" />                    
													<div class="zoom-icon"></div>
												</div>
											</a>
											<div class="details">
												
												<a href="<?php echo site_url('slideshow/delete_slideshow_image/').'/'.$file; ?>" class="icon"><i class="icon-remove"></i></a>    
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

	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo base_url();?>admin_side/assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>   
	<script type="text/javascript" src="<?php echo base_url();?>admin_side/assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url();?>admin_side/assets/scripts/app.js"></script>   
	<script src="<?php echo base_url();?>admin_side/assets/scripts/gallery.js"></script>  
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		   Gallery.init();
		   $('.fancybox-video').fancybox({type: 'iframe'});
		});
	</script>