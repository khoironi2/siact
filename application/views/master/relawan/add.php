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
	                    <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $son; ?></a></li>
	                </ol>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-xl-9 col-xxl-12">
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12">
	                        <div class="card">
	                            <div class="card-header">
	                                <h4 class="card-title">Tambah Relawan</h4>
	                            </div>
	                            <div class="card-body">
	                                <div class="basic-form">
	                                    <form>
	                                        <div class="form-group">
	                                            <label>NAMA</label>
	                                            <input type="text" class="form-control input-rounded " placeholder="Nama">
	                                        </div>
	                                        <div class="form-group">
	                                            <label>NIK</label>
	                                            <input type="text" class="form-control input-rounded" placeholder="NIK">
	                                        </div>
	                                        <div class="form-group">
	                                            <label>ALAMAT</label>
	                                            <input type="text" class="form-control input-rounded" placeholder="Alamat">
	                                        </div>
	                                        <div class="form-group">

	                                            <label>TANGGAL LAHIR</label>
	                                            <input type="date" class="form-control input-rounded" placeholder="tanggal lahir">
	                                        </div>
	                                        <div class="form-group">
	                                            <label>KOMPETENSI</label>
	                                            <div class="form-check">
	                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
	                                                <label class="form-check-label" for="defaultCheck1">
	                                                    Wash
	                                                </label>
	                                            </div>
	                                            <div class="form-check">
	                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
	                                                <label class="form-check-label" for="defaultCheck1">
	                                                    Logistik
	                                                </label>
	                                            </div>
	                                            <div class="form-check">
	                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
	                                                <label class="form-check-label" for="defaultCheck1">
	                                                    PKDD
	                                                </label>
	                                            </div>

	                                        </div>
	                                        <div class="form-group">
	                                            <label>LOKASI PENUGASAN</label>
	                                            <input type="text" value="MOJOSONGO" class="form-control input-rounded" placeholder="Wilayah Penugasan">
	                                        </div>
	                                        <div class="form-group">
	                                            <label>TUGAS SAAT INI</label>
	                                            <input type="text" value="wash" class="form-control input-rounded" placeholder="">
	                                        </div>
	                                        <div class="form-group mt-5">
	                                            <a href="<?= base_url('master/data_relawan/relawan/') ?>">
	                                                <button type="button" class="btn btn-primary">SIMPAN</button>
	                                            </a>
	                                        </div>
	                                    </form>
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