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
									<h4 class="card-title">KAJI CEPAT</h4>
									<a href="<?= base_url('relawan/assesment/kaji_cepat/add') ?>">
										<button type="button" class="btn btn-rounded btn-primary"><span class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
											</span>Add</button>
									</a>
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
													<th><strong>JUMLAH TERDAMPAK</strong></th>
													<th><strong>LOKASI TERDAMPAK</strong></th>
													<th><strong>LUAS TERDAMPAK</strong></th>
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
													<td>8600 KORBAN</td>
													<td><a target="_blank" href="https://www.google.com/maps/place/Kabupaten+Mamuju,+Sulawesi+Barat/@-2.5516186,118.690739,9z/data=!3m1!4b1!4m5!3m4!1s0x2d8d73d9fc68ade1:0x1c96835f41d7a64f!8m2!3d-2.4920057!4d119.3250347">Kabupaten Mamuju</a> </td>
													<td>900 HEKTAR</td>
													<td class="recent-stats d-flex align-items-center"><i class="fa fa-circle text-danger mr-1"></i>BUTUH PENANGANAN</td>
													<td>
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="custom-control custom-checkbox check-lg mr-3">
															<input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
															<label class="custom-control-label" for="customCheckBox2"></label>
														</div>
													</td>
													<td><b>1</b></td>
													<td>3200 KORBAN</td>
													<td><a target="_blank" href="https://www.google.com/maps/place/Mojosongo,+Kec.+Jebres,+Kota+Surakarta,+Jawa+Tengah/@-7.5429502,110.8294309,14z/data=!3m1!4b1!4m5!3m4!1s0x2e7a16dc5b7b95d5:0x15d33fe3c9252bdc!8m2!3d-7.543193!4d110.8421515">Kec. Jebres, Kota Surakarta, Jawa Tengah</ac>
													</td>
													<td>1200 HEKTAR</td>
													<td class="recent-stats d-flex align-items-center"><i class="fa fa-circle text-danger mr-1"></i>BUTUH PENANGANAN</td>
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