<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../partial/head-vaksin.php" ?>
  <style>
    .crop-text-1 {
      -webkit-line-clamp: inherit;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-box-orient: vertical;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.flaticon.com/free-icons/skin"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Meta -->
  <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
  <meta name="author" content="ThemePixels">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/Portal.png">

  <title>Beranda &bullet; Portal myITS</title>

  <!-- bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- vendor css -->
  <link href="../../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../../lib/jqvmap/jqvmap.min.css" rel="stylesheet">
  <link href="../../lib/prismjs/themes/prism-vs.css" rel="stylesheet">
  <link href="../../lib/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../lib/ekko-lightbox/css/ekko-lightbox.css" rel="stylesheet">


  <!-- DashForge CSS -->
  <link rel="stylesheet" href="../../assets/css/dashforge.css">
  <link rel="stylesheet" href="../../assets/css/dashforge.customs.css">
  <link rel="stylesheet" href="../../assets/css/dashforge.sizexxl.css">

  <link rel="stylesheet" href="../../assets/css/skin.light.css">
  <link rel="stylesheet" href="../../assets/css/skin.light.customs.css">
</head>

<body class="mn-ht-100v d-flex flex-column">
  <?php include "../partial/navbar-vaksin.php" ?>

  <div class="content pd-0" style="position: relative">
      <!-- Konten dihapus -->
      <div class="container pd-x-0" id="content">
        <div class="row">
          <div>
            <p class="tx-poppins tx-medium tx-20 mg-t-100 mg-b-30">Administrasi Database myITS Vaksin</p>
          </div>

          <div class="pos-fixed t-80 r-15" style="width: auto;">
            <div class="toast mg-l-auto" data-autohide="false">
              <div class="toast-header">
                <span class="mr-auto tx-poppins tx-medium tx-color-01">Notifikasi</span>
                <small class="text-muted">Baru saja</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
              </div>
              <div class="toast-body">
                <ion-icon name="checkmark-circle" class="tx-success tx-20 mg-r-5"></ion-icon>
                <p class="tx-medium mg-b-0">Berhasil Ditambahkan</p>
                <p class="mg-b-0">Form pendaftaran Anda berhasil ditambahkan.</p>
              </div>
            </div>
          </div>

          <div class="pos-fixed t-80 r-15" style="width: auto;">
            <div class="toast mg-l-auto" data-autohide="false">
              <div class="toast-header">
                <span class="mr-auto tx-poppins tx-medium tx-color-01">Notifikasi</span>
                <small class="text-muted">Baru saja</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
              </div>
              <div class="toast-body">
                <ion-icon name="checkmark-circle" class="tx-success tx-20 mg-r-5"></ion-icon>
                <p class="tx-medium mg-b-0">Berhasil Ditambahkan</p>
                <p class="mg-b-0">Data berhasil ditambahkan.</p>
              </div>
            </div>
            <div class="toast mg-l-auto" data-autohide="false">
              <div class="toast-header">
                <span class="mr-auto tx-poppins tx-medium tx-color-01">Notifikasi</span>
                <small class="text-muted">Baru saja</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
              </div>
              <div class="toast-body">
                <ion-icon name="checkmark-circle" class="tx-success tx-20 mg-r-5"></ion-icon>
                <p class="tx-medium mg-b-0">Berhasil Diubah</p>
                <p class="mg-b-0">Data berhasil diubah.</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-4">
              <div class="form-group form-floating">
                <select onchange="change_tbl(this.value)" class="form-select" >
                  <option value="">Pilih</option>
                  <option value="tb1">Jadwal Vaksinasi</option>
                  <option value="tb2">Jenis Vaksin</option>
                  <option value="tb3">Data Vaksinator</option>
                  <option value="tb4">Data Kehadiran Vaksinasi</option>
                </select>
                <label for="status-hubungan">Pilih Tabel</label>
              </div>
            </div>
            <div class="col-6"></div>
            <div class="col-2">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-t-10 mg-l-40">
                <a href="daftar-diri.php" class="btn btn-its-3 tx-poppins tx-medium d-flex justify-content-center"><ion-icon name="add-outline" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Tambah</a>
              </div>
            </div>
          </div>

          <div id="tbl_div">
          <style>
            #tbl_div div {
                display:none;
            }
          </style>

          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
            <div class="card bd-0">
              <div class="card-body">
                <div class="table-responsive pd-b-10" id="tb1">
                  <table class="table table-hover table-borderless" style="width:100%">
                    <thead>
                      <tr>
                        <th class="table-its wd-10p">No</th>
                        <th class="table-its wd-15p">Tanggal</th>
                        <th class="table-its wd-15p">Lokasi</th>
                        <th class="table-its wd-10p">Kuota Vaksin</th>
                        <th class="table-its wd-15p">Tgl. Pendaftaran Dibuka</th>
                        <th class="table-its wd-15p">Tgl. Pendaftaran Ditutup</th>
                        <th class="table-its wd-10p">Jumlah Pendaftar</th>
                        <th class="table-its wd-5p">Status</th>
                        <th class="table-its wd-5p"></th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr class="bd-b">
                        <td class="table-its">
                          <p class="mg-b-0">1</p>
                        </td>
                        <td class="table-its">
                          <p class="tx-medium mg-b-0">Jumat, 8 Mei 2022</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">Gedung Graha ITS</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">500</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">4 Mei 2022</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">7 Mei 2022</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">450</p>
                        </td>
                        <td class="table-its">
                          <span class="badge badge-success-transparent tx-poppins tx-semibold tx-12 mg-l-5">Dibuka</span>
                        </td>
                        <td class="table-its">                            
                          <div class="dropdown">
                            <a href="" data-toggle="dropdown" class="btn btn-icon pd-0">
                              <div class="avatar"><span class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01" data-toggle="tooltip" data-placement="bottom" title="Menu"><ion-icon name="ellipsis-vertical" class="tx-18"></ion-icon></span></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                              <a href="daftar-keluarga.php" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#kegiatan-hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>

                    <tbody>
                      <tr class="bd-b">
                        <td class="table-its">
                          <p class="mg-b-0">2</p>
                        </td>
                        <td class="table-its">
                          <p class="tx-medium mg-b-0">Jumat, 8 Mei 2022</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">Gedung Graha ITS</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">500</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">4 Mei 2022</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">7 Mei 2022</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">450</p>
                        </td>
                        <td class="table-its">
                          <span class="badge badge-danger-transparent tx-poppins tx-semibold tx-12 mg-l-5">Sudah Ditutup</span>
                        </td>
                        <td class="table-its">                            
                          <div class="dropdown">
                            <a href="" data-toggle="dropdown" class="btn btn-icon pd-0">
                              <div class="avatar"><span class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01" data-toggle="tooltip" data-placement="bottom" title="Menu"><ion-icon name="ellipsis-vertical" class="tx-18"></ion-icon></span></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                              <a href="daftar-keluarga.php" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#kegiatan-hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="table-responsive pd-b-10" id="tb2">
                  <table class="table table-hover table-borderless" style="width:100%">
                    <thead>
                      <tr>
                        <th class="table-its wd-10p">No</th>
                        <th class="table-its wd-35p">Jenis</th>
                        <th class="table-its wd-45p">Tgl. Kadaluarsa</th>
                        <th class="table-its wd-5p"></th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr class="bd-b">
                        <td class="table-its">
                          <p class="mg-b-0">1</p>
                        </td>
                        <td class="table-its">
                          <p class="tx-medium mg-b-0">Sinovac</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">4 Desember 2023</p>
                        </td>
                        <td class="table-its">
                          <div class="dropdown">
                            <a href="" data-toggle="dropdown" class="btn btn-icon pd-0">
                              <div class="avatar"><span class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01" data-toggle="tooltip" data-placement="bottom" title="Menu"><ion-icon name="ellipsis-vertical" class="tx-18"></ion-icon></span></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                              <a href="daftar-keluarga.php" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#kegiatan-hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="table-responsive pd-b-10" id="tb3">
                  <table class="table table-hover table-borderless" style="width:100%">
                    <thead>
                      <tr>
                        <th class="table-its wd-10p">No</th>
                        <th class="table-its wd-10p">Nama</th>
                        <th class="table-its wd-10p">Jenis Kelamin</th>
                        <th class="table-its wd-10p">Tgl. Lahir</th>
                        <th class="table-its wd-15p">NIK</th>
                        <th class="table-its wd-15p">NIP</th>
                        <th class="table-its wd-10p">Gol. Darah</th>
                        <th class="table-its wd-10p">No. HP</th>
                        <th class="table-its wd-5p">Status</th>
                        <th class="table-its wd-5p"></th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr class="bd-b">
                        <td class="table-its">
                          <p class="mg-b-0">1</p>
                        </td>
                        <td class="table-its">
                          <p class="tx-medium mg-b-0">Heaven Happyna Putra F.</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">Laki-Laki</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">15 April 1985</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">XXXXXXXXXXXXXXXX</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">XXXXXXXXXXXX</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">XX</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">XXXXXXXXXXXX</p>
                        </td>
                        <td class="table-its">
                          <span class="badge badge-success-transparent tx-poppins tx-semibold tx-12 mg-l-5">Aktif</span>
                        </td>
                        <td class="table-its">                            
                          <div class="dropdown">
                            <a href="" data-toggle="dropdown" class="btn btn-icon pd-0">
                              <div class="avatar"><span class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01" data-toggle="tooltip" data-placement="bottom" title="Menu"><ion-icon name="ellipsis-vertical" class="tx-18"></ion-icon></span></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                              <a href="daftar-keluarga.php" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#kegiatan-hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>

                    <tbody>
                      <tr class="bd-b">
                        <td class="table-its">
                          <p class="mg-b-0">2</p>
                        </td>
                        <td class="table-its">
                          <p class="tx-medium mg-b-0">Heaven Happyna Putra F.</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">Laki-Laki</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">15 April 1985</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">XXXXXXXXXXXXXXXX</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">XXXXXXXXXXXX</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">XX</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">XXXXXXXXXXXX</p>
                        </td>
                        <td class="table-its">
                          <span class="badge badge-danger-transparent tx-poppins tx-semibold tx-12 mg-l-5">Tidak Aktif</span>
                        </td>
                        <td class="table-its">                            
                          <div class="dropdown">
                            <a href="" data-toggle="dropdown" class="btn btn-icon pd-0">
                              <div class="avatar"><span class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01" data-toggle="tooltip" data-placement="bottom" title="Menu"><ion-icon name="ellipsis-vertical" class="tx-18"></ion-icon></span></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                              <a href="daftar-keluarga.php" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#kegiatan-hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="table-responsive pd-b-10" id="tb4">
                  <table class="table table-hover table-borderless" style="width:100%">
                    <thead>
                      <tr>
                        <th class="table-its wd-10p">No</th>
                        <th class="table-its wd-10p">Created at</th>
                        <th class="table-its wd-10p">Nama</th>
                        <th class="table-its wd-10p">NIK</th>
                        <th class="table-its wd-10p">Jenis Kelamin</th>
                        <th class="table-its wd-10p">No. HP</th>
                        <th class="table-its wd-10p">Hub. Keluarga</th>
                        <th class="table-its wd-10p">Tgl. Dosis 2</th>
                        <th class="table-its wd-10p">Tgl. Hadir</th>
                        <th class="table-its wd-5p">Status Hadir</th>
                        <th class="table-its wd-5p"></th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr class="bd-b">
                        <td class="table-its">
                          <p class="mg-b-0">1</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">2022-05-08 22:14:27</p>
                        </td>
                        <td class="table-its">
                          <p class="tx-medium mg-b-0">Heaven Happyna Putra F.</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">XXXXXXXXXXXXXXXX</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">Laki-Laki</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">XXXXXXXXXXXX</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">Anak</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">27 Februari 2022</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">-</p>
                        </td>
                        <td class="table-its">
                          <span class="badge badge-warning-transparent tx-poppins tx-semibold tx-12 mg-l-5">Belum Hadir</span>
                        </td>
                        <td class="table-its">                            
                          <div class="dropdown">
                            <a href="" data-toggle="dropdown" class="btn btn-icon pd-0">
                              <div class="avatar"><span class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01" data-toggle="tooltip" data-placement="bottom" title="Menu"><ion-icon name="ellipsis-vertical" class="tx-18"></ion-icon></span></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                              <a href="daftar-keluarga.php" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#kegiatan-hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                    
                    <tbody>
                      <tr class="bd-b">
                        <td class="table-its">
                          <p class="mg-b-0">2</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">2022-05-08 22:14:27</p>
                        </td>
                        <td class="table-its">
                          <p class="tx-medium mg-b-0">Heaven Happyna Putra F.</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">XXXXXXXXXXXXXXXX</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">Laki-Laki</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">XXXXXXXXXXXX</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">Anak</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">27 Februari 2022</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">8 Mei 2022</p>
                        </td>
                        <td class="table-its">
                          <span class="badge badge-success-transparent tx-poppins tx-semibold tx-12 mg-l-5">Hadir</span>
                        </td>
                        <td class="table-its">                            
                          <div class="dropdown">
                            <a href="" data-toggle="dropdown" class="btn btn-icon pd-0">
                              <div class="avatar"><span class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01" data-toggle="tooltip" data-placement="bottom" title="Menu"><ion-icon name="ellipsis-vertical" class="tx-18"></ion-icon></span></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                              <a href="daftar-keluarga.php" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#kegiatan-hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>

                    <tbody>
                      <tr class="bd-b">
                        <td class="table-its">
                          <p class="mg-b-0">3</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">2022-05-08 22:14:27</p>
                        </td>
                        <td class="table-its">
                          <p class="tx-medium mg-b-0">Heaven Happyna Putra F.</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">XXXXXXXXXXXXXXXX</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">Laki-Laki</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">XXXXXXXXXXXX</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">Anak</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">27 Februari 2022</p>
                        </td>
                        <td class="table-its">
                          <p class="mg-b-0">-</p>
                        </td>
                        <td class="table-its">
                          <span class="badge badge-danger-transparent tx-poppins tx-semibold tx-12 mg-l-5">Tidak Hadir</span>
                        </td>
                        <td class="table-its">                            
                          <div class="dropdown">
                            <a href="" data-toggle="dropdown" class="btn btn-icon pd-0">
                              <div class="avatar"><span class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01" data-toggle="tooltip" data-placement="bottom" title="Menu"><ion-icon name="ellipsis-vertical" class="tx-18"></ion-icon></span></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                              <a href="daftar-keluarga.php" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#kegiatan-hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                            </div>
                          </div>
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
      </div><!-- row -->
    </div>

    <div class="modal fade effect-scale" id="kegiatan-hapus" tabindex="-1" role="dialog" aria-labelledby="kegiatan-hapus" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="tx-poppins tx-medium">Hapus Data</h5>
            <p class="mg-b-0">Apakah Anda yakin ingin menghapus record ini?</p>
          </div>
          <form>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>

