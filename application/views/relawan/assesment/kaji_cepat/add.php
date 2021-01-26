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
	                                <h4 class="card-title">ADD</h4>
	                            </div>
	                            <div class="card-body">
	                                <div class="basic-form">
	                                    <form>
	                                        <div class="form-group">
	                                            <label>JUMLAH TERDAMPAK</label>
	                                            <input type="text" class="form-control input-rounded " placeholder="Jumlah Korban">
	                                        </div>
	                                        <div class="form-group">
	                                            <label>LUAS TERDAMPAK</label>
	                                            <input type="text" class="form-control input-rounded" placeholder="Luas Kira Kira">
	                                        </div>
	                                        <div class="form-group">
	                                            <label>TANGGAL KEJADIAN</label>
	                                            <input type="date" class="form-control input-rounded">
	                                        </div>
	                                        <div class="form-group">
	                                            <label>LOKASI KEJADIAN</label><br>
	                                            <label for="exampleFormControlInput1">Latitude, Longitude</label>
	                                            <input type="text" class="form-control input-rounded" id="latlong" name="latlong">
	                                        </div>
	                                        <div class="row">

	                                            <div style="background-color: transparent;" class="jumbotron">
	                                                <!-- untuk membuat semacam container berwarna abu -->

	                                            </div>
	                                            <div class="col-10">
	                                                <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
	                                                <!-- peta akan ditampilkan dengan id = mapid -->
	                                                <div id="mapid"></div>
	                                            </div>
	                                        </div>
	                                        <div class="form-group mt-5">
	                                            <a href="<?= base_url('relawan/assesment/kaji_cepat') ?>">
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