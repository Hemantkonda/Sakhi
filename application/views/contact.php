<!-- main-area -->
<main>

	<!-- breadcrumb-area -->
	<section class="breadcrumb-area breadcrumb-area-four pt-175 pb-160">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb-content">
						<h2 class="title">Contact Us</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo base_url();?>home">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Contact</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="breadcrumb-shape-wrap-three">
			<img src="<?php echo base_url();?>assets/img/images/breadcrumb_shape04.png" alt="" class="wow zoomIn"
				data-wow-delay=".2s">
			<img src="<?php echo base_url();?>assets/img/images/breadcrumb_shape05.png" alt="" class="wow zoomIn"
				data-wow-delay=".2s">
			<img src="<?php echo base_url();?>assets/img/images/breadcrumb_shape06.png" alt="" class="wow zoomIn"
				data-wow-delay=".2s">
		</div>
	</section>
	<!-- breadcrumb-area-end -->

	<!-- contact-area -->
	<section class="inner-contact-area">
		<div class="container">
			<div class="inner-contact-wrap">
				<div class="row">
					<div class="col-xl-9 col-lg-10">
						<div class="section-title title-style-two mb-50">
							<h2 class="title">Have a <span>Cool Project?</span> Get in touch!</h2>
						</div>
						<div class="inner-contact-form-wrap">
							<form action="#">
								<div class="form-grp">
									<label for="name"><i class="fas fa-user"></i></label>
									<input type="text" id="name" placeholder="Name">
								</div>
								<div class="form-grp">
									<label for="phone"><i class="fas fa-phone"></i></label>
									<input type="text" id="phone" placeholder="Phone">
								</div>
								<div class="form-grp">
									<label for="email"><i class="fas fa-envelope"></i></label>
									<input type="email" id="email" placeholder="Email Address">
								</div>
								<div class="form-grp">
									<label for="subject"><i class="fas fa-book-alt"></i></label>
									<input type="text" id="subject" placeholder="Subject">
								</div>
								<div class="form-grp">
									<label for="comment"><i class="fas fa-user-edit"></i></label>
									<textarea name="comment" id="comment"
										placeholder="How can we help you? Feel free to get in touch!"></textarea>
								</div>
								<button type="submit" class="btn">Send Message <span></span></button>
							</form>
						</div>
						<div id="contact-map">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.2656739680206!2d73.8522836143687!3d18.51689267412076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c06fe865fae9%3A0xa485106d4c3f091d!2sVinayak%20Tower%2C%20NC%20Kelkar%20Road%2C%20Narayan%20Peth%2C%20Pune%2C%20Maharashtra%20411002!5e0!3m2!1sen!2sin!4v1678730729277!5m2!1sen!2sin"
								allowfullscreen loading="lazy"></iframe>
							<!-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.2656739680206!2d73.8522836143687!3d18.51689267412076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c06fe865fae9%3A0xa485106d4c3f091d!2sVinayak%20Tower%2C%20NC%20Kelkar%20Road%2C%20Narayan%20Peth%2C%20Pune%2C%20Maharashtra%20411002!5e0!3m2!1sen!2sin!4v1678730729277!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe> -->
						</div>
						<div class="inner-contact-info">
							<ul class="list-wrap">
								<li>
									<div class="contact-info-item">
										<div class="icon">
											<img src="<?php echo base_url();?>assets/img/icon/loction_icon03.png"
												alt="">
										</div>
										<div class="content">
											<h6 class="title">Address</h6>
											<p>14, Vinayak Tower,
												Near Saraswati Granth Bhandar, Appa
												Balwant Chowk, NC Kelkar Road, Pune 411002</p>
										</div>
									</div>
								</li>
								<li>
									<div class="contact-info-item">
										<div class="icon">
											<img src="<?php echo base_url();?>assets/img/icon/mail_icon03.png" alt="">
										</div>
										<div class="content">
											<h6 class="title">Email</h6>
											<a
												href="mailto:<?php echo $profile->email?>"><?php echo $profile->email?></a>
										</div>
									</div>
								</li>
								<li>
									<div class="contact-info-item">
										<div class="icon">
											<img src="<?php echo base_url();?>assets/img/icon/phone_icon03.png" alt="">
										</div>
										<div class="content">
											<h6 class="title">Phone</h6>
											<a href="tel:<?php echo $profile->phone?>"><?php echo $profile->phone?></a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- contact-area-end -->

</main>
<!-- main-area-end -->


<!-- footer-area -->
<footer>
	<div class="footer-area-two footer-area-three">
		<div class="container">
			<div class="footer-top-two">
				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-8">
						<div class="footer-content-two text-center">
							<div class="logo">
								<a href="<?php echo base_url();?>home"><img
										src="<?php echo base_url();?>assets/img/sakhi.png" alt=""></a>
							</div>
							<p>Sakhi helps
								customers acquire the best household services, baby care
								services, elderly care services, beauty services, patient care
								services, and many more. With the help of Sakhi, you can get
								your helpers at an affordable price in your city easily.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom-two">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="copyright-text">
							<p>© 2023, b-digitally Creative Agency.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="footer-social-two">
							<ul class="list-wrap">
								<li class="title">Follow us</li>
								<li><a href="<?php echo $profile->fb?>"><img src="<?php echo base_url();?>assets/img/icon/footer_icon01.png"
											alt=""></a></li>
								<li><a href="<?php echo $profile->insta?>"><img src="<?php echo base_url();?>assets/img/icon/footer_icon02.png"
											alt=""></a></li>
								<li><a href="#"><img src="<?php echo base_url();?>assets/img/icon/footer_icon03.png"
											alt=""></a></li>
								<li><a href="<?php echo $profile->twitter?>"><img src="<?php echo base_url();?>assets/img/icon/footer_icon04.png"
											alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer-area-end -->


<!-- JS here -->
<script src="<?php echo base_url();?>assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url();?>assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.odometer.min.js"></script>
<script src="<?php echo base_url();?>assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.appear.js"></script>
<script src="<?php echo base_url();?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url();?>assets/js/ajax-form.js"></script>
<script src="<?php echo base_url();?>assets/js/parallax.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.parallaxScroll.min.js"></script>
<script src="<?php echo base_url();?>assets/js/tween-max.js"></script>
<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>

</html>
