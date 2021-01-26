<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4> <?= $users['nama_lengkap']; ?></h4>
                    <p class="mb-0">Hi, welcome back!</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><?= $parent; ?></a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $child; ?></a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                <img src="<?= base_url('assets/dosen/') ?>images/profile/<?= $account->gambar_users; ?>" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0"><?= $account->nama_lengkap; ?></h4>
                                    <p><?= $account->nama_jabatan; ?></p>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0"><?= $users['email'] ?></h4>
                                    <p>Email</p>
                                </div>
                                <div class="dropdown ml-auto">
                                    <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-169px, 30px, 0px);">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-blog mb-5">
                            <h5 class="text-primary d-inline">Profil</h5><a href="javascript:void()" class="pull-right f-s-16">Edit</a>
                            <div class="profile-personal-info mt-2">
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <h6 style="font-size:small">NIK <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-6"><span style="font-size:small"><?= $account->nik ?></span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <h6 style="font-size:small">Nama <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-6"><span style="font-size:small"><?= $account->nama_panggilan ?></span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <h6 style="font-size:small">Jenis Kelamin <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-6"><span style="font-size:small"><?= $account->jenis_kelamin ?></span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <h6 style="font-size:small">Tempat Lahir <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-6"><span style="font-size:small"><?= $account->tempat_lahir ?></span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <h6 style="font-size:small">Tanggal Lahir <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-6"><span style="font-size:small"><?= $account->tanggal_lahir ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-blog mb-5">
                            <h5 class="text-primary d-inline">Kependudukan</h5><a href="javascript:void()" class="pull-right f-s-16">Edit</a>
                            <div class="profile-personal-info mt-2">
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <h6 style="font-size:small">NIK KTP <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-6"><span style="font-size:small"><?= $account->NIK_KTP ?></span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <h6 style="font-size:small">Agama <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-6"><span style="font-size:small"><?= $account->agama_users ?></span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <h6 style="font-size:small">Kewarganegaraan <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-6"><span style="font-size:small"><?= $account->kewarganegaraan_users ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a style="font-size: small;" href="#about-me" data-toggle="tab" class="nav-link">Alamat & Kontak</a>
                                    </li>
                                    <li class="nav-item"><a style="font-size: small;" href="#profile-settings" data-toggle="tab" class="nav-link">Kepegawaian</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="about-me" class="tab-pane fade active show">
                                        <div class="profile-personal-info mt-2">
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <h6 style="font-size:small">Email <span class="pull-right">:</span>
                                                    </h6>
                                                </div>
                                                <div class="col-6"><span style="font-size:small"><?= $account->nik ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <h6 style="font-size:small">Alamat <span class="pull-right">:</span>
                                                    </h6>
                                                </div>
                                                <div class="col-6"><span style="font-size:small"><?= $account->nama_panggilan ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <h6 style="font-size:small">RT <span class="pull-right">:</span>
                                                    </h6>
                                                </div>
                                                <div class="col-6"><span style="font-size:small"><?= $account->jenis_kelamin ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <h6 style="font-size:small">RW <span class="pull-right">:</span>
                                                    </h6>
                                                </div>
                                                <div class="col-6"><span style="font-size:small"><?= $account->tempat_lahir ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <h6 style="font-size:small">Dusun <span class="pull-right">:</span>
                                                    </h6>
                                                </div>
                                                <div class="col-6"><span style="font-size:small"><?= $account->tanggal_lahir ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <h6 style="font-size:small">Desa/Kelurahan <span class="pull-right">:</span>
                                                    </h6>
                                                </div>
                                                <div class="col-6"><span style="font-size:small"><?= $account->tanggal_lahir ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <h6 style="font-size:small">Kota/Kabupaten <span class="pull-right">:</span>
                                                    </h6>
                                                </div>
                                                <div class="col-6"><span style="font-size:small"><?= $account->tanggal_lahir ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <h6 style="font-size:small">Provinsi <span class="pull-right">:</span>
                                                    </h6>
                                                </div>
                                                <div class="col-6"><span style="font-size:small"><?= $account->tanggal_lahir ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <h6 style="font-size:small">Kode Pos <span class="pull-right">:</span>
                                                    </h6>
                                                </div>
                                                <div class="col-6"><span style="font-size:small"><?= $account->tanggal_lahir ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <h6 style="font-size:small">No Telpon Rumah <span class="pull-right">:</span>
                                                    </h6>
                                                </div>
                                                <div class="col-6"><span style="font-size:small"><?= $account->tanggal_lahir ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <h6 style="font-size:small">No HP <span class="pull-right">:</span>
                                                    </h6>
                                                </div>
                                                <div class="col-6"><span style="font-size:small"><?= $account->tanggal_lahir ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="profile-settings" class="tab-pane fade">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <div class="row mb-2">
                                                    <div class="col-6">
                                                        <h6 style="font-size:small">Program Studi <span class="pull-right">:</span>
                                                        </h6>
                                                    </div>
                                                    <div class="col-6"><span style="font-size:small"><?= $account->nik ?></span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">
                                                        <h6 style="font-size:small">NIP (Khusus PNS) <span class="pull-right">:</span>
                                                        </h6>
                                                    </div>
                                                    <div class="col-6"><span style="font-size:small"><?= $account->nama_panggilan ?></span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">
                                                        <h6 style="font-size:small">Status Kepegawaian <span class="pull-right">:</span>
                                                        </h6>
                                                    </div>
                                                    <div class="col-6"><span style="font-size:small"><?= $account->jenis_kelamin ?></span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">
                                                        <h6 style="font-size:small">Status Keaktifan <span class="pull-right">:</span>
                                                        </h6>
                                                    </div>
                                                    <div class="col-6"><span style="font-size:small"><?= $account->tempat_lahir ?></span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">
                                                        <h6 style="font-size:small">Nomor SK CPNS <span class="pull-right">:</span>
                                                        </h6>
                                                    </div>
                                                    <div class="col-6"><span style="font-size:small"><?= $account->tanggal_lahir ?></span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">
                                                        <h6 style="font-size:small">SK CPNS Terhitung Mulai <span class="pull-right">:</span>
                                                        </h6>
                                                    </div>
                                                    <div class="col-6"><span style="font-size:small"><?= $account->tanggal_lahir ?></span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">
                                                        <h6 style="font-size:small">Lembaga Pengangkat <span class="pull-right">:</span>
                                                        </h6>
                                                    </div>
                                                    <div class="col-6"><span style="font-size:small"><?= $account->tanggal_lahir ?></span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">
                                                        <h6 style="font-size:small">Pangkat / Golongan <span class="pull-right">:</span>
                                                        </h6>
                                                    </div>
                                                    <div class="col-6"><span style="font-size:small"><?= $account->tanggal_lahir ?></span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">
                                                        <h6 style="font-size:small">Sumber Gaji <span class="pull-right">:</span>
                                                        </h6>
                                                    </div>
                                                    <div class="col-6"><span style="font-size:small"><?= $account->tanggal_lahir ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a style="font-size: small;" href="#bidang-keilmuan" data-toggle="tab" class="nav-link">Bidang Keilmuan</a>
                                    </li>
                                    <li class="nav-item"><a style="font-size: small;" href="#penelitian" data-toggle="tab" class="nav-link">Penelitian</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="bidang-keilmuan" class="tab-pane fade active show">
                                        <div class="profile-personal-info">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table id="example4" class="display" style="min-width: 845px">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Name</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>01</td>
                                                                        <td>[110203] Aktansi Keuangan Syariah</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>02</td>
                                                                        <td>[110203] Aktansi Keuangan RUmah Tangga</td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="penelitian" class="tab-pane fade">
                                        <div class="profile-personal-info">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table id="example4" class="display" style="min-width: 845px">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Judul</th>
                                                                        <th>Reputasi</th>
                                                                        <th>Link</th>
                                                                        <th>File</th>
                                                                        <th>Admin</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no = 1;
                                                                    foreach ($penelitian as $data) : ?>
                                                                        <tr>
                                                                            <td><?= $no++; ?></td>
                                                                            <td><?= $data->judul_penelitian; ?></td>
                                                                            <td><?= $data->reputasi_penelitian; ?></td>
                                                                            <td><a target="_blank" href="<?= $data->link_penelitian; ?>"><?= $data->link_penelitian; ?></a></td>
                                                                            <td><?= $data->file_penelitian; ?></td>
                                                                            <td><?= $data->nama_admin; ?></td>
                                                                        </tr>
                                                                    <?php endforeach ?>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->