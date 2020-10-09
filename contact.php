<?php
$page = 'contact';
include "header.php" ?>
		
		<!-- Start Page Title Area -->
		<div class="page-title-area bg-19">
			<div class="container">
				<!--<div class="page-title-content">-->
				<!--	<h2>Contact</h2>-->
				<!--	<ul>-->
				<!--		<li>-->
				<!--			<a href="index.html">-->
				<!--				Home -->
				<!--			</a>-->
				<!--		</li>-->

				<!--		<li class="active">Contact</li>-->
				<!--	</ul>-->
				<!--</div>-->
			</div>
		</div>
		<!-- End Page Title Area -->



        	<section class="client-area ptb-100 ptt">
			<div class="container">
				
				
				<div class="col-md-12">
				    <div class="row">
				    <div class="col-md-12 page-title">
				        <h2 class="text-center">CONTACT US</h2>
				        
				    </div>
				    
				    </div>
				</div>
			</div>
		</section>



		<!-- Start Contact Area -->
		<section class="contact-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="contact-wrap">
							<div class="contact-form">
								<div class="section-title">
									<h2>Drop Us A Message For Any Query</h2>
								</div>
								
								<form id="contactForm" action="sendmail.php">
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your Product" placeholder="Choosen Product Name">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<button type="submit" class="default-btn page-btn">
												Submit now
											</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="quick-contact">
							<h4>AVA International Pvt. Ltd.</h4>

							<ul>
								<li>
									<i class="bx bx-location-plus"></i>
									Location:
									<span>235, Sector 56, Phase-V, Industrial Estate, Kundli, Sonepat, Haryana- 131028</span>
								</li>

								<li>
									<i class="bx bx-phone-call"></i>
									Call Us:
									<a href="tel:+61-821-456">18001020241</a>
								</li>

								<li>
									<i class="bx bx-envelope"></i>
									Email Us:
									<a href="mailto:hello@contlib.com">
										Info@careview.in
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

		<!-- Start Map Area -->
		<div class="single-contact-map pb-100">
			<div class="container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13974.236728075504!2d77.13268524702147!3d28.881727032483813!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeb4276bbecadee64!2sAva%20International%20Pvt%20ltd!5e0!3m2!1sen!2sin!4v1594635004433!5m2!1sen!2sin" width="1200" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
		<!-- End Map Area -->
	
<?php include "footer.php" ?>