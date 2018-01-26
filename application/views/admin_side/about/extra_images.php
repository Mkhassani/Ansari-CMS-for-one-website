	<!-- BEGIN PAGE LEVEL STYLES --> 
	<link href="<?php echo base_url();?>admin_side/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>admin_side/assets/plugins/chosen-bootstrap/chosen/chosen<?php echo $this->session->userdata('admin_lang');?>.css" rel="stylesheet" type="text/css"/>
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
									
									
							<form action="<?php echo site_url('about/add_extra_images'); ?>" method="post" enctype="multipart/form-data">
                                		<input type="hidden" value="<?php echo $id;  ?>" name="id" class="btn pull-right green">
                                		<input multiple name="more_image[]" type="file" id="uploadImage" style="float:left" class="btn pull-right green" />
                                		<input type="submit" value="Upload" class="btn pull-right green">
                                
                            </form>
								<div class="row-fluid" style="margin-top:50px">
									<hr class="clearfix" />

									 <?php 
							   
                                    $path = glob("image/materail/".$id."*.jpg");

                                    foreach ($path as $key => $values) {
                                    	$image_name=substr($values, 16);
                                     ?>
									
									<div class="span3">
										<div class="item">
											<a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="<?php  echo base_url().$values;;?>">
												<div class="zoom">
													<img src="<?php  echo base_url().$values;;?>" alt="Photo" />                    
													<div class="zoom-icon"></div>
												</div>
											</a>
											<div class="details">
												
												<a href="<?php echo site_url('slideshow/delete_slideshow_image/').'/'.$image_name; ?>" class="icon"><i class="icon-remove"></i></a>    
											</div>
										
										</div>
									</div>

									<?php }?>
									
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