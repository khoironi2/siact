	<!--**********************************
            Content body start
        ***********************************-->
	<div class="content-body">
		<!-- row -->
		<div class="container-fluid">
			<div class="row page-titles mx-0">
				<div class="col-sm-6 p-md-0">
					<div class="welcome-text">
						<h4>Hi, <?= $users['nama_lengkap'] ?></h4>
						<span><?= $account->nama_jabatan ?></span>
					</div>
				</div>
				<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)"><?= $parent; ?></a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $child; ?></a></li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-9 col-xxl-12">
					<div class="row">
						<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header border-0 pb-0">
									<h4 class="card-title">KEBUTUHAN RELAWAN</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-responsive-sm mb-0">
											<thead>
												<tr>
													<th style="width:20px;">
														<div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
															<input type="checkbox" class="custom-control-input" id="checkAll" required="">
															<label class="custom-control-label" for="checkAll"></label>
														</div>
													</th>
													<th><strong>NO.</strong></th>
													<th><strong>ALAT TIDUR</strong></th>
													<th><strong>JAS HUJAN</strong></th>
													<th><strong>HELM</strong></th>
													<th><strong>DESINFEKTAN</strong></th>
													<th><strong>LOKASI BENCANA</strong></th>
													<th><strong>STATUS</strong></th>
													<th style="width:85px;"><strong>EDIT</strong></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="custom-control custom-checkbox check-lg mr-3">
															<input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
															<label class="custom-control-label" for="customCheckBox2"></label>
														</div>
													</td>
													<td><b>1</b></td>
													<td>70</td>
													<td>70</td>
													<td>70</td>
													<td>900</td>
													<td><a target="_blank" href="https://www.google.com/maps/place/Kabupaten+Mamuju,+Sulawesi+Barat/@-2.5516186,118.690739,9z/data=!3m1!4b1!4m5!3m4!1s0x2d8d73d9fc68ade1:0x1c96835f41d7a64f!8m2!3d-2.4920057!4d119.3250347">Kabupaten Mamuju</a> </td>
													<td class="recent-stats d-flex align-items-center"><i class="fa fa-circle text-danger mr-1"></i>BUTUH SEGERA</td>
													<td>
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</td>
												</tr>

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--**********************************
            Content body end
        ***********************************-->