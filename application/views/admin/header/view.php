<?php $this->load->view("admin/inc/body"); ?>

<?php $this->load->view("admin/inc/app-header"); ?>

<?php $this->load->view("admin/inc/sidebar"); ?>

<?php $this->load->view("admin/inc/search"); ?>

<div class="main-content app-content" style="float: left;">
	<div class="container-fluid" style="float: left;">
		<!-- Page Header -->
		<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
			<h1 class="page-title fw-semibold fs-18 mb-0">
				View
			</h1>
			<div class="ms-md-1 ms-0">
				<nav>
					<ol class="breadcrumb mb-0">
						<li class="breadcrumb-item">
							<a href="javascript:void(0);">
								Pages
							</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							View
						</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-8">
				<div class="card custom-card">
					<div class="card-header justify-content-between">
						<div class="card-title">Header Details</div>
						<div class="d-flex">
							<div class="dropdown">
								<a href="<?php echo base_url('header_list'); ?>"
								   class="btn btn-primary btn-sm btn-wave waves-effect waves-light">
									<i class="ti ti-arrow-big-left"></i>
									Back
								</a>
							</div>
						</div>
					</div>

					<div class="card-body">
						<div class="card-body">
							<h5 class="fw-semibold">
								<?php echo $single_data['name']; ?>
							</h5>
							<hr>
							<h5 class="fw-semibold">
								<?php echo $single_data['desc']; ?>
							</h5>
							<hr>
							<h5 class="fw-semibold">
								<?php echo $single_data['desc2']; ?>
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view("admin/inc/footer"); ?>

<?php $this->load->view("admin/inc/js"); ?>

<?php $this->load->view("admin/inc/bosDivler"); ?>

<?php $this->load->view("admin/inc/scriptsvg"); ?>
