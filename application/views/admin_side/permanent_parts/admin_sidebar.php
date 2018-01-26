<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->        
			<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="<?php echo tran('Search');?>..." />
							<input type="button" class="submit" value=" " />
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start <?php echo ($this->uri->segment(2)=='index') ? 'active' : '' ;?>">
					<a href="<?php echo site_url('materail/manage'); ?>">
					<i class="icon-home"></i> 
					<span class="title"><?php echo tran('Dashboard');?></span>
					</a>
				</li>

				<li class="start <?php echo ($this->uri->segment(1)=='user') ? 'active' : '' ;?>">
					<a href="<?php echo site_url('user/add'); ?>">
					<i class="icon-user"></i> 
					<span class="title"><?php echo tran('Users');?></span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo site_url('user/add');?>">
							<?php echo tran('Add New');?></a>
						</li>
					    <li >
							<a href="<?php echo  site_url('user/manage');?>">
							<?php echo tran('Manage');?></a>
						</li>
					</ul>
				</li>

				<li class="start <?php echo ($this->uri->segment(1)=='materail') ? 'active' : '' ;?>">
					<a href="<?php echo site_url('materail/manage'); ?>">
					<i class="icon-bookmark-empty"></i> 
					<span class="title"><?php echo tran('Products');?></span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo site_url('materail/add');?>">
							<?php echo tran('Add New');?></a>
						</li>
					    <li >
							<a href="<?php echo  site_url('materail/manage');?>">
							<?php echo tran('Manage');?></a>
						</li>
					</ul>
				</li>
				<li class="start <?php echo ($this->uri->segment(1)=='slideshow') ? 'active' : '' ;?>">
					<a href="javascript:;">
					<i class="icon-bookmark-empty"></i> 
					<span class="title"><?php echo tran('Slideshow');?></span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
					    <li >
							<a href="<?php echo site_url('slideshow'); ?>">
							<?php echo tran('Manage');?></a>
						</li>
					</ul>
				</li>
				<li class="start <?php echo ($this->uri->segment(1)=='about') ? 'active' : '' ;?>">
					<a href="javascript:;">
					<i class="icon-bookmark-empty"></i> 
					<span class="title"><?php echo tran('About US');?></span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo site_url('about/add');?>">
							<?php echo tran('Add New');?></a>
						</li>
					    <li >
							<a href="<?php echo site_url('about'); ?>">
							<?php echo tran('Manage');?></a>
						</li>
					</ul>
				</li>	
				<li class="start <?php echo ($this->uri->segment(1)=='award') ? 'active' : '' ;?>">
					<a href="javascript:;">
					<i class="icon-bookmark-empty"></i> 
					<span class="title"><?php echo tran('Award');?></span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo site_url('award/add');?>">
							<?php echo tran('Add New');?></a>
						</li>
					    <li >
							<a href="<?php echo site_url('award'); ?>">
							<?php echo tran('Manage');?></a>
						</li>
					</ul>
				</li>

				<li class="start <?php echo ($this->uri->segment(1)=='announcement') ? 'active' : '' ;?>">
					<a href="javascript:;">
					<i class="icon-bookmark-empty"></i> 
					<span class="title"><?php echo tran('Announcement');?></span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo site_url('announcement/add');?>">
							<?php echo tran('Add New');?></a>
						</li>
					    <li >
							<a href="<?php echo site_url('announcement'); ?>">
							<?php echo tran('Manage');?></a>
						</li>
					</ul>
				</li>
				<li class="start <?php echo ($this->uri->segment(1)=='photo_gallery') ? 'active' : '' ;?>">
					<a href="javascript:;">
					<i class="icon-bookmark-empty"></i> 
					<span class="title"><?php echo tran('Photo Gallery');?></span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo site_url('photo_gallery/add');?>">
							<?php echo tran('Add New');?></a>
						</li>
					    <li >
							<a href="<?php echo site_url('photo_gallery'); ?>">
							<?php echo tran('Manage');?></a>
						</li>
					</ul>
				</li>
				<li class="start <?php echo ($this->uri->segment(1)=='video_gallery') ? 'active' : '' ;?>">
					<a href="javascript:;">
					<i class="icon-bookmark-empty"></i> 
					<span class="title"><?php echo tran('Video Gallery');?></span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo site_url('video_gallery/add');?>">
							<?php echo tran('Add New');?></a>
						</li>
					    <li >
							<a href="<?php echo site_url('video_gallery'); ?>">
							<?php echo tran('Manage');?></a>
						</li>
					</ul>
				</li>	
				<li class="start <?php echo ($this->uri->segment(1)=='setting') ? 'active' : '' ;?>">
					<a href="javascript:;">
					<i class="icon-cogs"></i> 
					<span class="title"><?php echo tran('Setting');?></span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						
					    <li >
							<a href="<?php echo site_url('setting'); ?>">
							<?php echo tran('Website Settings');?></a>
						</li>
					</ul>
				</li>		
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>


		