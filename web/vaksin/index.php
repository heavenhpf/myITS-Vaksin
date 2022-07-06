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
  <div class="content pd-0" style="position: relative">
    <div class=" mg-t-80 mg-b-30">
      <div class="container" id="content">
        <div class="row row-sm">
          <div class="col-12 no-gutter">
            <div class="card bd-0" style="background-image: url(../../assets/img/cover-vaksin.png); background-position: bottom center; background-size:cover;">
              <div class="card-body ht-120 pos-relative">
                  <p class="tx-poppins tx-medium tx-white tx-18 tx-md-20 mg-md-t-10 mg-b-5">Selamat Datang di myITS Vaksin</p>
                  <p class="tx-white tx-14 tx-md-16">Segera daftarkan Anda dan keluarga Anda vaksinasi booster yang diselenggarakan oleh ITS.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content pd-0" style="position: relative">
    <!-- Konten dihapus -->
    <div class="container" id="content">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 mg-b-30">
          <div class="card bd-0">
            <div class="card-header bd-0 pd-md-t-20 pd-md-b-15 d-flex justify-content-start align-items-center">
              <h5 class="tx-poppins tx-medium mg-b-0">Prosedur Pendaftaran Vaksinasi Booster ITS</h5>
            </div>
            <div class="card-body tx-poppins">
              <p class="tx-medium">Berikut merupakan tata cara pendaftaran vaksinasi booster yang diselenggarakan oleh ITS:</p>
              <ul class="tx-13">
                <li>Mengecek ketersediaan vaksinasi pada kolom “Jadwal” atau Media Sosial ITS lainnya</li>
                <li>Mengisi formulir online yang disediakan pada myITS Vaksin</li>
                <li>Hadir pada lokasi vaksinasi yang dipilih</li>
                <li>Mengikuti prosedur vaksinasi dengan membawa berkas-berkas yang diperlukan (tiket vaksin, fotokopi KTP).</li>
                <li>Pulang dan mengisi form KIPI pada myITS Vaksin</li>
                <li>Menunggu sertifikat dikirim oleh Kemenkes RI</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mg-b-10 mg-md-b-20">
          <div class="card bd-0">
            <div class="card-header bd-0 pd-md-t-20 pd-md-b-10 d-flex justify-content-start align-items-center">
              <h5 class="tx-poppins tx-medium mg-b-0">Jadwal Vaksinasi</h5>
            </div>
            <div class="card-body bd-0 pd-x-0 pd-t-0">
              <div class="row row-xs pd-x-10">
                <div class="col-12">
                  <a href="#">
                    <div class="pd-y-10 pd-x-10 rounded-its-10 hover-its-1">
                      <span class="badge badge-its-3-transparent tx-poppins tx-semibold tx-12 mg-b-5">Selasa, 15 Maret 2022</span>
                      <p class="tx-poppins tx-medium mg-b-0 crop-text-2">Vaksinasi Booster Jenis Astrazeneca Khusus Pegawai & Tendik ITS</p>
                      <p class="tx-13 tx-color-03 mg-b-0 crop-text-1"><span class="tx-medium">00:00 - 00:00</span> di Gedung Graha ITS</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#">
                    <div class="pd-y-10 pd-x-10 rounded-its-10 hover-its-1">
                      <span class="badge badge-its-3-transparent tx-poppins tx-semibold tx-12 mg-b-5">Selasa, 15 Maret 2022</span>
                      <p class="tx-poppins tx-medium mg-b-0 crop-text-2">Vaksinasi Booster Jenis Astrazeneca Khusus Pegawai & Tendik ITS</p>
                      <p class="tx-13 tx-color-03 mg-b-0 crop-text-1"><span class="tx-medium">00:00 - 00:00</span> di Gedung Graha ITS</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <p class="tx-poppins tx-medium tx-18 mg-t-20 mg-b-20">Riwayat Pendaftaran</p>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
          <a href="daftar-diri.php" class="btn btn-its-3 tx-poppins tx-medium d-flex justify-content-center">Daftarkan Diri</a>
          <a href="daftar-keluarga.php" class="btn btn-its-3 tx-poppins tx-medium d-flex justify-content-center mg-l-20">Daftarkan Anggota Keluarga/THL</a>
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
              <p class="mg-b-0">Form pendaftaran Anda berhasil ditambahkan.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-50">
          <div class="card bd-0">
            <div class="card-body">
              <div class="table-responsive pd-b-10">
                <table id="example1" class="table table-hover table-borderless" style="width:100%">
                  <thead>
                    <tr>
                      <th class="table-its wd-10p">No</th>
                      <th class="table-its wd-10p">NIK</th>
                      <th class="table-its wd-20p">Nama</th>
                      <th class="table-its wd-15p">No. Telp</th>
                      <th class="table-its wd-20p">Jenis Vaksin D1-D2</th>
                      <th class="table-its wd-20p">Tanggal dan Lokasi</th>
                      <th class="table-its wd-10p">Status</th>
                      <th class="table-its wd-5p"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="bd-b">
                      <td class="table-its">
                        <p class="mg-b-0">1</p>
                      </td>
                      <td class="table-its">
                        <p class="mg-b-0">XXXXXXXXXXXXXXXX</p>
                      </td>
                      <td class="table-its">
                        <p class="tx-medium mg-b-0">Heaven Happyna Putra F.</p>
                      </td>
                      <td class="table-its">
                        <p class="mg-b-0">XXXXXXXXXXXX</p>
                      </td>
                      <td class="table-its">
                        <p class="mg-b-0">Sinovac</p>
                      </td>
                      <td class="table-its">
                        <p class="mg-b-0">Jumat, 8 Mei 2022 di Gedung Graha ITS</p>
                        <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Sesi 1</span>
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
                    <tr class="bd-b">
                      <td class="table-its">
                        <p class="mg-b-0">2</p>
                      </td>
                      <td class="table-its">
                        <p class="mg-b-0">XXXXXXXXXXXXXXXX</p>
                      </td>
                      <td class="table-its">
                        <p class="tx-medium mg-b-0">Kevin Nathaniel</p>
                      </td>
                      <td class="table-its">
                        <p class="mg-b-0">XXXXXXXXXXXX</p>
                      </td>
                      <td class="table-its">
                        <p class="mg-b-0">Sinovac</p>
                      </td>
                      <td class="table-its">
                        <p class="mg-b-0">Jumat, 8 Mei 2022 di Gedung Graha ITS</p>
                        <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Sesi 2</span>
                      </td>
                      <td class="table-its">
                        <span class="badge badge-success-transparent tx-poppins tx-semibold tx-12 mg-l-5">Hadir</span>
                      </td>
                      <td class="table-its">                            
                      </td>
                    </tr>
                    <tr class="bd-b">
                      <td class="table-its">
                        <p class="mg-b-0">3</p>
                      </td>
                      <td class="table-its">
                        <p class="mg-b-0">XXXXXXXXXXXXXXXX</p>
                      </td>
                      <td class="table-its">
                        <p class="tx-medium mg-b-0">Kevin Nathaniel</p>
                      </td>
                      <td class="table-its">
                        <p class="mg-b-0">XXXXXXXXXXXX</p>
                      </td>
                      <td class="table-its">
                        <p class="mg-b-0">Sinovac</p>
                      </td>
                      <td class="table-its">
                        <p class="mg-b-0">Jumat, 8 Mei 2022 di Gedung Graha ITS</p>
                        <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Sesi 2</span>
                      </td>
                      <td class="table-its">
                        <span class="badge badge-danger-transparent tx-poppins tx-semibold tx-12 mg-l-5">Tidak Hadir</span>
                      </td>
                      <td class="table-its">                            
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
  <div class="modal fade effect-scale" id="kegiatan-hapus" tabindex="-1" role="dialog" aria-labelledby="kegiatan-hapus" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <h5 class="tx-poppins tx-medium">Hapus Kegiatan</h5>
          <p class="mg-b-0">Apakah Anda yakin ingin menghapus kegiatan ini?</p>
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
    $(document).ready(function(){
      $('.toast').toast('show');
    });
  </script>

</body>
</html>