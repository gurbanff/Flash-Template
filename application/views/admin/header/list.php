<?php $this->load->view("admin/inc/body"); ?>

<?php $this->load->view("admin/inc/app-header"); ?>

<?php $this->load->view("admin/inc/sidebar"); ?>

<?php $this->load->view("admin/inc/search"); ?>

<div class="main-content app-content" style="float: left;">
	<div class="container-fluid" style="float: left;">
		<!-- Page Header -->
		<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
			<h1 class="page-title fw-semibold fs-18 mb-0">
				Header List
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
			<div class="col-xl-6">
				<div class="card custom-card">
					<div class="card-header justify-content-between">
						<div class="card-title">List Table</div>
						<div class="d-flex">
							<div class="dropdown">
								<a href="<?php echo base_url('header_create'); ?>" class="btn btn-primary btn-sm btn-wave waves-effect waves-light">
									<i class="ti ti-arrow-big-right"></i>
									Create
								</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table text-nowrap table-hover border table-bordered">
								<thead>
								<tr>
									<th scope="col">
										Header Name
									</th>
									<th scope="col">
										Action
									</th>
								</tr>

								</thead>
								<tbody>

								<?php $say = 0; foreach($get_all_header as $item){ $say++ ?>

									<tr>
										<td>
											<div class="d-flex align-items-center fw-semibold">
												<?php echo $item['name']; ?>
											</div>
										</td>
										<td>
											<div class="btn-list">
												<a href="<?php echo base_url('header_view/'.$item['id']); ?>">
													<button type="submit"
															class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
														<i class="ri-eye-line"></i>
													</button>
												</a>
												<a href="<?php echo base_url('header_update/' . $item['id']); ?>">
													<button class="btn btn-sm btn-info-light btn-icon">
														<i class="ri-pencil-line"></i>
													</button>
												</a>
												<a onclick="return confirm('Silmek istediyinize Eminsiz?')" href="<?php echo base_url('header_delete/'.$item['id']); ?>" style="text-decoration: none;">
													<button type="submit" class="btn btn-sm btn-danger-light btn-icon contact-delete">
														<i class="ri-delete-bin-line"></i>
													</button>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center fw-semibold">
												<?php echo $item['desc']; ?>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center fw-semibold">
												<?php echo $item['desc2']; ?>
											</div>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="card custom-card">
					<div class="card-header justify-content-between">
						<div class="card-title"> List Table</div>
						<div class="d-flex">
							<div class="dropdown">
								<a href="<?php echo base_url('header_img_create'); ?>" class="btn btn-primary btn-sm btn-wave waves-effect waves-light">
									<i class="ti ti-arrow-big-right"></i>
									Create
								</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table text-nowrap table-hover border table-bordered">
								<thead>
								<tr>
									<th scope="col">
										Header Image
									</th>
									<th scope="col">
										Image name
									</th>
									<th scope="col">
										Action
									</th>
								</tr>

								</thead>
								<tbody>

								<?php foreach ($get_head_img as $item) { ?>

									<tr>
										<td>
											<div class="d-flex align-items-center fw-semibold">
												<?php if($item['img']){ ?>
													<img width="50px" height="50px" style="object-fit: cover;" src="<?php echo base_url('uploads/admin/header/'.$item['img']) ?>" />
												<?php }else{ ?>
													<img width="50px" height="50px" style="object-fit: cover;" src="<?php echo base_url('uploads/noimage.jpg'); ?>" />
												<?php } ?>
											</div>
										</td>

										<td>
											<div class="d-flex align-items-center fw-semibold">
												<?php echo substr($item['img'],0,20)."..."; ?>
											</div>
										</td>

										<td>
											<div class="btn-list">
												<a href="<?php echo base_url('header_img_update/' . $item['id']); ?>">
													<button class="btn btn-sm btn-info-light btn-icon">
														<i class="ri-pencil-line"></i>
													</button>
												</a>
												<a onclick="return confirm('Silmek istediyinize Eminsiz?')" href="<?php echo base_url('header_img_delete/' . $item['id']); ?>" style="text-decoration: none;">
													<button type="submit" class="btn btn-sm btn-danger-light btn-icon contact-delete">
														<i class="ri-delete-bin-line"></i>
													</button>
												</a>
											</div>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-3">
				<div class="card custom-card">
					<div class="card-header justify-content-between">
						<div class="card-title">Header Bottom List</div>
						<div class="d-flex">
							<div class="dropdown">
								<a href="<?php echo base_url('header_bottom_create'); ?>" class="btn btn-primary btn-sm btn-wave waves-effect waves-light">
									<i class="ti ti-arrow-big-right"></i>
									Create
								</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table text-nowrap table-hover border table-bordered">
								<thead>
								<tr>
									<th scope="col">
										Header Image
									</th>
									<th scope="col">
										Action
									</th>
								</tr>

								</thead>
								<tbody>
								<?php foreach ($get_all_header_bottom as $item) { ?>
									<tr>
										<td>
											<div class="d-flex align-items-center fw-semibold">
												<?php echo $item['name']; ?>
											</div>
										</td>

										<td>
											<div class="btn-list">
												<a href="<?php echo base_url('header_bottom_update/' . $item['id']); ?>">
													<button class="btn btn-sm btn-info-light btn-icon">
														<i class="ri-pencil-line"></i>
													</button>
												</a>
												<a onclick="return confirm('Silmek istediyinize Eminsiz?')" href="<?php echo base_url('header_bottom_delete/' . $item['id']); ?>" style="text-decoration: none;">
													<button type="submit" class="btn btn-sm btn-danger-light btn-icon contact-delete">
														<i class="ri-delete-bin-line"></i>
													</button>
												</a>
											</div>
										</td>
									</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center fw-semibold">
											<?php echo $item['span']; ?>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center fw-semibold">
											<?php echo $item['span2']; ?>
										</div>
									</td>
								</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-3">
				<div class="card custom-card">
					<div class="card-header justify-content-between">
						<div class="card-title"> List Table</div>
						<div class="d-flex">
							<div class="dropdown">
								<a href="<?php echo base_url('header_bottomR_create'); ?>" class="btn btn-primary btn-sm btn-wave waves-effect waves-light">
									<i class="ti ti-arrow-big-right"></i>
									Create
								</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table text-nowrap table-hover border table-bordered">
								<thead>
								<tr>
									<th scope="col">
										Header Name
									</th>
									<th scope="col">
										Action
									</th>
								</tr>

								</thead>
								<tbody>
								<?php foreach ($get_all_header_bottomR as $item) { ?>
								<tr>
									<td>
										<div class="d-flex align-items-center fw-semibold">
											<?php echo $item['name']; ?>
										</div>
									</td>
									<td>
										<div class="btn-list">
											<a href="<?php echo base_url('header_bottomR_update/' . $item['id']); ?>">
												<button class="btn btn-sm btn-info-light btn-icon">
													<i class="ri-pencil-line"></i>
												</button>
											</a>
											<a onclick="return confirm('Silmek istediyinize Eminsiz?')" href="<?php echo base_url('header_bottomR_delete/' . $item['id']); ?>" style="text-decoration: none;">
												<button type="submit" class="btn btn-sm btn-danger-light btn-icon contact-delete">
													<i class="ri-delete-bin-line"></i>
												</button>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center fw-semibold">
											<?php echo $item['span']; ?>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center fw-semibold">
											<?php echo $item['span2']; ?>
										</div>
									</td>
								</tr>
								<?php } ?>
								</tbody>
							</table>
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
