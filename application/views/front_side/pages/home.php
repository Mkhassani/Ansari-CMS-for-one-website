<!-- Start Content -->

				<section id="content">
					<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="box">
										<div class="box-bottom">
											<a><?php echo tran('Products'); ?></a>
										</div>
									</div>
								</div>
							</div>

						<!-- Start Products -->
							<div class="row">
								<div class="col-xs-12">
									<div class="row">
										<section id="projects">
											<ul id="thumbs" class="portfolio tumbnail">
												<!-- Start Product 1    Item Project and Filter Name -->
													<?php
														 $rows=$this->materail_model->get_where_limit(array('m_category'=>'product'),4);																		
											foreach ($rows as $key => $values) {														
												if(is_dir("image/materail/".$values->m_id."/thumb")){
                                   				   if ($handle = opendir("image/materail/".$values->m_id."/thumb")) { 
                                   				   	while ($product_image = readdir($handle)) {
                                             		 	if($product_image != "." && $product_image != ".."){ 
                                             		 		
													?>

													<li class="col-xs-12 col-sm-6 col-lg-3 design" data-id="id-0" data-type="web">
														<div class="item-thumbs">
															<!-- Fancybox - Gallery Enabled - Title - Full Image -->
															<a class="hover-wrap fancybox" data-fancybox-group="gallery"
															 title="<?php echo $values->m_name;?>" href="<?php echo base_url();?>image/materail/<?php echo $values->m_id."/".$product_image; ?>">
																<span class="overlay-img"></span>
																<span class="overlay-img-thumb font-icon-plus"></span>
															</a>
															<!-- Thumb Image and Description -->
															
															<img src="<?php echo base_url();?>image/materail/<?php echo $values->m_id."/thumb/".$product_image; ?>" alt="<?php echo $values->m_summery;?>">

													<?php }}}} }?>

														</div>
													</li>
												
											</ul>
										</section>
									</div>
								</div>
							</div>
						<!-- End Products -->

						<div class="row">
							<div class="col-lg-12">
								<div class="row">
									<!-- Start Announcement -->
										<div class="col-xs-12 col-sm-6 col-lg-12">
											<div class="box">
												<div class="box-bottom">
													<a><?php echo tran('Announcement'); ?></a>
												</div>
												<div class="announce-pad box-gray aligncenter">
													<!-- Jssor Slider Begin -->
													    <div id="slider1_container" style="position: relative; top: 0px; left: 0px;
													     height: 200px; overflow: hidden; ">
													        
													        <!-- Start Loading Screen -->
														        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
														            <div style="filter: alpha(opacity=70); opacity:0.7;
														             position: absolute; display: block; background-color: #000; 
														             top: 0px; left: 0px;width: 100%;height:100%;">
														            </div>
														            <div style="position: absolute; display: block; 
														            background: url("<?php echo base_url();?>bootstrap/img/loading.
														            gif") no-repeat center center; top: 0px; left: 0px;width: 100%;
														            height:100%;">
														            </div>
														        </div>
													        <!-- End Loading Screen -->

													        <!-- Slides Container -->
														        <div u="slides" style="cursor: move; position: absolute; left: 0px;
														         top: 0px; width: 1130px; height: 200px; overflow: hidden;">
														            <?php
																		$rows=$this->materail_model->get_where(array('m_category'=>'announcement'));
																		//print_r($rows);																		
																		foreach ($rows as $key => $values) {														
																			if(is_dir("image/materail/".$values->m_id."/thumb")){
                                    											if ($handle = opendir("image/materail/".$values->m_id."/thumb")) { 	 	
                                    												while ($file = readdir($handle)) {
                                              											if($file != "." && $file != ".."){
					                                             		 ?>
					                                             		 <div id="te" style="width:100%">
															             	<div style="float:left; width:50%; padding-right:15px; padding-top:40px;">
															             		<h4><?php echo $values->m_name; ?> </h4>
															             		<p><?php echo $values->m_summery; ?></p>
															             	</div>
															             	<div style="float:left;">
															             		<img class="img-responsive img-thumbnail" u="image" alt="" src="<?php echo base_url();?>image/materail/<?php echo $values->m_id."/".$file;?>" />															      
															             	</div>
															             </div>
															            <?php } }}}} ?>
															    </div>
														    <!-- End Slides Container -->
													   	</div>
												    <!-- Jssor Slider End -->
														
												</div>
											</div>
										</div>
									<!-- End Announcement -->

									<!-- divider -->
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-lg-12">
												<div class="solidline">
												</div>
											</div>
										</div>
									<!-- end divider -->

									<!-- Start About us -->
										<div class="col-sm-12 col-lg-9 about">
											<div class="box">
												<div class="box-bottom">
													<a href="#"><?php echo tran('About us'); ?></a>
												</div>
												<div class="about-pad box-gray aligncenter">
												<?php
                                           $rows=$this->materail_model->get_where_limit(array('m_category'=>'about'),1);																		
											foreach ($rows as $key => $about_value) {														
												if(is_dir("image/materail/".$about_value->m_id."/thumb")){
                                   				   if ($handle = opendir("image/materail/".$about_value->m_id."/thumb")) { 
                                   				   	while ($about_image = readdir($handle)) {
                                             		 	if($about_image != "." && $about_image != ".."){ 
                                             		 		
                                             		 	?>
                                        
													<div id="home_about" class="col-xs-12 col-sm-6">
														<h4><?php echo $about_value->m_name; ?></h4>
														<p><?php echo $about_value->m_summery; ?></p>
													</div>
													<div id="home_about" class="col-xs-12 col-sm-6">
														<img class="img-responsive img-thumbnail" src="<?php echo base_url();?>image/materail/<?php echo $about_value->m_id; ?>/thumb/<?php echo $about_image; ?>" alt="" />
														<br/>
													</div>
													
													<a href="<?php echo base_url('index.php/pages/read_more/'.$about_value->m_id);?>" class="btn btn-theme"><?php echo tran('Read More');?></a>
													<?php }}}}} ?>
												</div>
											</div>
										</div>
									<!-- End About us -->

									<!-- Start Awards -->
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
											<div class="box">
												<div class="box-bottom">
													<a href="#"><?php echo tran('Awards'); ?></a>
												</div>
												<!-- Jssor Slider Begin -->
												<div class="award-pad box-gray aligncenter">
													
													<div id="slider2_container" style="position: relative; top: 0px; left: 0px;
													 width: 275px;height: 280px;">

												        <!-- Start Loading Screen -->
													        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
													            <div cstyle="filter: alpha(opacity=70); opacity:0.7; 
													            position: absolute; display: block; background-color: #000000;
													            top: 0px; left: 0px;width: 100%;height:100%;">
													            </div>
													            <div style="position: absolute; display: block; background:
													             url('<?php echo base_url();?>bootstrap/img/loading.gif') no-repeat
													             center center; top: 0px; left: 0px;width: 100%;height:100%;">
													            </div>
													        </div>
													    <!-- End Loading Screen -->

												        <!-- Start Slides Container -->
												        
													        <div u="slides" style="cursor: move; position: absolute; 
													         top: 0px; width: 220px; height:280px;overflow: hidden;">
													        	<?php
																	$rows=$this->materail_model->get_where(array('m_category'=>'award'));																		
																	foreach ($rows as $key => $values) {														
																		if(is_dir("image/materail/".$values->m_id."/thumb")){
                                   				 						   if ($handle = opendir("image/materail/".$values->m_id."/thumb")) { 
                                   				 						   	while ($award_image = readdir($handle)) {
                                             	 							 	if($award_image != "." && $award_image != ".."){ 
                                             		 		  	
				                                             	?>
													             <div>
													             	<a class="hover-wrap fancybox" data-fancybox-group="award_gallery" title="<?php echo $values->m_name;?>"
													             	 href="<?php echo base_url();?>image/materail/<?php echo $values->m_id."/".$award_image;?>">												             	
													             	<img class="img-responsive img-thumbnail" u="image" alt="<?php echo $values->m_summery;?>" 
																	src="<?php echo base_url();?>image/materail/<?php echo $values->m_id."/thumb/".$award_image;?>" />
													             	</a>
													            </div>
													            <?php }}}} } ?>
													        </div>

													      
													        
										
													    <!-- End Slides Container -->
					        
												        <!--#region Arrow Navigator Skin Begin -->
										        
												        <style>
												            /* jssor slider arrow navigator skin 08 css */
												            /*
												            .jssora08l                  (normal)
												            .jssora08r                  (normal)
												            .jssora08l:hover            (normal mouseover)
												            .jssora08r:hover            (normal mouseover)
												            .jssora08l.jssora08ldn      (mousedown)
												            .jssora08r.jssora08rdn      (mousedown)
												            */
												            .jssora08l, .jssora08r {
												                display: block;
												                position: absolute;
												                /* size of arrow element */
												                width: 50px;
												                height: 50px;
												                cursor: pointer;
												                background: url('<?php echo base_url();?>bootstrap/img/a08.png') no-repeat;
												                overflow: hidden;
												                opacity: .4;
												                filter: alpha(opacity=40);
												            }
												            .jssora08l { background-position: -5px -35px; }
												            .jssora08r { background-position: -65px -35px; }
												            .jssora08l:hover { background-position: -5px -35px; opacity: .8; filter:alpha(opacity=80); }
												            .jssora08r:hover { background-position: -65px -35px; opacity: .8; filter:alpha(opacity=80); }
												            .jssora08l.jssora08ldn { background-position: -5px -35px; opacity: .3; filter:alpha(opacity=30); }
												            .jssora08r.jssora08rdn { background-position: -65px -35px; opacity: .3; filter:alpha(opacity=30); }
												        </style>
												        <!-- Arrow Left -->
												        
											    	</div>
											    </div>
										   		<!-- Jssor Slider End -->
									   		</div>
										</div>
									<!-- End Awards -->
								</div>
							</div>
						</div>
						
					</div>
				</section>
<!-- End Content -->

<script src="<?php echo base_url('bootstrap/js/portfolio/jquery.quicksand.js'); ?>"></script>
<script src="<?php echo base_url('bootstrap/js/portfolio/setting.js'); ?>"></script>