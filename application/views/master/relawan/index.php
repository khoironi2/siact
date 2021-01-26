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
	                                <h4 class="card-title">Data Relawan</h4>
	                                <a href="<?= base_url('master/data_relawan/relawan/add') ?>">
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
	                                                <th><strong>NAMA.</strong></th>
	                                                <th><strong>NIK</strong></th>
	                                                <th><strong>ALAMAT</strong></th>
	                                                <th><strong>TGL</strong></th>
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
	                                                <td><b>RANDY</b></td>
	                                                <td>32323211</td>
	                                                <td>JL. MONJALI 13</td>
	                                                <td>12 DESEMBER 1993</td>
	                                                <td class="recent-stats d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i>AKTIF</td>
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
	                                                <td><b>RANDY</b></td>
	                                                <td>32323211</td>
	                                                <td>JL. MONJALI 13</td>
	                                                <td>12 DESEMBER 1993</td>
	                                                <td class="recent-stats d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i>AKTIF</td>
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