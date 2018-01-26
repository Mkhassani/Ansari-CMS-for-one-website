		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->        
			<div class="container-fluid">
								<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						
							
						<ul class="breadcrumb" style="margin-top:20px">
							<li>
								<i class="icon-home"></i>
								<a href="<?php echo site_url('admin');?>"><?php echo tran('Home');?></a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#"><?php echo $this->session->userdata('cl_page_title'); ?></a>
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#"><?php echo $fu_page_title;?></a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->