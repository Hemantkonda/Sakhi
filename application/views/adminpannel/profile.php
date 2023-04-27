<div class="main-content" style="min-height: 548px;">
	<section class="section">
		<div class="section-body">
			<div class="row mt-sm-4">
				<div class="col-lg-12 col-md-12">
					<form method="post" action="<?php echo base_url();?>admin/profileadded" enctype="multipart/form-data" class="needs-validation">
						<div class="card-header">
							<h4>Edit Profile</h4>
						</div>
						<div class="card-body">
							<div class="row">
								<input type="text" name="proid" id="proid"
									value='<?= isset($profile->id) ? $profile->id :'';?>' hidden>
								<div class="form-group col-md-6 col-12">
									<label>Website Name</label>
									<input type="text" class="form-control" name="web_name"
										value="<?= isset($profile->website_name) ? $profile->website_name : '';?>">
									<div class="invalid-feedback">
										Please fill in the Website Name
									</div>
								</div>
								<div class="form-group col-md-6 col-12">
									<label>Address</label>
									<input type="text" class="form-control" name="address"
									value="<?= isset($profile->address) ? $profile->address : '' ;?>">
									<div class="invalid-feedback">
										Please fill in the Address
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6 col-12">
									<label>Email</label>
									<input type="email" class="form-control" name="email"
										value="<?= isset($profile->email) ? $profile->email : '' ;?>">
									<div class="invalid-feedback">
										Please fill in the email
									</div>
								</div>
								<div class="form-group col-md-6 col-12">
									<label>Phone</label>
									<input type="tel" class="form-control" name="phone"
										value="<?= isset($profile->phone) ? $profile->phone : '' ;?>">
								</div>
								<div class="form-group col-md-4 col-12">
									<label>Instagram</label>
									<input type="text" class="form-control" name="insta" placeholder="Instagram Link"
										value="<?= isset($profile->insta) ? $profile->insta : '' ;?>">
								</div>
								<div class="form-group col-md-4 col-12">
									<label>Facebook</label>
									<input type="text" class="form-control" name="fb" placeholder="Facebook Link"
										value="<?= isset($profile->fb) ? $profile->fb : '' ;?>">
								</div>
								<div class="form-group col-md-4 col-12">
									<label>Twitter</label>
									<input type="text" class="form-control" name="twitter" placeholder="Twitter Link"
										value="<?= isset($profile->twitter) ? $profile->twitter : '' ;?>">
								</div>
								<div class="form-group col-md-6 col-12">
									<label>Change Logo</label>
									<input type="file" class="form-control" name="logo">
								</div>
								<div class="form-group col-md-6 col-12">
									<label>Footer Logo</label>
									<input type="file" class="form-control" name="footerlogo">
								</div>
							</div>
						</div>
						<div class="card-footer text-right">
							<button class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<div class="settingSidebar">
		<a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
		</a>
		<div class="settingSidebar-body ps-container ps-theme-default" style="overflow: hidden; outline: none;"
			tabindex="2">
			<div class=" fade show active">
				<div class="setting-panel-header">Setting Panel
				</div>
				<div class="p-15 border-bottom">
					<h6 class="font-medium m-b-10">Select Layout</h6>
					<div class="selectgroup layout-color w-50">
						<label class="selectgroup-item">
							<input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout"
								checked="">
							<span class="selectgroup-button">Light</span>
						</label>
						<label class="selectgroup-item">
							<input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
							<span class="selectgroup-button">Dark</span>
						</label>
					</div>
				</div>
				<div class="p-15 border-bottom">
					<h6 class="font-medium m-b-10">Sidebar Color</h6>
					<div class="selectgroup selectgroup-pills sidebar-color">
						<label class="selectgroup-item">
							<input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
							<span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
								data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
						</label>
						<label class="selectgroup-item">
							<input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar"
								checked="">
							<span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
								data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
						</label>
					</div>
				</div>
				<div class="p-15 border-bottom">
					<h6 class="font-medium m-b-10">Color Theme</h6>
					<div class="theme-setting-options">
						<ul class="choose-theme list-unstyled mb-0">
							<li title="white" class="active">
								<div class="white"></div>
							</li>
							<li title="cyan">
								<div class="cyan"></div>
							</li>
							<li title="black">
								<div class="black"></div>
							</li>
							<li title="purple">
								<div class="purple"></div>
							</li>
							<li title="orange">
								<div class="orange"></div>
							</li>
							<li title="green">
								<div class="green"></div>
							</li>
							<li title="red">
								<div class="red"></div>
							</li>
						</ul>
					</div>
				</div>
				<div class="p-15 border-bottom">
					<div class="theme-setting-options">
						<label class="m-b-0">
							<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
								id="mini_sidebar_setting">
							<span class="custom-switch-indicator"></span>
							<span class="control-label p-l-10">Mini Sidebar</span>
						</label>
					</div>
				</div>
				<div class="p-15 border-bottom">
					<div class="theme-setting-options">
						<label class="m-b-0">
							<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
								id="sticky_header_setting">
							<span class="custom-switch-indicator"></span>
							<span class="control-label p-l-10">Sticky Header</span>
						</label>
					</div>
				</div>
				<div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
					<a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
						<i class="fas fa-undo"></i> Restore Default
					</a>
				</div>
			</div>
		</div>
		<div id="ascrail2001" class="nicescroll-rails nicescroll-rails-vr"
			style="width: 8px; z-index: 999; cursor: default; position: absolute; top: 0px; left: 272px; height: 393px; display: block; opacity: 0;">
			<div style="position: relative; top: 0px; float: right; width: 6px; height: 252px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"
				class="nicescroll-cursors"></div>
		</div>
		<div id="ascrail2001-hr" class="nicescroll-rails nicescroll-rails-hr"
			style="height: 8px; z-index: 999; top: 385px; left: 0px; position: absolute; cursor: default; display: none; width: 272px; opacity: 0;">
			<div style="position: absolute; top: 0px; height: 6px; width: 280px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;"
				class="nicescroll-cursors"></div>
		</div>
	</div>
</div>

<footer class="main-footer">
	<div class="footer-left">
		<a href="Team Sakhi.net">Team Sakhi</a></a>
	</div>
	<div class="footer-right">
	</div>
</footer>
</div>
</div>
<!-- General JS Scripts -->
<script src="<?php echo base_url();?>assets/admin/assets/js/app.min.js"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<!-- Template JS File -->
<script src="<?php echo base_url();?>assets/admin/assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="<?php echo base_url();?>assets/admin/assets/js/custom.js"></script>
</body>


<!-- alert.html  21 Nov 2019 03:51:00 GMT -->

</html>
