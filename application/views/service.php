<section class="breadcrumb-area pt-175">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb-content">
					<h2 class="title">Services</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/sakhi/home">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Services</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="breadcrumb-shape-wrap">
		<img src="/sakhi/assets/img/images/breadcrumb_shape01.png" alt="">
		<img src="/sakhi/assets/img/images/breadcrumb_shape02.png" alt="">
	</div>
</section>


<section class="inner-project-area pt-0">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6">
				<div class="section-title text-center mb-65">
					<h2 class="title">Our Services</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's standard.</p>
				</div>
			</div>
		</div>
		<div class="inner-project-item-wrap">
			<div class="row justify-content-center">
				<?php foreach($service as $service){?>
				<div class="col-lg-4 col-md-6">
					<div class="inner-project-item">
						<div class="inner-project-thumb">
							<a href="<?php echo base_url();?>single_service"><img
									src="<?php echo base_url();?>uploads/<?php echo $service->image?>" alt=""></a>
						</div>
						<div class="inner-project-content">
							<h3 class="title"><a href="<?php echo base_url();?>single_service/<?php echo $service->id?>"><?php echo $service->title?></a>
							</h3>
							<p><?php echo $service->detail?></p>
						</div>
					</div>
				</div>
				<?php }?>
				<!-- <div class="col-lg-4 col-md-6">
					<div class="inner-project-item">
						<div class="inner-project-thumb">
							<a href="#"><img src="<?php echo base_url();?>assets/img/banner/all.jpg" alt=""></a>
						</div>
						<div class="inner-project-content">
							<h3 class="title"><a href="#">All-Rounders</a></h3>
							<p>Lorem Ipsum is simply</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="inner-project-item">
						<div class="inner-project-thumb">
							<a href="#"><img src="<?php echo base_url();?>assets/img/banner/chef.jpg" alt=""></a>
						</div>
						<div class="inner-project-content">
							<h3 class="title"><a href="#">Chef/Cook</a></h3>
							<p>Lorem Ipsum is simply</p>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-6">
					<div class="inner-project-item">
						<div class="inner-project-thumb">
							<a href="#"><img src="<?php echo base_url();?>assets/img/banner/domistic.jpg" alt=""></a>
						</div>
						<div class="inner-project-content">
							<h3 class="title"><a href="#">Domestic</a></h3>
							<p>Lorem Ipsum is simply</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="inner-project-item ">
						<div class="inner-project-thumb">
							<a href="#"><img src="<?php echo base_url();?>assets/img/banner/beauty.jpg" alt=""
									height="530px"></a>
						</div>
						<div class="inner-project-content">
							<h3 class="title"><a href="#">Beautician</a></h3>
							<p>Lorem Ipsum is simply</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="inner-project-item">
						<div class="inner-project-thumb">
							<a href="#"><img src="" alt=""></a>
						</div>
						<div class="inner-project-content">
							<h3 class="title"><a href="#">Sakhi</a></h3>
							<p>Lorem Ipsum is simply</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="inner-project-item">
						<div class="inner-project-thumb">
							<a href="#"><img src="<?php echo base_url();?>assets/img/banner/elder.jpg" alt=""></a>
						</div>
						<div class="inner-project-content">
							<h3 class="title"><a href="#">Elderly Care</a></h3>
							<p>Lorem Ipsum is simply</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="inner-project-item">
						<div class="inner-project-thumb">
							<a href="#"><img src="<?php echo base_url();?>assets/img/banner/patientcare.jpg" alt=""></a>
						</div>
						<div class="inner-project-content">
							<h3 class="title"><a href="#">Patient Care</a></h3>
							<p>Lorem Ipsum is simply</p>
						</div>
					</div>
				</div> -->
			</div>
			<!-- <div class="more-btn text-center mt-45">
				<a href="about-me.html" class="btn">Load More <span></span></a>
			</div> -->
		</div>
	</div>
</section>
