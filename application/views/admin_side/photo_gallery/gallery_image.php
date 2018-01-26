<div class="row-fluid" >
					<div class="span12">
						<!-- BEGIN GALLERY MANAGER PORTLET-->
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i><?php echo tran('Add Images');?></div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<!-- BEGIN GALLERY MANAGER PANEL-->
								<div class="row-fluid">
									
									
							<form action="<?php echo site_url('photo_gallery/add_more_image'); ?>" method="post" enctype="multipart/form-data">
                                		<input type="hidden" name="id" value="<?php  echo $id;?>">
                                		<input type="hidden" name="name" value="<?php  echo $this->uri->segment('4');?>">
                                		<input multiple name="more_image[]" type="file" id="uploadImage" style="float:left" class="btn pull-right green" />
                                		<input type="submit" value="Upload" class="btn pull-right green">
                                
                            </form>
						<!-- 	<div class="wrap" style="margin-top:80px">
								<center>
									<img id="uploadPreview" src="<?php echo base_url();?>image/user/upload_profile.jpg" style="display:block"/>
								</center>
							</div> -->
								<!-- END GALLERY MANAGER PANEL-->
								
								<!-- BEGIN GALLERY MANAGER LISTING-->
								<div class="row-fluid" style="margin-top:50px">
									<hr class="clearfix" />

									 <?php 
							   
                                    $path = glob("image/materail/".$id."/*.jpg");

                                    foreach ($path as $key => $values) {
                                    	
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
												<a href="#" class="icon"><i class="icon-paper-clip"></i></a>
												<a href="#" class="icon"><i class="icon-link"></i></a>
												<a href="#" class="icon"><i class="icon-pencil"></i></a>
												<a href="#" class="icon"><i class="icon-remove"></i></a>    
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