<?php include "../partial/footer.php" ?>
<?php include "../partial/script.php" ?>

<script src="../../lib/jquery/jquery.min.js"></script>
<script src="../../lib/jqueryui/jquery-ui.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../lib/feather-icons/feather.min.js"></script>
<script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../../lib/prismjs/prism.js"></script>
<script src="../../lib/js-cookie/js.cookie.js"></script>
<script src="../../assets/js/dashforge.js"></script>
<script src="../../assets/js/dashforge.aside.js"></script>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

<!-- Script base -->
    <script>
        $(function(){
            'use strict'

            $('.off-canvas-menu').on('click', function(e){
                e.preventDefault();
                var target = $(this).attr('href');
                $(target).addClass('show');
            });

            $('.off-canvas .close').on('click', function(e){
                e.preventDefault();
                $(this).closest('.off-canvas').removeClass('show');
            })

            $(document).on('click touchstart', function(e){
                e.stopPropagation();
                if(!$(e.target).closest('.off-canvas-menu').length) {
                var offCanvas = $(e.target).closest('.off-canvas').length;
                if(!offCanvas) {
                    $('.off-canvas.show').removeClass('show');
                }
                }
            });
        });
    </script>

    <script>
        $('[data-toggle="tooltip"]').tooltip();
    </script>

    <script>
        $(document).on('click', '.allow-focus', function (e) {
        e.stopPropagation();
        });
    </script>

    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

    <!-- Sementara -->
    <script>
        var goBtn = document.getElementById("goBtn");
        var menu = document.getElementById("menu");

        goBtn.onclick = function() {
        window.location = menu.value;
        }
    </script>

    <!-- Tahun Saat Ini -->
    <script>
        const d = new Date();
        let year = d.getFullYear();
        document.getElementById("thn").innerHTML = year;
    </script>    <script src="../../lib/select2/js/select2.min.js"></script>
    <script src="../../lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script>
      $(function(){
        'use strict'

        $('#example1').DataTable({
          language: {
            searchPlaceholder: 'Cari',
            sSearch: '',
            lengthMenu: '_MENU_ data/halaman',
            zeroRecords: 'Tidak ada data.',
            infoEmpty: 'Tidak ada data.',
            info: 'Menampilkan halaman _PAGE_ dari _PAGES_',
            infoFiltered: '(filtered from _MAX_ total records)',
            paginate: { 'first': '<i class="fas fa-angle-double-left"></i>',
                        'last': '<i class="fas fa-angle-double-right"></i>',
                        'next': '<i class="fas fa-angle-right"></i>',
                        'previous': '<i class="fas fa-angle-left"></i>'
                      },
          },
          responsive: true,
          columnDefs: [
            { orderable: false, targets: -1 }
          ]
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>

    <script>
      $(document).ready(function(){
        $('.toast').toast('show');
      });
    </script>

    <script>
      $(document).ready(function(){
        $("#tt").change( function ()
        {
            dhi = $("#tt").val();
             if(dhi=='')
            {
                return;
            }
            $('#tbl_div div').css('display','none');
            $('#'+dhi).css('display','block');
        });
});
    </script>
  </body>
</html>