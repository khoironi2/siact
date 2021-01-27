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
	                                            <label>NIK</label>
	                                            <input type="text" class="form-control input-rounded " placeholder="NIK">
	                                        </div>
	                                        <div class="form-group">
	                                            <label>NAMA</label>
	                                            <input type="text" class="form-control input-rounded " placeholder="NAMA">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="exampleInputEmail1">JENIS KELAMIN</label>
	                                            <div class="select2-purple">
	                                                <select class="select2" name="dirumuskan_pengajuan" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-danger" required style="width: 100%;">
	                                                    <option class="text-danger" value="">LAKI LAKI</option>
	                                                    <option class="text-dark" value="">PEREMPUAN</option>
	                                                </select>
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <label>USIA</label>
	                                            <input type="text" class="form-control input-rounded " placeholder="USIA">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="exampleInputEmail1">DISABILITAS</label>
	                                            <div class="select2-purple">
	                                                <select class="select2" name="dirumuskan_pengajuan" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-danger" required style="width: 100%;">
	                                                    <option class="text-danger" value="">TIDAK</option>
	                                                    <option class="text-dark" value="">YA</option>
	                                                </select>
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="exampleInputEmail1">KONDISI</label>
	                                            <div class="select2-purple">
	                                                <select class="select2" name="dirumuskan_pengajuan" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-danger" required style="width: 100%;">
	                                                    <option class="text-danger" value="">LUKA RINGAN</option>
	                                                    <option class="text-dark" value="">LUKA BERAT</option>
	                                                    <option class="text-dark" value="">MENINGGAL</option>
	                                                    <option class="text-dark" value="">HILANG</option>
	                                                    <option class="text-dark" value="">MENGUNGSI</option>
	                                                </select>
	                                            </div>
	                                        </div>

	                                        <div class="form-group">
	                                            <label for="exampleInputEmail1">LOKASI DIBUTUHKAN BENCANA AKTIF</label>
	                                            <div class="select2-purple">
	                                                <select class="select2" name="dirumuskan_pengajuan" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-danger" required style="width: 100%;">
	                                                    <option class="text-success" value="">Gempa Mamuju Sulbar | </option>
	                                                    <option class="text-dark" value="">Banjir Kalimantan Selatan | </option>
	                                                </select>
	                                            </div>
	                                        </div>
	                                        <div class="">
	                                            <div class="input-group mb-3 mt-4">
	                                                <div class="input-group-prepend">
	                                                    <button class="btn btn-danger" type="button">Foto Korban</button>
	                                                </div>
	                                                <div class="custom-file">
	                                                    <input type="file" class="custom-file-input ">
	                                                    <label class="custom-file-label">Choose file</label>
	                                                </div>
	                                            </div>
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
	                                            <a href="<?= base_url('relawan/assesment/kerusakan') ?>">
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