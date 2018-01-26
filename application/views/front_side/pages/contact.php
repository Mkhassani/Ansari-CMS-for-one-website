<!-- Start Contact -->
	<!-- Start Sitemap -->
		<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="<?php echo base_url('pages/index'); ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li class="active"><?php echo tran('Contact'); ?></li>
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
						<h4><?php echo tran('Get in touch with us by filling contact form below'); ?></h4>
						<form id="contactform" action="contact/contact.php" method="post" class="validateform" name="send-contact">
							<div id="sendmessage">
								<?php echo tran('Your message has been sent. Thank you!'); ?>
							</div>
							<div class="row">
								<div class="col-lg-4 field">
									<input type="text" name="name" placeholder="* <?php echo tran('Enter your full name'); ?>" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
									<div class="validation">
									</div>
								</div>
								<div class="col-lg-4 field">
									<input type="text" name="email" placeholder="* <?php echo tran('Enter your email address'); ?>" data-rule="email" data-msg="Please enter a valid email" />
									<div class="validation">
									</div>
								</div>
								<div class="col-lg-4 field">
									<input type="text" name="subject" placeholder="<?php echo tran('Enter your subject'); ?>" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
									<div class="validation">
									</div>
								</div>
								<div class="col-lg-12 margintop10 field">
									<textarea rows="12" name="message" class="input-block-level" placeholder="* <?php echo tran('Your message here...'); ?>" data-rule="required" data-msg="Please write something"></textarea>
									<div class="validation">
									</div>
									<p>
										<button class="btn btn-theme margintop10 pull-left" type="submit"><?php echo tran('Submit message'); ?></button>
										<span class="pull-right margintop20">* <?php echo tran('Please fill all required form field, thanks!'); ?></span>
									</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Start Google map -->
				<div class="map">
					<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;
					q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;
					sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;
					output=embed">
					</iframe>
				</div>
			<!-- End Google map -->
		</section>
	<!-- End Content -->
<!-- End Contact -->