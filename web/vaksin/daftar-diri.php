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
  <div class="container">
    <div class="content-body mg-t-90">
      <div class="card">
        <div class="card-header bd-0 pd-t-5 pd-b-10 d-flex justify-content-start align-items-center">
        </div>
        <div class="card-body bd-0 pd-0">
          <div class="row row-xs pd-x-20 pd-y-5">
            <div class="col-12">
              <p class="tx-poppins tx-medium tx-20 mg-b-5 crop-text-1 mg-t-10 mg-l-20">Formulir Pendaftaran Vaksinasi</p>
            </div>
            <div class="col-12">
              <p class="tx-poppins tx-16 mg-b-5 crop-text-1 mg-b-40 mg-l-20">Untuk Pegawai/Tendik</p>
            </div>
            <form>
              <div class="modal-body">
                <p class="tx-poppins tx-medium tx-16 mg-b-0">Identitas Diri</p>
                <p class="tx-color-03 tx-13">Mohon diisi sesuai dengan identitas asli (Untuk data 'Jenis Kelamin' diambil sesuai Akun myITS Portal Anda).</p>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="Heaven Happyna Putra Febriyono" required disabled>
                  <label for="nama">Nama</label>
                </div>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
                  <label for="nama-kegiatan">NIK</label>
                </div>
                <div class="form-row">
                  <p class="tx-poppins tx-14 crop-text-1 mg-l-5 mg-t-15 mg-r-10">Jenis Kelamin:</p>
                  <div class="col-md-3 form-group mg-b-0">
                    <label for="a">
                      <input type="radio" name="jk" class="radio-button-its-element" id="a" required checked disabled>
                        <div class="radio-button-its">
                          <div class="dot mg-r-10"></div>
                          <span>Laki-laki</span>
                        </div>
                    </label>
                  </div>
                  <div class="col-md-3 form-group">
                    <label for="b">
                      <input type="radio" name="jk" class="radio-button-its-element" id="b" disabled>
                        <div class="radio-button-its">
                          <div class="dot mg-r-10"></div>
                          <span>Perempuan</span>
                        </div>
                    </label>
                  </div>
                </div>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="no-telp" name="no-telp" placeholder="No. Telp" value="081823456789" required>
                  <label for="no-telp">No. Telp</label>
                </div>
                <div class="form-group form-floating">
                  <select class="form-select" id="jenis-vaksin" name="jenis-vaksin" aria-label="Floating label select example" required>
                    <option value="" selected>Pilih</option>
                    <option value="1">Sinovac</option>
                    <option value="2">Astrazeneca</option>
                  </select>
                  <label for="jenis-vaksin">Jenis Vaksin D1-D2:</label>
                </div>
                <div class="form-row">
                  <div class="col-12">
                    <p class="tx-poppins tx-medium tx-16 mg-b-0">Tanggal Vaksin Dosis 2</p>
                    <p class="tx-color-03 tx-13">Mohon diisi sesuai dengan yang tertera pada sertifikat.</p>
                  </div>
                  <div class="col-md-3 form-group form-floating">
                    <input type="date" class="form-control" id="tgl-vaksin-2" name="tgl-vaksin-2" placeholder="Pilih" value="" required>
                    <label for="tgl-vaksin-2">Pilih</label>
                  </div>
                </div>
                <p class="tx-poppins tx-medium tx-16">Pilih Program Vaksinasi</p>
                <div class="form-group form-floating">
                  <select class="form-select" id="tgl-lokasi" name="tgl-lokasi" aria-label="Floating label select example" required>
                    <option value="" selected>Pilih</option>
                    <option value="1">05 Februari 2022 (Ged. Robotika)</option>
                  </select>
                  <label for="tgl-lokasi">Pilih Tanggal dan Lokasi:</label>
                </div>
                <div class="form-group form-floating">
                  <select class="form-select" id="sesi" name="sesi" aria-label="Floating label select example" required>
                    <option value="" selected>Pilih</option>
                    <option value="1">Sesi 1 (08:00 - 09:00)</option>
                  </select>
                  <label for="sesi">Pilih Sesi:</label>
                </div>
              </div>
            </form>
            <div class="modal-footer">
              <a href="index.php">
                <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              </a>
              <a href="index.php">
                <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Daftar</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Container -->

  <?php include "../partial/footer.php" ?>
  <?php include "../partial/script.php" ?>
</body>
</html>