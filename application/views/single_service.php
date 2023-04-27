<main>

	<!-- breadcrumb-area -->
	<section class="breadcrumb-area breadcrumb-area-two pt-175">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb-content">
						<h2 class="title"><?php echo $service->title?></h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo base_url();?>home">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Service Details</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- breadcrumb-area-end -->

	<!-- services-details-area -->
	<div class="services-details-area pb-5 pt-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-6">
					<div class="services-details-img text-center">
						<img src="<?php echo base_url();?>uploads/<?php echo $service->image?>" alt="">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="services-details-content text-center">
						<p>Lorem ipsum dolor sit amet, sed nulla ante amet, elementum tincidunt arcu sed laoreet,
							natoque ac eget imperdiet. Ac scelerisque nibh dolores consectetuer, nulla aptent est pede.
							Scelerisque euismod varius mi, congue eget sed vestibulum, ornare cras sed nec.</p>
					</div>
					<div class="book-btn mt-5">
						<a href="#packs"><input type="button" value="Book Now" id="booking_service"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="services-details-shape">
			<img src="<?php echo base_url();?>assets/img/images/services_details_shape.png" alt="">
		</div>
	</div>

	<section id="packs">
		<div class="container">
			<div class="service-packs">
				<h4>Select Services</h4>
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="cart-items">
								<div class="our-best-project p-0 row">
									<div class="thumb col-lg-4 p-0">
										<img src="<?php echo base_url();?>assets/img/banner/baby-care.jpg" alt=""
											height="218px">
									</div>
									<div class="content mx-3 col-lg-7">
										<div class="service-head">
											<h6>Card image
												0-2 months (Japa maid is required)</h6>
										</div>
										<div class="service-price">
											<p><span class="service-pack-rate"> ₹8125</span> starting.</p>
											<p>Expert japa service for the safety and comfort of your little one <br>
												<span class="inclusive">+All services inclusive</span></p>
										</div>
										<div class="bookbtn text-end">
											<div class="modal fade" id="exampleModalToggle" aria-hidden="true"
												aria-labelledby="exampleModalToggleLabel" tabindex="-1">
												<div class="modal-dialog modal-dialog-centered">
													<div class="modal-content">
														<div class="modal-header">
															<h4>Work Shifts & Date</h4>
														</div>
														<div class="modal-body text-start">
															<div class="form1">
																<div class="row">
																	<div class="col-lg-12">
																		<h6 class="mb-1">Cleaning work</h6>
																		<span>Select 3 of 1</span>
																		<div class="row mb-3">
																			<div class="col-lg-4">
																				<button
																					class="option_select">Mopping</button>
																			</div>
																			<div class="col-lg-4">
																				<button
																					class="option_select">Washing</button>
																			</div>
																			<div class="col-lg-4">
																				<button
																					class="option_select">Cleaning</button>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<h6 class="mb-1">House work</h6>
																		<span>Select 3 of 1</span>
																		<div class="row mb-3">
																			<div class="col-lg-4">
																				<button
																					class="option_select">watering</button>
																			</div>
																			<div class="col-lg-4">
																				<button class="option_select">cloth
																					Washing</button>
																			</div>
																			<div class="col-lg-4">
																				<button class="option_select">Toilet
																					Cleaning</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<button class="mybtn2 mt-3 next_page">Next</button>
															<button
																class="mybtn2 mt-0 mb-3 previous_page">Previous</button>
															<form action="#" class="form2 d-none">
																<div class="row">
																	<div class="col-lg-12">
																		<div class="work-details">
																			<h5 class="pcolor">Work Shifts</h5>
																			<span>
																				<p>Number of shifts and working hours
																					per
																					day, for which you want the work to
																					be
																					done</p>
																			</span>
																			<span></span>
																		</div>
																	</div>
																	<div class="col-lg-6 mb-3">
																		<h6 class="pcolor">Shift 1</h6>
																		<div class="shift-time">
																			<label for="start_time"
																				class="ml-2">Start</label>
																			<input type="time" id="timePicker"
																				min="06:00" max="20:00" step="1800"
																				required>
																			<label for="end_time"
																				class="ml-2">End</label>
																			<input type="time" id="timePicker"
																				min="06:00" max="20:00" step="1800"
																				required>
																		</div>
																		<div class="col-lg-12 mt-3 shift2">
																			<h6 class="pcolor mb-0">Shift 2</h6>
																			<div class="shift-time">
																				<label for="start_time2"
																					class="ml-2">Start</label>
																				<input type="time" class="start_time2"
																					required>
																				<label for="end_time2"
																					class="ml-2">End</label>
																				<input type="time" class="end_time2"
																					required>
																				<button type="button"
																					class="addcartbtn removeshift mt-3">X</button>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-6 mt-3">
																		<h6 class="mb-1 pcolor">Start Date</h6>
																		<label for="date" class="ml-2">Select
																			Date</label>
																		<input type="date" name="date" id="date"
																			value="<?php echo date('Y-m-d');?>"
																			min="<?php echo date('Y-m-d');?>" required>
																	</div>
																	<div class="col-lg-12">
																		<button type="button"
																			class="mybtn2 mt-3 addshift">Add
																			Shift</button>
																	</div>

																	<div class="col-lg-12 mt-3">
																		<label for="note">Additional Note</label><br>
																		<textarea name="note" id="service_note"
																			cols="50" rows="5"></textarea>
																	</div>
																	<div class="col-lg-12 mt-5 spacebtwn">
																		<button type="submit" class="mybtn2">Add To
																			Cart</button>
																		<button type="button" class="exit mybtn2"
																			data-bs-dismiss="modal"
																			aria-label="Close">Close</button>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="more">
												<button class="addcartbtn">
													<a class="view-details" data-bs-toggle="modal"
														href="#exampleModalToggle" role="button">Add To Cart</a>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="cart-items">
								<div class="our-best-project p-0 row">
									<div class="thumb col-lg-4 p-0">
										<img src="<?php echo base_url();?>assets/img/banner/baby-care.jpg" alt=""
											height="218px">
									</div>
									<div class="content mx-3 col-lg-7">
										<div class="service-head">
											<h6>Card image
												0-2 months (Japa maid is required)</h6>
										</div>
										<div class="service-price">
											<p><span class="service-pack-rate"> ₹8125</span> starting.</p>
											<p>Expert japa service for the safety and comfort of your little one <br>
												<span class="inclusive">+All services inclusive</span></p>
										</div>
										<div class="bookbtn text-end">
											<div class="modal fade" id="exampleModalToggle1" aria-hidden="true"
												aria-labelledby="exampleModalToggleLabel" tabindex="-1">
												<div class="modal-dialog modal-dialog-centered">
													<div class="modal-content">
														<div class="modal-header">
															<h4>Work Shifts & Date</h4>
														</div>
														<div class="modal-body text-start">
															<div class="form1">
																<div class="row">
																	<div class="col-lg-12">
																		<h6 class="mb-1">Cleaning work</h6>
																		<span>Select 3 of 1</span>
																		<div class="row mb-3">
																			<div class="col-lg-4">
																				<button
																					class="option_select">Mopping</button>
																			</div>
																			<div class="col-lg-4">
																				<button
																					class="option_select">Washing</button>
																			</div>
																			<div class="col-lg-4">
																				<button
																					class="option_select">Cleaning</button>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<h6 class="mb-1">House work</h6>
																		<span>Select 3 of 1</span>
																		<div class="row mb-3">
																			<div class="col-lg-4">
																				<button
																					class="option_select">watering</button>
																			</div>
																			<div class="col-lg-4">
																				<button class="option_select">cloth
																					Washing</button>
																			</div>
																			<div class="col-lg-4">
																				<button class="option_select">Toilet
																					Cleaning</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<button class="mybtn2 mt-3 next_page">Next</button>
															<button
																class="mybtn2 mt-0 mb-3 previous_page">Previous</button>
															<form action="#" class="form2 d-none">
																<div class="row">
																	<div class="col-lg-12">
																		<div class="work-details">
																			<h5 class="pcolor">Work Shifts</h5>
																			<span>
																				<p>Number of shifts and working hours
																					per
																					day, for which you want the work to
																					be
																					done</p>
																			</span>
																			<span></span>
																		</div>
																	</div>
																	<div class="col-lg-6 mb-3">
																		<h6 class="pcolor">Shift 1</h6>
																		<div class="shift-time">
																			<label for="start_time"
																				class="ml-2">Start</label>
																			<input type="time" class="start_time"
																				required>
																			<label for="end_time"
																				class="ml-2">End</label>
																			<input type="time" class="end_time"
																				required>
																		</div>
																		<div class="col-lg-12 mt-3 shift2">
																			<h6 class="pcolor mb-0">Shift 2</h6>
																			<div class="shift-time">
																				<label for="start_time2"
																					class="ml-2">Start</label>
																				<input type="time" class="start_time2"
																					required>
																				<label for="end_time2"
																					class="ml-2">End</label>
																				<input type="time" class="end_time2"
																					required>
																				<button type="button"
																					class="addcartbtn removeshift mt-3">X</button>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-6 mt-3">
																		<h6 class="mb-1 pcolor">Start Date</h6>
																		<label for="date" class="ml-2">Select
																			Date</label>
																		<input type="date" name="date" id="date"
																			value="<?php echo date('Y-m-d');?>"
																			min="<?php echo date('Y-m-d');?>" required>
																	</div>
																	<div class="col-lg-12">
																		<button type="button"
																			class="mybtn2 mt-3 addshift">Add
																			Shift</button>
																	</div>

																	<div class="col-lg-12 mt-3">
																		<label for="note">Additional Note</label><br>
																		<textarea name="note" id="service_note"
																			cols="50" rows="5"></textarea>
																	</div>
																	<div class="col-lg-12 mt-5 spacebtwn">
																		<button type="submit" class="mybtn2">Add To
																			Cart</button>
																		<button type="button" class="exit mybtn2"
																			data-bs-dismiss="modal"
																			aria-label="Close">Close</button>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="more">
												<button class="addcartbtn">
													<a class="view-details" data-bs-toggle="modal"
														href="#exampleModalToggle1" role="button">Add To Cart</a>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row mt-5">
							<div class="cart-items">
								<div class="our-best-project p-0 row">
									<div class="thumb col-lg-4 p-0">
										<img src="<?php echo base_url();?>assets/img/banner/baby-care.jpg" alt=""
											height="218px">
									</div>
									<div class="content mx-3 col-lg-7">
										<div class="service-head">
											<h6>Card image
												0-2 months (Japa maid is required)</h6>
										</div>
										<div class="service-price">
											<p><span class="service-pack-rate"> ₹8125</span> starting.</p>
											<p>Expert japa service for the safety and comfort of your little one <br>
												<span class="inclusive">+All services inclusive</span></p>
										</div>
										<div class="bookbtn text-end">
											<div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
												aria-labelledby="exampleModalToggleLabel" tabindex="-1">
												<div class="modal-dialog modal-dialog-centered">
													<div class="modal-content">
														<div class="modal-header">
															<h4>Work Shifts & Date</h4>
														</div>
														<div class="modal-body text-start">
															<div class="form1">
																<div class="row">
																	<div class="col-lg-12">
																		<h6 class="mb-1">Cleaning work</h6>
																		<span>Select 3 of 1</span>
																		<div class="row mb-3">
																			<div class="col-lg-4">
																				<button
																					class="option_select">Mopping</button>
																			</div>
																			<div class="col-lg-4">
																				<button
																					class="option_select">Washing</button>
																			</div>
																			<div class="col-lg-4">
																				<button
																					class="option_select">Cleaning</button>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<h6 class="mb-1">House work</h6>
																		<span>Select 3 of 1</span>
																		<div class="row mb-3">
																			<div class="col-lg-4">
																				<button
																					class="option_select">watering</button>
																			</div>
																			<div class="col-lg-4">
																				<button class="option_select">cloth
																					Washing</button>
																			</div>
																			<div class="col-lg-4">
																				<button class="option_select">Toilet
																					Cleaning</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<button class="mybtn2 mt-3 next_page">Next</button>
															<button
																class="mybtn2 mt-0 mb-3 previous_page">Previous</button>
															<form action="#" class="form2 d-none">
																<div class="row">
																	<div class="col-lg-12">
																		<div class="work-details">
																			<h5 class="pcolor">Work Shifts</h5>
																			<span>
																				<p>Number of shifts and working hours
																					per
																					day, for which you want the work to
																					be
																					done</p>
																			</span>
																			<span></span>
																		</div>
																	</div>
																	<div class="col-lg-6 mb-3">
																		<h6 class="pcolor">Shift 1</h6>
																		<div class="shift-time">
																			<label for="start_time"
																				class="ml-2">Start</label>
																			<input type="time" class="start_time"
																				required>
																			<label for="end_time"
																				class="ml-2">End</label>
																			<input type="time" class="end_time"
																				required>
																		</div>
																		<div class="col-lg-12 mt-3 shift2">
																			<h6 class="pcolor mb-0">Shift 2</h6>
																			<div class="shift-time">
																				<label for="start_time2"
																					class="ml-2">Start</label>
																				<input type="time" class="start_time2"
																					required>
																				<label for="end_time2"
																					class="ml-2">End</label>
																				<input type="time" class="end_time2"
																					required>
																				<button type="button"
																					class="addcartbtn removeshift mt-3">X</button>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-6 mt-3">
																		<h6 class="mb-1 pcolor">Start Date</h6>
																		<label for="date" class="ml-2">Select
																			Date</label>
																		<input type="date" name="date" id="date"
																			value="<?php echo date('Y-m-d');?>"
																			min="<?php echo date('Y-m-d');?>" required>
																	</div>
																	<div class="col-lg-12">
																		<button type="button"
																			class="mybtn2 mt-3 addshift">Add
																			Shift</button>
																	</div>

																	<div class="col-lg-12 mt-3">
																		<label for="note">Additional Note</label><br>
																		<textarea name="note" id="service_note"
																			cols="50" rows="5"></textarea>
																	</div>
																	<div class="col-lg-12 mt-5 spacebtwn">
																		<button type="submit" class="mybtn2">Add To
																			Cart</button>
																		<button type="button" class="exit mybtn2"
																			data-bs-dismiss="modal"
																			aria-label="Close">Close</button>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="more">
												<button class="addcartbtn">
													<a class="view-details" data-bs-toggle="modal"
														href="#exampleModalToggle2" role="button">Add To Cart</a>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row mt-5">
							<div class="cart-items">
								<div class="our-best-project p-0 row">
									<div class="thumb col-lg-4 p-0">
										<img src="<?php echo base_url();?>assets/img/banner/baby-care.jpg" alt=""
											height="218px">
									</div>
									<div class="content mx-3 col-lg-7">
										<div class="service-head">
											<h6>Card image
												0-2 months (Japa maid is required)</h6>
										</div>
										<div class="service-price">
											<p><span class="service-pack-rate"> ₹8125</span> starting.</p>
											<p>Expert japa service for the safety and comfort of your little one <br>
												<span class="inclusive">+All services inclusive</span></p>
										</div>
										<div class="bookbtn text-end">
											<div class="modal fade" id="exampleModalToggle3" aria-hidden="true"
												aria-labelledby="exampleModalToggleLabel" tabindex="-1">
												<div class="modal-dialog modal-dialog-centered">
													<div class="modal-content">
														<div class="modal-header">
															<h4>Work Shifts & Date</h4>
														</div>
														<div class="modal-body text-start">
															<div class="form1">
																<div class="row">
																	<div class="col-lg-12">
																		<h6 class="mb-1">Cleaning work</h6>
																		<span>Select 3 of 1</span>
																		<div class="row mb-3">
																			<div class="col-lg-4">
																				<button
																					class="option_select">Mopping</button>
																			</div>
																			<div class="col-lg-4">
																				<button
																					class="option_select">Washing</button>
																			</div>
																			<div class="col-lg-4">
																				<button
																					class="option_select">Cleaning</button>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<h6 class="mb-1">House work</h6>
																		<span>Select 3 of 1</span>
																		<div class="row mb-3">
																			<div class="col-lg-4">
																				<button
																					class="option_select">watering</button>
																			</div>
																			<div class="col-lg-4">
																				<button class="option_select">cloth
																					Washing</button>
																			</div>
																			<div class="col-lg-4">
																				<button class="option_select">Toilet
																					Cleaning</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<button class="mybtn2 mt-3 next_page">Next</button>
															<button
																class="mybtn2 mt-0 mb-3 previous_page">Previous</button>
															<form action="#" class="form2 d-none">
																<div class="row">
																	<div class="col-lg-12">
																		<div class="work-details">
																			<h5 class="pcolor">Work Shifts</h5>
																			<span>
																				<p>Number of shifts and working hours
																					per
																					day, for which you want the work to
																					be
																					done</p>
																			</span>
																			<span></span>
																		</div>
																	</div>
																	<div class="col-lg-6 mb-3">
																		<h6 class="pcolor">Shift 1</h6>
																		<div class="shift-time">
																			<label for="start_time"
																				class="ml-2">Start</label>
																			<input type="time" class="start_time"
																				required>
																			<label for="end_time"
																				class="ml-2">End</label>
																			<input type="time" class="end_time"
																				required>
																		</div>
																		<div class="col-lg-12 mt-3 shift2">
																			<h6 class="pcolor mb-0">Shift 2</h6>
																			<div class="shift-time">
																				<label for="start_time2"
																					class="ml-2">Start</label>
																				<input type="time" class="start_time2"
																					required>
																				<label for="end_time2"
																					class="ml-2">End</label>
																				<input type="time" class="end_time2"
																					required>
																				<button type="button"
																					class="addcartbtn removeshift mt-3">X</button>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-6 mt-3">
																		<h6 class="mb-1 pcolor">Start Date</h6>
																		<label for="date" class="ml-2">Select
																			Date</label>
																		<input type="date" name="date" id="date"
																			value="<?php echo date('Y-m-d');?>"
																			min="<?php echo date('Y-m-d');?>" required>
																	</div>
																	<div class="col-lg-12">
																		<button type="button"
																			class="mybtn2 mt-3 addshift">Add
																			Shift</button>
																	</div>

																	<div class="col-lg-12 mt-3">
																		<label for="note">Additional Note</label><br>
																		<textarea name="note" id="service_note"
																			cols="50" rows="5"></textarea>
																	</div>
																	<div class="col-lg-12 mt-5 spacebtwn">
																		<button type="submit" class="mybtn2">Add To
																			Cart</button>
																		<button type="button" class="exit mybtn2"
																			data-bs-dismiss="modal"
																			aria-label="Close">Close</button>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="more">
												<button class="addcartbtn">
													<a class="view-details" data-bs-toggle="modal"
														href="#exampleModalToggle3" role="button">Add To Cart</a>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="trained pt-120 pb-5">
		<ul class="trained_items">
			<li class="trained_items_single">
				<span><img src="<?php echo base_url();?>assets/img/icon/badge.png" alt=""
						width="50px"></span><span>Trained &
					Certified</span>
			</li>
			<li class="trained_items_single">
				<span><img src="<?php echo base_url();?>assets/img/icon/police-badge.png" alt=""
						width="50px"></span><span>Police
					Verified</span>
			</li>
			<li class="trained_items_single">
				<span><img src="<?php echo base_url();?>assets/img/icon/vaccine.png" alt=""
						width="50px"></span><span>Covid
					Ready</span>
			</li>
			<li class="trained_items_single">
				<span><img src="<?php echo base_url();?>assets/img/icon/reliability.png" alt=""
						width="50px"></span><span>Punctual &
					Reliable</span>
			</li>
		</ul>
	</div>
	<!-- services-details-area-end -->

	<!-- company-area -->
	<section class="company-area mt-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-7 col-lg-9">
					<div class="section-title white-title text-center mb-65">
						<span class="sub-title">Our Company</span>
						<h2 class="title"><?php echo $service->detail?></h2>
						<p><?php echo $service->title?></p>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="company-img">
						<img src="<?php echo base_url();?>uploads/<?php echo $service->image?>" alt="">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="company-content">
						<h2 class="title">All Your Questions Are Here</h2>
						<div class="company-list mb-4">
							<div class="accordion faq-wrap" id="accordionExample">
								<?php foreach($faq as $faq){ ?>
								<div class="accordion-item">
									<h2 class="accordion-header" id="heading<?php echo $faq->id?>">
										<button class="accordion-button collapsed" type="button"
											data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $faq->id?>"
											aria-expanded="false" aria-controls="collapse<?php echo $faq->id?>">
											<?php echo $faq->question?>
										</button>
									</h2>
									<div id="collapse<?php echo $faq->id?>" class="accordion-collapse collapse"
										aria-labelledby="heading<?php echo $faq->id?>"
										data-bs-parent="#accordionExample" style="">
										<div class="accordion-body">
											<p><?php echo $faq->answer?></p>
										</div>
									</div>
								</div>
								<?php }?>
							</div>
						</div>
						<a href="about-me.html" class="btn">Discover More <span></span></a>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- company-area-end -->

	<!-- counter-area -->
	<section class="counter-area-four pt-100 pb-120">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="counter-item-wrap-four">
						<ul class="list-wrap">
							<li>
								<div class="counter-item-four">
									<h2 class="count"><span class="odometer odometer-auto-theme" data-count="15">
											<div class="odometer-inside"><span class="odometer-digit"><span
														class="odometer-digit-spacer">8</span><span
														class="odometer-digit-inner"><span class="odometer-ribbon"><span
																class="odometer-ribbon-inner"><span
																	class="odometer-value">1</span></span></span></span></span><span
													class="odometer-digit"><span
														class="odometer-digit-spacer">8</span><span
														class="odometer-digit-inner"><span class="odometer-ribbon"><span
																class="odometer-ribbon-inner"><span
																	class="odometer-value">5</span></span></span></span></span>
											</div>
										</span>K+</h2>
									<p>Entries in <span>Accunting</span></p>
								</div>
							</li>
							<li>
								<div class="counter-item-four">
									<h2 class="count"><span class="odometer odometer-auto-theme" data-count="120">
											<div class="odometer-inside"><span class="odometer-digit"><span
														class="odometer-digit-spacer">8</span><span
														class="odometer-digit-inner"><span class="odometer-ribbon"><span
																class="odometer-ribbon-inner"><span
																	class="odometer-value">1</span></span></span></span></span><span
													class="odometer-digit"><span
														class="odometer-digit-spacer">8</span><span
														class="odometer-digit-inner"><span class="odometer-ribbon"><span
																class="odometer-ribbon-inner"><span
																	class="odometer-value">2</span></span></span></span></span><span
													class="odometer-digit"><span
														class="odometer-digit-spacer">8</span><span
														class="odometer-digit-inner"><span class="odometer-ribbon"><span
																class="odometer-ribbon-inner"><span
																	class="odometer-value">0</span></span></span></span></span>
											</div>
										</span>+</h2>
									<p>International <span>Programs</span></p>
								</div>
							</li>
							<li>
								<div class="counter-item-four">
									<h2 class="count"><span class="odometer odometer-auto-theme" data-count="46">
											<div class="odometer-inside"><span class="odometer-digit"><span
														class="odometer-digit-spacer">8</span><span
														class="odometer-digit-inner"><span class="odometer-ribbon"><span
																class="odometer-ribbon-inner"><span
																	class="odometer-value">4</span></span></span></span></span><span
													class="odometer-digit"><span
														class="odometer-digit-spacer">8</span><span
														class="odometer-digit-inner"><span class="odometer-ribbon"><span
																class="odometer-ribbon-inner"><span
																	class="odometer-value">6</span></span></span></span></span>
											</div>
										</span>+</h2>
									<p>Countries in<span>The World</span></p>
								</div>
							</li>
							<li>
								<div class="counter-item-four">
									<h2 class="count"><span class="odometer odometer-auto-theme" data-count="17">
											<div class="odometer-inside"><span class="odometer-digit"><span
														class="odometer-digit-spacer">8</span><span
														class="odometer-digit-inner"><span class="odometer-ribbon"><span
																class="odometer-ribbon-inner"><span
																	class="odometer-value">1</span></span></span></span></span><span
													class="odometer-digit"><span
														class="odometer-digit-spacer">8</span><span
														class="odometer-digit-inner"><span class="odometer-ribbon"><span
																class="odometer-ribbon-inner"><span
																	class="odometer-value">7</span></span></span></span></span>
											</div>
										</span>+</h2>
									<p>Awards <span>Programs</span></p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- counter-area-two -->

</main>
