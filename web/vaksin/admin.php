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
</head>

<body class="mn-ht-100v d-flex flex-column">
  <?php include "../partial/navbar-vaksin.php" ?>
  <div class="content" style="position: relative">
      <!-- Konten dihapus -->
      <div class="container" id="content">
        <div class="row">
          <div>
            <p class="tx-poppins tx-medium tx-20 mg-t-100 mg-b-30">Administrasi Database myITS Vaksin</p>
          </div>
          <div class="pos-fixed t-80 r-15 z-index-10" style="width: auto;">
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
            <div class="col-md-4">
              <div class="form-group form-floating">
                <select class="form-select" id="pilih-tabel" name="pilih-tabel" aria-label="Floating label select example" required>
                  <option value="1">Jadwal Vaksinasi</option>
                  <option value="2">Jenis Vaksin</option>
                  <option value="3">Data Vaksinator</option>
                  <option value="4">Data Kehadiran Vaksinasi</option>
                </select>
                <label for="pilih-tabel">Pilih Tabel</label>
              </div>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-2 mb-3">
              <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-t-10">
                <a href="#" class="btn btn-its-3 tx-poppins tx-medium d-flex justify-content-center"><ion-icon name="add-outline" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Tambah</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-50" id="table1">
            <div class="card bd-0">
              <div class="card-body">
                <div class="table-responsive pd-b-10">
                  <table id="example1" class="table table-hover table-borderless" style="width:100%">
                    <thead>
                      <tr>
                        <th class="table-its wd-10p sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1""  aria-sort="ascending"  aria-label="No: activate to sort column descending">No</th>
                        <th class="table-its wd-15p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tanggal: activate to sort column ascending">Tanggal</th>
                        <th class="table-its wd-15p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Lokasi: activate to sort column ascending">Lokasi</th>
                        <th class="table-its wd-10p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kuota Vaksin: activate to sort column ascending">Kuota Vaksin</th>
                        <th class="table-its wd-15p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tgl. Pendaftaran Dibuka: activate to sort column ascending">Tgl. Pendaftaran Dibuka</th>
                        <th class="table-its wd-15p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tgl. Pendaftaran Ditutup: activate to sort column ascending">Tgl. Pendaftaran Ditutup</th>
                        <th class="table-its wd-10p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Jumlah Pendaftar: activate to sort column ascending">Jumlah Pendaftar</th>
                        <th class="table-its wd-5p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                        <th class="table-its wd-5p sorting_disabled" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"></th>
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
                              <a href="#" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#hapus-record" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
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
                              <a href="#" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#hapus-record" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
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
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mg-b-50 mx-auto" id="table2" style="display:none">
            <div class="card bd-0">
              <div class="card-body">
                <div class="table-responsive pd-b-10">
                  <table id="example2" class="table table-hover table-borderless" style="width:100%">
                    <thead>
                      <tr>
                        <th class="table-its wd-10p" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 80px;" aria-label="No: activate to sort column ascending">No</th>
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
                              <a href="#" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#hapus-record" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
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
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-50" id="table3" style="display:none">
            <div class="card bd-0">
              <div class="card-body">
                <div class="table-responsive pd-b-10">
                  <table id="example3" class="table table-hover table-borderless" style="width:100%">
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
                              <a href="#" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#hapus-record" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
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
                              <a href="#" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#hapus-record" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
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
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-50" id="table4" style="display:none">
            <div class="card bd-0">
              <div class="card-body">
                <div class="table-responsive pd-b-10">
                  <table id="example4" class="table table-hover table-borderless" style="width:100%">
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
                          <p class="mg-b-0">-</p>
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
                              <a href="#" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#hapus-record" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
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
                              <a href="#" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#hapus-record" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
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
                              <a href="#" class="dropdown-item-its tx-poppins tx-medium" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                              <a href="#hapus-record" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
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
      </div><!-- row -->
    </div>
    <div class="modal fade effect-scale" id="hapus-record" tabindex="-1" role="dialog" aria-labelledby="hapus-record" aria-hidden="true">
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

  <script src="../../lib/select2/js/select2.min.js"></script>
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
    $(function(){
      'use strict'

      $('#example2').DataTable({
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
    $(function(){
      'use strict'

      $('#example3').DataTable({
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
    $(function(){
      'use strict'

      $('#example4').DataTable({
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
    $('#pilih-tabel').on('change', function() {
      if ( this.value == '1')
      {
        $("#table1").show();
        $("#table2").hide();
        $("#table3").hide();
        $("#table4").hide();
      }
      else if ( this.value == '2')
      {
        $("#table1").hide();
        $("#table2").show();
        $("#table3").hide();
        $("#table4").hide();
      }
      else if ( this.value == '3')
      {
        $("#table1").hide();
        $("#table2").hide();
        $("#table3").show();
        $("#table4").hide();
      }
      else if ( this.value == '4')
      {
        $("#table1").hide();
        $("#table2").hide();
        $("#table3").hide();
        $("#table4").show();
      }
    });
    });
  </script>
</body>
</html>