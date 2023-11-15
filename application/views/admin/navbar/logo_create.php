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
				Navbar Logo Create
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
					<form action="<?php echo base_url('navbar_create_act'); ?>" method="post"
						  enctype="application/x-www-form-urlencoded">
						<div class="card-body">
							<div class="row mb-3">
								<label for="colFormLabel" class="col-sm-2 col-form-label">Link</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="file_href" id="name" placeholder="Logo Link">
								</div>
							</div>
							<div>
								<label for="formFileLg" class="form-label">File Upload</label>
								<input class="form-control form-control-lg" id="formFileLg" name="file" type="file">
							</div>
						</div>

						<div class="card-footer">
							<button type="submit"
									class="btn btn-primary-light btn-wave ms-auto float-end waves-effect waves-light">
								Create
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>

<?php $this->load->view("admin/inc/footer"); ?>

<?php $this->load->view("admin/inc/js"); ?>

<?php $this->load->view("admin/inc/bosDivler"); ?>

<?php $this->load->view("admin/inc/scriptsvg"); ?>
