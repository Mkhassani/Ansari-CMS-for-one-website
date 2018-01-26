<!-- Start Video Gallery -->

	<!-- Start Sitemap -->
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="<?php echo base_url('pages/index'); ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li><?php echo tran('Gallery'); ?><i class="icon-angle-right"></i></li>
							<li class="active"><?php echo tran('Video Gallery'); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End Sitemap -->

	<!-- Start Content -->
		<section id="content">
			<div class="container">
				<div class="row">
					<!-- Start Gallery -->
						<div id="get_videos" class="col-sm-6 col-lg-8">
							<article>
																<?php 
                                    $this->db->limit(1);
                                    $this->db->order_by('m_id', 'desc');
                                    $rows = $this->materail_model->get_where(array('m_category'=>'video_gallery'));
                                    foreach ($rows as $key => $value) {
                                        }
                                        if (isset($value->m_name)) {
                                        
								?>
								<div class="post-image">

									<div class="post-heading">
										<h3><?php echo $value->m_name; ?></h3>
									</div>
									<!-- Jssor Slider Begin -->
										<div id="slider4_container" style="position: relative; top: 0px; left: 0px; width: 640px; 
											height: 390px;">
	        								<!-- Slides Container -->
										        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px;
										         width: 640px; height: 390px;overflow: hidden;">

												    <?php 
					                                    $rows = $this->youtube_url_model->get_where(array('y_m_id'=>$value->m_id));
					                                    foreach ($rows as $key => $values) {
													?>
   
										            <div>
										                <div u="player" style="position: relative; top: 0px; left: 0px; width: 640px;
										                 height: 390px; overflow: hidden;">
										                    <!-- iframe in ebay page is not allowed, youtube iframe video is not supported
										                     for ebay listing -->
										                    <iframe src="<?php echo $values->y_url; ?>" frameborder="0" width="640" height="390"></iframe>
										                    <!-- play cover begin (optional, can remove play cover) -->
										                    <div u="cover" class="videoCover" style="position: absolute; top: 0px;
										                     left: 0px; background-color: #000; background-image: url(<?php echo base_url('bootstrap/img/play.png'); ?>;
										                      background-position: center center; background-repeat: no-repeat;
										                       filter: alpha(opacity=40); opacity: .4; cursor: pointer; display: none;
										                        z-index: 1;"></div>
										                    <!-- play cover end -->
										                    <!-- close button begin (optional, can remove close button) -->
										                    <style>
										                        .closeButton { background-image: url("<?php echo base_url();?>bootstrap/img/close.png"); }
										                        .closeButton:hover { background-position: -30px 0px; }
										                    </style>
										                    <div u="close" class="closeButton" style="position: absolute; top: 0px; right: 1px;
										                        width: 30px; height: 30px; background-color: #000; cursor: pointer; display: none; z-index: 2;">
										                    </div>
										                    <!-- close button end -->
										                </div>
										            </div>


										            <?php }?>

											    </div>
										    <!-- End Slides Container -->
										 	<!--#region Bullet Navigator Skin Begin -->
										        <style>
										            /* jssor slider bullet navigator skin 03 css */
										            /*
										            .jssorb03 div           (normal)
										            .jssorb03 div:hover     (normal mouseover)
										            .jssorb03 .av           (active)
										            .jssorb03 .av:hover     (active mouseover)
										            .jssorb03 .dn           (mousedown)
										            */
										            .jssorb03 {
										                position: absolute;
										            }
										            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
										                position: absolute;
										                /* size of bullet elment */
										                width: 21px;
										                height: 21px;
										                text-align: center;
										                line-height: 21px;
										                color: white;
										                font-size: 12px;
										                background: url("<?php echo base_url();?>bootstrap/img/b03.png") no-repeat;
										                overflow: hidden;
										                cursor: pointer;
										            }
										            .jssorb03 div { background-position: -5px -4px; }
										            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
										            .jssorb03 .av { background-position: -65px -4px; }
										            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
										        </style>
									        <!-- bullet navigator container -->
										        <div u="navigator" class="jssorb03" style="bottom: 6px; right: 6px;">
										            <!-- bullet navigator item prototype -->
										            <div u="prototype"><div u="numbertemplate"></div></div>
										        </div>
	        								<!--#endregion Bullet Navigator Skin End -->
	    								</div>
									<!-- Jssor Slider End -->
								</div>
								<p>
									<?php echo $value->m_summery; ?>
								</p>
								<?php }?>
							</article>
						</div>
					<!-- End Gallery -->
					<div class="col-sm-6 col-lg-4">
						<aside class="right-sidebar">
							<div class="widget">
								<h5 class="widgetheading"><?php echo tran('Videos'); ?></h5>
								<ul class="tags">
								<?php 
                                    $rows = $this->materail_model->get_where(array('m_category'=>'video_gallery'));
                                    foreach ($rows as $key => $value) {   
                                ?>
									<li><a onclick="get_videos(<?php echo $value->m_id; ?>)"><?php echo $value->m_name; ?></a></li>
								<?php }?>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>	
	<!-- End Content -->
<!-- End Video Gallery -->

<!-- javascript
    ================================================== -->
    
<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/jssor.slider.mini.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/jssor.slider.player.ytiframe.min.js"></script>
<script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: false,                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $DragOrientation: 3,                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $AutoPlayInterval: 4000,            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
                $ArrowKeyNavigation: true,          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false

                $BulletNavigatorOptions: {                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 1,                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 1,                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider4_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 640));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            //Scale slider immediately
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end

            //fetch and initialize youtube players
            $JssorPlayer$.$FetchPlayers(document.body);
        });
</script>

<!-- Start Ajax Script -->
    <script>
        function get_videos(id){   
            $('#get_videos').fadeOut(500,
                function(){
                $.ajax({
                url: "<?php echo base_url(); ?>index.php/pages/get_videos/"+id,
                type: 'POST',
                beforeSend:function(data){ // Are not working with dataType:'jsonp'
                $('#get_videos').fadeToggle(500).html("<center style='margin-top:200px'><img src='<?php echo base_url(); ?>bootstrap/img/loading.gif'></center>");
                },
                success: function (msg){
                    $('#get_videos').html(msg)
                }
            }); 
                })
                
            return false
        }
    </script>
<!-- End Ajax Script -->