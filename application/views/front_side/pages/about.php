<!-- Start About us -->
	<!-- Start Sitemap -->
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="<?php echo base_url('index.php/pages/index'); ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active"><?php echo tran('About Us'); ?></li>
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
					<!-- Start about div -->
						<div id="get_abouts" class="desc col-sm-6 col-lg-8">
							<article>
								<div class="post-image">
									<div class="post-heading">
										<?php
											 $this->db->limit(1);
                                            $this->db->order_by('m_id', 'desc');
											if ($this->uri->segment(3)!='') {
												$rows = $this->materail_model->get_where(array('m_category'=>'about','m_id'=>$this->uri->segment(3)));
												
											}else{
												 $this->db->limit(1);
												$rows = $this->materail_model->get_where_limit(array('m_category'=>'about'),1);
											}
                                           
                                            
                                            foreach ($rows as $key => $value) {
                                            	
                                                if (is_dir("image/materail/$value->m_id/thumb")) {  
		                                            if($target_dir = opendir("image/materail/$value->m_id/thumb")){
		                                                while ($file = readdir($target_dir)) {
		                                                    if($file != "." && $file != ".."){  
                                        ?>
										<h3><?php echo $value->m_name; ?></h3>
									</div>
									<img src="<?php echo base_url();?>image/materail/<?php echo $value->m_id; ?>/<?php echo $file; ?>" alt="" />
									<?php }}}}else{ ?>
                                        <div>
                                            <img u="image" src="<?php echo base_url();?>bootstrap/img/alila/02.jpg" />
                                        </div>
                                    <?php
                                        } }
                                    ?>
								</div>
								<p><?php echo $value->m_desc; ?></p>
							</article>
						</div>
					<!-- End about div -->
					<div class="col-sm-6 col-lg-4">
						<aside class="right-sidebar">
							<div class="widget">
								<h5 class="widgetheading"><?php echo tran('Know more about us'); ?></h5>
								<ul class="recent">
									<?php 
	                                    $rows = $this->materail_model->get_where(array('m_category'=>'about'));
	                                    foreach ($rows as $key => $value) {
	                                    	if (is_dir("image/materail/$value->m_id/thumb/")) {  
		                                            if($target_dir = opendir("image/materail/$value->m_id/thumb")){
		                                                while ($file = readdir($target_dir)) {
		                                                    if($file != "." && $file != ".."){    
	                                ?>
									<li>
										<img width="72" height="64"src="<?php echo base_url();?>image/materail/<?php echo $value->m_id; ?>/thumb/<?php echo $file; ?>" class="pull-right" alt="" />
										<h6 style="padding-top:25px; padding-bottom: 25px; border-bottom: 1px dotted #e6e6e6;
										background-color:#bbb;"><a onclick="get_abouts(<?php echo $value->m_id; ?>)"><?php echo $value->m_name; ?></a></h6>
									</li>	
									<?php }}}}} ?>
									
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>
	<!-- End Content -->
<!-- End About us -->

<!-- javascript
    ================================================== -->

<!-- Start Ajax Script -->
    <script>
        function get_abouts(id){   
            $('#get_abouts').fadeOut(500,
                function(){
                $.ajax({
                url: "<?php echo base_url(); ?>index.php/pages/get_abouts/"+id,
                type: 'POST',
                beforeSend:function(data){ // Are not working with dataType:'jsonp'
                $('#get_abouts').fadeToggle(500).html("<center style='margin-top:200px'><img src='<?php echo base_url(); ?>bootstrap/img/loading.gif'></center>");
                },
                success: function (msg){
                    $('#get_abouts').html(msg)
                }
            }); 
                })
                
            return false
        }
    </script>
<!-- End Ajax Script -->