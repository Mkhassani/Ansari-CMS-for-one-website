			<!-- Start Slider Section -->
				<section id="featured">
					<!-- start slider -->
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
					<!-- Slider -->
				        <div id="main-slider" class="flexslider">
				            <ul class="slides">
				            	<?php
				            	if(is_dir("image/slideshow/thumb")){
                                      if ($handle = opendir("image/slideshow/thumb")) {
                                      
                                          /* This is the correct way to loop over the directory. */
                                              while ($file = readdir($handle)) {
                                              	if($file != "." && $file != ".."){?>
                            				   <li>
				            				    <img src="<?php echo base_url();?>image/slideshow/<?php echo $file;?>" alt="" />
				            				  </li>

                                      <?php
                                  }}}}
                                     ?>
				            	 
				            </ul>
				        </div>
					<!-- end slider -->
							</div>
						</div>
					</div>	
				</section>
			<!-- End Slider Section -->