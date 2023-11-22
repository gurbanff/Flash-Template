<?php $this->load->view("admin/inc/body"); ?>

<?php $this->load->view("admin/inc/app-header"); ?>

<?php $this->load->view("admin/inc/sidebar"); ?>

<?php $this->load->view("admin/inc/search"); ?>

<div class="main-content app-content">
	<div class="container-fluid">

		<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
			<h1 class="page-title fw-semibold fs-18 mb-0">
				Header Create
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
			<div class="col-xl-8">
				<div class="card custom-card">
					<div class="card-header justify-content-between">
						<div class="card-title">Create table</div>
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
					<form action="<?php echo base_url('about_create_act'); ?>" method="post"
						  enctype="multipart/form-data">
						<div class="card-body">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" name="name" id="floatingInput" placeholder="About Us">
								<label for="floatingInput">Header</label>
							</div>
							<div class="form-floating mb-4">
								<textarea name="desc" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 149px;"></textarea>
								<label for="floatingTextarea">Description</label>
							</div>
							<div>
								<label for="file" class="form-label">File Upload</label>
								<input class="form-control form-control-lg" id="file" name="file" type="file">
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

