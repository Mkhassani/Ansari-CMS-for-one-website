			<!-- Start Footer -->
				<footer style="background:#431B83; border-top:3px solid #D6A939;">
				<div class="container">
					<div class="row">
						<?php $rows=$this->contact_info_model->get_where(array('ci_bu_table'=>'website'));
						foreach ($rows as $key => $value) {
							
						}
						if(isset($value->ci_id)){
						 ?>
						
						<!-- Start Get in touch -->
							<div class="footer-align col-lg-12">
								<div class="widget">
									<center><h1 class="widgetheading"><?php echo tran('Get in touch with us');?></h1></center>
									<address>
									<?php echo $value->ci_address;?>
									</address>
									<p class="change-font">
										<i class="icon-phone"></i>
										<?php echo tran(' Phone');?> : <?php echo $value->ci_phone;?><br>
										<?php echo tran('Mobile');?> : <?php echo $value->ci_mobile;?><br>
										<i class="icon-envelope-alt"></i>
										<?php echo tran(' Email');?> : <?php echo $value->ci_email;?>
									</p>
								</div>
							</div>
							<?php }?>
				<div id="sub-footer" style="background:#431B83;">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="copyright">
									<center>
									<p>
										© 2015 <a href="http://www.broozsoft.com"><?php echo tran('BROOZ SOFT'); ?></a> - <?php echo tran('IT Consultant Group'); ?>
									</p>
									</center>
								</div>
							</div>

						</div>
					</div>
				</div>
				</footer>
			<!-- End Footer -->
		</div>
		<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
		
		<!-- javascript
		    ================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?php echo base_url('bootstrap/js/jquery.js'); ?>"></script>
		<script src="<?php echo base_url('bootstrap/js/jquery.easing.1.3.js'); ?>"></script>
		<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('bootstrap/js/jquery.fancybox.pack.js'); ?>"></script>
		<script src="<?php echo base_url('bootstrap/js/jquery.fancybox-media.js'); ?>"></script>
		<script src="<?php echo base_url('bootstrap/js/google-code-prettify/prettify.js'); ?>"></script>
		<script src="<?php echo base_url('bootstrap/js/portfolio/jquery.quicksand.js'); ?>"></script>
		<script src="<?php echo base_url('bootstrap/js/portfolio/setting.js'); ?>"></script>
		<script src="<?php echo base_url('bootstrap/js/jquery.flexslider.js'); ?>"></script>
		<script src="<?php echo base_url('bootstrap/js/animate.js'); ?>"></script>
		<script src="<?php echo base_url('bootstrap/js/custom.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('bootstrap/js/jssor.slider.mini.js'); ?>"></script>
    	
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js'></script>
        <script src="<?php echo base_url('bootstrap/js/share.js');?>"></script>
		<!-- Start Announcement Script -->
			<script>
	       		jQuery(document).ready(function ($) {
		            var options = {
		                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
		                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
		                $AutoPlayInterval: 10000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
		                $PauseOnHover: 4,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

		                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
		                $SlideEasing: $JssorEasing$.$EaseLinear,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
		                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
		                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
		                $SlideWidth: 1100,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
		                $SlideHeight: 500,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
		                $SlideSpacing: 50, 					                //[Optional] Space between each slide in pixels, default value is 0
		                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
		                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
		                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
		                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
		                $DragOrientation: 1                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
		            };

		            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

		            //responsive code begin
		            //you can remove responsive code if you don't want the slider scales while window resizes
		            function ScaleSlider() {
		                var bodyWidth = document.body.clientWidth;
		                if (bodyWidth)
		                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1090));
		                else
		                    window.setTimeout(ScaleSlider, 30);
		            }
		            ScaleSlider();

		            $(window).bind("load", ScaleSlider);
		            $(window).bind("resize", ScaleSlider);
		            $(window).bind("orientationchange", ScaleSlider);
		            //responsive code end
		        });
    		</script>
		<!-- End Announcement Script -->

		<!-- Start Award Slider Script -->
			<script>
		        jQuery(document).ready(function ($) {
		            var options = {
		                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
		                $PlayOrientation: 2,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
		                $DragOrientation: 2,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

		                $ArrowNavigatorOptions: {
		                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
		                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
		                    $AutoCenter: 1,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
		                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
		                }
		            };

		            var jssor_slider1 = new $JssorSlider$("slider2_container", options);
		        });
		    </script>
		<!-- End Award Slider Script -->

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "431d5689-b5de-44cb-9bb8-107d148ae045", doNotHash: true, doNotCopy: false, hashAddressBar: false});</script>

		
	</body>
</html>