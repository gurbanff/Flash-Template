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
				Navbar List
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
							List
						</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="card custom-card">
					<div class="card-header justify-content-between">
						<div class="card-title"> Recent Employers </div>
						<div class="d-flex">
							<div class="me-3">
								<input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
							</div>
							<div class="dropdown">
								<a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
									Sort By
									<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li>
										<a class="dropdown-item" href="javascript:void(0);">
											New
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:void(0);">
											Popular
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:void(0);">
											Relevant
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table text-nowrap table-hover border table-bordered">
								<thead>
								<tr>
									<th scope="col">
										Employer
									</th>
									<th scope="col">
										Category
									</th>
									<th scope="col">
										Role
									</th>
									<th scope="col">
										Mail
									</th>
									<th scope="col">
										Location
									</th>
									<th scope="col">
										Date
									</th>
									<th scope="col">
										Action
									</th>
								</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="d-flex align-items-center fw-semibold">
												<span class="avatar avatar-sm me-2 avatar-rounded">
													<img src="../assets/images/faces/16.jpg" alt="img">
												</span>
												Andrew Garfield
											</div>
										</td>
										<td>Development</td>
										<td>
											<span class="badge bg-warning-transparent">Director</span>
										</td>
										<td>andrewgarfield@gmail.com</td>
										<td>
											<div class="d-inline-flex align-items-center">
												<i class="ri-map-pin-fill text-muted fs-10"></i>
												<span class="ms-1">London</span>
											</div>
										</td>
										<td>Jun 10 - Dec 12, 2022</td>
										<td>
											<div class="hstack gap-2 fs-15">
												<a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light">
													<i class="ri-download-2-line"></i>
												</a>
												<a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light">
													<i class="ri-edit-line"></i>
												</a>
												<a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
													<i class="ri-delete-bin-line"></i>
												</a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card-footer">
						<div class="d-flex align-items-center">
							<div> Showing 6 Entries
								<i class="bi bi-arrow-right ms-2 fw-semibold"></i>
							</div>
							<div class="ms-auto">
								<nav aria-label="Page navigation" class="pagination-style-4">
									<ul class="pagination mb-0">
										<li class="page-item disabled">
											<a class="page-link" href="javascript:void(0);"> Prev </a>
										</li>
										<li class="page-item active">
											<a class="page-link" href="javascript:void(0);">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="javascript:void(0);">2</a>
										</li>
										<li class="page-item">
											<a class="page-link text-primary" href="javascript:void(0);"> next </a>
										</li>
									</ul>
								</nav>
							</div>
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
