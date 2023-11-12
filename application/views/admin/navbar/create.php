<?php $this->load->view("admin/inc/body"); ?>

<!-- app-header -->
<?php $this->load->view("admin/inc/app-header"); ?>
<!-- /app-header -->

<!-- Start::app-sidebar -->
<?php $this->load->view("admin/inc/sidebar"); ?>
<!-- End::app-sidebar -->

<?php $this->load->view("admin/inc/search"); ?>

<div class="main-content app-content">
	<div class="container-fluid">
		<!-- Page Header -->
		<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
			<h1 class="page-title fw-semibold fs-18 mb-0">
				Navbar Create
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
							Create
						</li>
					</ol>
				</nav>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-6">
				<div class="card custom-card">
					<div class="card-header justify-content-between">
						<div class="card-title">Create table</div>
					</div>

					<div class="card-body">
						<input class="form-control mb-3"
							   type="text"
							   aria-label=".form-control-sm example">
						<input class="form-control mb-3"
							   type="text"
							   aria-label="default input example">
						<input class="form-control"
							   type="text"
							   aria-label=".form-control-lg example">
					</div>

					<div class="card-footer">
						<button class="btn btn-primary-light btn-wave ms-auto float-end waves-effect waves-light">
							Create
						</button>
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
