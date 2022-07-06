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
              <p class="tx-poppins tx-medium tx-22 mg-b-5 mg-t-10 mg-l-20 mg-b-10">Formulir Riwayat Vaksinasi</p>
            </div>
            <div class="col-12">
              <p class="tx-poppins text-justify tx-14 mg-b-5 mg-b-40 mg-l-20">Sebelum masuk ke dashboard, silakan untuk menjawab pertanyaan terkait riwayat vaksinasi Anda di bawah ini.</p>
            </div>
            <form>
              <div class="modal-body">
                <h5 class="tx-poppins tx-medium mg-b-15">Pertanyaan 1</h5>
                <p class="tx-poppins tx-medium tx-14 mg-b-0">Apakah Anda pernah dinyatakan positif Covid-19?</p>
                <p class="tx-color-03 tx-13">Jika pernah, silakan menulis tanggal Anda dinyatakan sembuh.</p>
                <div class="row">
                  <div class="col-md-3 form-group mg-b-0">
                    <label for="a" onclick="javascript:CheckButton1();">
                      <input type="radio" name="positif-covid" class="radio-button-its-element" id="a" required>
                        <div class="radio-button-its">
                          <div class="dot mg-r-10"></div>
                          <span>Pernah</span>
                        </div>
                    </label>
                  </div>
                  <div class="col-md-3 form-group">
                    <label for="b" onclick="javascript:CheckButton1();" >
                      <input type="radio" name="positif-covid" class="radio-button-its-element" id="b">
                        <div class="radio-button-its">
                          <div class="dot mg-r-10"></div>
                          <span>Tidak Pernah</span>
                        </div>
                    </label>
                  </div>
                </div>
                <div id="field1" style="display:none">
                  <p class="tx-poppins tx-medium tx-14">Tanggal Dinyatakan Sembuh:</p>
                  <div class="form-row">
                    <div class="col-md-3 form-group form-floating">
                      <input type="date" class="form-control" id="tgl-sembuh" name="tgl-sembuh" placeholder="Pilih" value="" required>
                      <label for="tgl-sembuh">Pilih</label>
                    </div>
                  </div>
                </div>
                <h5 class="tx-poppins tx-medium mg-t-30 mg-b-15">Pertanyaan 2</h5>
                <p class="tx-poppins tx-medium tx-14">Apakah Anda sudah pernah vaksin Covid-19?</p>
                <div class="form-row">
                  <div class="col-md-3 form-group mg-b-0" onclick="javascript:CheckButton2();">
                    <label for="c">
                      <input type="radio" name="pernah-vaksin" class="radio-button-its-element" id="c" required>
                        <div class="radio-button-its">
                          <div class="dot mg-r-10"></div>
                          <span>Sudah</span>
                        </div>
                    </label>
                  </div>
                  <div class="col-md-3 form-group" onclick="javascript:CheckButton2();">
                    <label for="d">
                      <input type="radio" name="pernah-vaksin" class="radio-button-its-element" id="d">
                        <div class="radio-button-its">
                          <div class="dot mg-r-10"></div>
                          <span>Belum</span>
                        </div>
                    </label>
                  </div>
                </div>
                <div id="field2" style="display:none">
                  <p class="tx-poppins tx-medium tx-14">Berapa kali Anda sudah pernah melakukan vaksinasi?</p>
                  <div class="form-row">
                    <div class="col-md-2 form-group form-floating">
                        <input type="number" class="form-control" id="participants-amount" name="nama3" placeholder="Jumlah Orang" value="0" required="" min="0" max="3">
                        <label class="col-sm-12 tx-poppins" for="participants-amount">*Maks. 3</label>
                    </div>
                  </div>
                  <p class="tx-poppins tx-medium tx-14 mg-b-0">Masukkan riwayat vaksinasi Anda melalui isian berikut ini.</p>
                  <p class="tx-color-03 tx-13">Isi riwayat vaksinasi yang bersesuaian dengan lokasi vaksinasi Anda.</p>
                  <div class="form-row mg-b-10">
                    <div class="col-md-3 form-group mg-b-0" onclick="javascript:CheckButton3();">
                      <label for="e">
                        <input type="radio" name="lokasi-vaksin" class="radio-button-its-element" id="e" required checked>
                          <div class="radio-button-its">
                            <div class="dot mg-r-10"></div>
                            <span>Di ITS</span>
                          </div>
                      </label>
                    </div>
                    <div class="col-md-3 form-group" onclick="javascript:CheckButton3();">
                      <label for="f">
                        <input type="radio" name="lokasi-vaksin" class="radio-button-its-element" id="f">
                          <div class="radio-button-its">
                            <div class="dot mg-r-10"></div>
                            <span>Di luar ITS</span>
                          </div>
                      </label>
                    </div>
                  </div>
                  <div id="field3">
                    <div class="form-row">
                      <div class="col-md-2">
                        <div class="form-group form-floating">
                          <input type="number" class="form-control" id="vaksinke" name="no-telp" placeholder="Vaksinasi Ke-" required min="1" max="3">
                          <label for="vaksinke">Vaksinasi Ke-</label>
                        </div>
                      </div>
                      <div class="col-md-4 form-group form-floating">
                        <select class="form-select" id="tgl-vaksin" name="tgl-vaksin" aria-label="Floating label select example" required>
                          <option value="" selected>Pilih</option>
                          <option value="1">Kamis, 31 Maret 2022 || Puskesmas Keputih</option>
                        </select>
                        <label for="sesi">Tanggal Vaksinasi</label>
                      </div>
                      <div class="col-md-3 form-group form-floating">
                        <select class="form-select" id="vaksinator" name="vaksinator" aria-label="Floating label select example" required>
                          <option value="" selected>Pilih</option>
                          <option value="1">RSU Haji</option>
                        </select>
                        <label for="vaksinator">Vaksinator</label>
                      </div>
                      <div class="col-md-3 form-group form-floating">
                        <select class="form-select" id="jenis-vaksin" name="jenis-vaksin" aria-label="Floating label select example" required>
                          <option value="" selected>Pilih</option>
                          <option value="1">SinoVac</option>
                        </select>
                        <label for="jenis-vaksin">Jenis Vaksin</label>
                      </div>
                      <div class="col-md-3 form-group">
                        <div class="form-group form-floating">
                          <input type="date" class="form-control" id="next-vaksin" name="next-vaksin" placeholder="Vaksinasi Selanjutnya" value="" required>
                          <label for="next-vaksin">Vaksinasi Selanjutnya</label>
                        </div>
                      </div>
                      <div class="col-md-3 form-group">
                        <div class="form-group form-floating mg-md-t-10 mg-r-20">
                            <label class="col-sm-12 d-none d-md-inline">&nbsp;</label>
                            <div class="col-sm-12">
                                <input type="hidden" name="id_contact_history" id="id-contact-history">
                                <button type="button" class="btn btn-its-3 btn-block" id="btn-add-contact-history" style="display: inline;">
                                    <i class="fa fa-plus"></i><span class="ml-10 mg-l-25 d-inline tx-poppins">Tambah</span>
                                </button>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="field4" style="display:none">
                    <div class="form-row">
                      <div class="col-md-2 form-group mg-b-0">
                        <div class="form-group form-floating">
                          <input type="number" class="form-control" id="vaksinke" name="no-telp" placeholder="Vaksinasi Ke-" required min="1" max="3">
                          <label for="vaksinke">Vaksinasi Ke-</label>
                        </div>
                      </div>
                      <div class="col-md-4 form-group mg-b-0">
                        <div class="form-group form-floating">
                          <input type="date" class="form-control" id="tgl-vaksin" name="tgl-vaksin" placeholder="Tgl. Vaksinasi" value="" required>
                          <label for="tgl-vaksin">Tanggal Vaksinasi</label>
                        </div>
                      </div>
                      <div class="col-md-3 form-group mg-b-0">
                        <div class="form-group form-floating">
                          <input type="text" class="form-control" id="vaksinator" name="vaksinator" placeholder="Vaksinator" value="" required>
                          <label for="vaksinator">Vaksinator</label>
                        </div>
                      </div>
                      <div class="col-md-3 form-group form-floating">
                        <select class="form-select" id="jenis-vaksin" name="jenis-vaksin" aria-label="Floating label select example" required>
                          <option value="" selected>Pilih</option>
                          <option value="1">SinoVac</option>
                        </select>
                        <label for="jenis-vaksin">Jenis Vaksin</label>
                      </div>
                      <div class="col-md-3 form-group">
                        <div class="form-group form-floating">
                          <input type="date" class="form-control" id="next-vaksin" name="next-vaksin" placeholder="Vaksinasi Selanjutnya" value="" required>
                          <label for="next-vaksin">Vaksinasi Selanjutnya</label>
                        </div>
                      </div>
                      <div class="col-md-3 form-group">
                        <div class="form-group form-floating mg-md-t-10 mg-r-20">
                            <label class="col-sm-12 d-none d-md-inline">&nbsp;</label>
                            <div class="col-sm-12">
                                <input type="hidden" name="id_contact_history" id="id-contact-history">
                                <button type="button" class="btn btn-its-3 btn-block" id="btn-add-contact-history" style="display: inline;">
                                    <i class="fa fa-plus"></i><span class="ml-10 mg-l-25 d-inline tx-poppins">Tambah</span>
                                </button>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive mg-b-20">
                    <table id="example1" class="table table-hover table-borderless" style="width: 100%;">
                      <thead>
                        <tr>
                          <th class="table-its wd-15p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 80px;" aria-label="Vaksinasi Ke: activate to sort column ascending">Vaksinasi Ke</th>
                          <th class="table-its wd-20p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100px;" aria-label="Tanggal Vaksinasi: activate to sort column ascending">Tanggal Vaksinasi</th>
                          <th class="table-its wd-20p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100px;" aria-label="Vaksinator: activate to sort column ascending">Vaksinator</th>
                          <th class="table-its wd-20p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Jenis Vaksin: activate to sort column ascending">Jenis Vaksin</th>
                          <th class="table-its wd-20p sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 150px;" aria-label="Tanggal Vaksinasi Selanjutnya: activate to sort column ascending">Tanggal Vaksinasi Selanjutnya</th>
                          <th class="table-its wd-5p sorting_disabled" rowspan="1" colspan="1" style="width: 0px;" aria-label=""></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="bd-b odd" role="row">
                          <td class="table-its sorting_1" tabindex="0">
                            <p class="mg-b-0">1</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">29/06/2022</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">RSU Haji</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">SinoVac</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">29/07/2022</p>
                          </td>
                          <td class="table-its">                            
                            <div class="dropdown">
                              <a href="" data-toggle="dropdown" class="btn btn-icon pd-0">
                                <div class="avatar"><span class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Menu"><ion-icon name="ellipsis-vertical" class="tx-18 md hydrated" role="img" aria-label="ellipsis vertical"></ion-icon></span></div>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                                <a href="#kegiatan-hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18 md hydrated" role="img" aria-label="trash sharp"></ion-icon></span></div> Hapus</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div id="field5" style="display:none">
                  <p class="tx-poppins tx-medium tx-14">Apakah Anda bersedia divaksinasi?</p>
                  <div class="form-row">
                    <div class="col-md-3 form-group mg-b-0" onclick="javascript:CheckButton4();">
                      <label for="g">
                        <input type="radio" name="sedia-vaksin" class="radio-button-its-element" id="g" required>
                          <div class="radio-button-its">
                            <div class="dot mg-r-10"></div>
                            <span>Bersedia</span>
                          </div>
                      </label>
                    </div>
                    <div class="col-md-5 form-group mg-b-0" onclick="javascript:CheckButton4();">
                      <label for="h">
                        <input type="radio" name="sedia-vaksin" class="radio-button-its-element" id="h">
                          <div class="radio-button-its">
                            <div class="dot mg-r-10"></div>
                            <span>Bersedia, tetapi tidak boleh karena alasan kesehatan</span>
                          </div>
                      </label>
                    </div>
                    <div class="col-md-3 form-group" onclick="javascript:CheckButton4();">
                      <label for="i">
                        <input type="radio" name="sedia-vaksin" class="radio-button-its-element" id="i">
                          <div class="radio-button-its">
                            <div class="dot mg-r-10"></div>
                            <span>Belum/Tidak bersedia</span>
                          </div>
                      </label>
                    </div>
                  </div>
                </div>
                <div id="field6" style="display:none">
                  <p class="tx-poppins tx-medium tx-14">Tuliskan Alasannya (maks 500 Karakter)</p>
                  <div class="form-group form-floating">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                    <label for="alasan-tidak-vaksin">Alasan</label>
                  </div>
                </div>
              </div>
            </form>
            <div class="modal-footer">
              <a href="index.php">
                <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              </a>
              <a href="index.php">
                <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Simpan</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Container -->

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
          lengthMenu: false,
          zeroRecords: 'Tidak ada data.',
          infoEmpty: 'Tidak ada data.',
          info: false,
          infoFiltered: '(filtered from _MAX_ total records)',
          paginate: false,
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

  <script type="text/javascript">
    function CheckButton1() {
        if (document.getElementById('a').checked) {
            document.getElementById('field1').style.display = 'block';
        }
        else document.getElementById('field1').style.display = 'none';
    }

    function CheckButton2() {
        if (document.getElementById('c').checked) {
            document.getElementById('field2').style.display = 'block';
            document.getElementById('field5').style.display = 'none';
        }
        else {
            document.getElementById('field2').style.display = 'none';
            document.getElementById('field5').style.display = 'block';
        }
    }

    function CheckButton3() {
        if (document.getElementById('e').checked) {
            document.getElementById('field3').style.display = 'block';
            document.getElementById('field4').style.display = 'none';
        }
        else {
            document.getElementById('field3').style.display = 'none';
            document.getElementById('field4').style.display = 'block';
        }
    }

    function CheckButton4() {
        if (document.getElementById('i').checked) {
            document.getElementById('field6').style.display = 'block';
        }
        else {
            document.getElementById('field6').style.display = 'none';
        }
    }
  </script>
</body>
</html>