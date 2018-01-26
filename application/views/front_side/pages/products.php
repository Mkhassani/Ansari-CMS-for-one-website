
<style>
.share-button { margin: auto; top: 0; left: 0; bottom: 0; right: 0; }
</style>
<!-- Start Products -->
	<!-- Start Sitemap -->
		<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="<?php echo base_url('pages/index'); ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li class="active"><?php echo tran('Products'); ?></li>
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
					<div class="col-lg-12">
						<ul id="filter" class="portfolio-categ filter">
							<li id="filter" class="all active"><a href="#"><?php echo tran('All'); ?></a></li>
							<li id="filter" class="p1"><a href="#" title=""><?php echo tran('First Product');?></a></li>
							<li id="filter" class="p2"><a href="#" title=""><?php echo tran('Second Product');?></a></li>
							<li id="filter" class="p3"><a href="#" title=""><?php echo tran('Third Product');?></a></li>
						</ul>

						<div class="divider clearfix"></div>
						<div class="row">
							<section id="projects">
							                                  <script type="text/javascript">
    $(function(){
      $('.share-button').share({
        title: '<?php echo $title;?>',
        image: 'http://pishawaran-herat.org/gallery/incontent/<?php echo $image_name ?>',
		description : '<?php echo $info; ?>',
        author:'www.broozsoft.com',
        app_id: '1488859514702414',
        background: 'rgba(255,255,255,.5)',
        color: '#3B2B45'
      })
    });
</script>
  <div class='share-button'></div>
								<ul id="thumbs" class="portfolio">
									<!-- Start Item Project and Filter Name -->
										<?php
											$rows=$this->materail_model->get_where(array('m_category'=>'product'));																		
											foreach ($rows as $key => $values) {														
												if(is_dir("image/materail/".$values->m_id."/thumb")){
                                   				   if ($handle = opendir("image/materail/".$values->m_id."/thumb")) { 
                                   				   	while ($file = readdir($handle)) {
                                             		 	if($file != "." && $file != ".."){

                                     	?>
										
										<li class="item-thumbs col-lg-3" data-id="id-0" data-type="<?php echo $values->m_type;?>">
											<!-- Fancybox - Gallery Enabled - Title - Full Image -->
											<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $values->m_name;?>"
												 href="<?php echo base_url();?>image/materail/<?php echo $values->m_id."/".$file;?>">
												<span class="overlay-img"><?php echo $values->m_name;?></span>
												<span class="overlay-img-thumb font-icon-plus"></span>
											</a>
											<!-- Thumb Image and Description -->
											<img src="<?php echo base_url();?>image/materail/<?php echo $values->m_id."/thumb/".$file;?>" alt="<?php echo $values->m_summery;?>" />
											 
										</li>
										

								
										<?php } }}
										closedir($handle);
										 }}?>
									<!-- End Item Project and Filter Name -->
								</ul>
							</section>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End Content -->
<!-- End Products -->