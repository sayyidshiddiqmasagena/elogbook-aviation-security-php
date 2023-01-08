<style type="text/css">
  .center_div {
    margin: 0 auto;
    width: 90%
      /* value of your choice which suits your alignment */
  }
</style>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <!-- <div class="row mb-2"> -->
      <!-- <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div> -->
      <!-- </div> -->
    </div>
  </section>
  <?php
  // $tgl= date('Y-m-d', strtotime($this->session->userdata('tglcari_rdbagasi')));
  // date_default_timezone_set("Asia/Makassar");
  // $tgl= date('d-m-Y'); // $this->session->userdata('tglcari_rdbagasi');

  $tanggal = date('d-m-Y', strtotime($this->session->userdata('tanggal')));

  ?>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Form Edit Random Check di SCP POS OPERASIONAL II</h3>
            </div>
            <form method="POST" action="<?php base_url();  ?>random_update_scppos2" enctype="multipart/form-data">
              <div class="center_div">
                <div class="card-body">
                <?php
                  // print_r($randomidno);
                  foreach ($randomidno as $rw) {
                ?>
                  <div class="form-group">
                    <label>Team</label>
                    <select class="form-control" name="team" style="width: 100%;">
                    <option <?php if ($rw->team == "ALPHA") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="ALPHA">ALPHA</option>
                      <option <?php if ($rw->team == "BRAVO") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="BRAVO">BRAVO</option>
                      <option <?php if ($rw->team == "CHARLIE") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="CHARLIE">CHARLIE</option>
                      <option <?php if ($rw->team == "DELTA") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="DELTA">DELTA</option>
                      <option <?php if ($rw->team == "ECHO") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="ECHO">ECHO</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Shift</label>
                    <select class="form-control" name="shift" style="width: 100%;">
                    <option <?php if ($rw->shift == "PAGI") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="PAGI">PAGI</option>
                      <option <?php if ($rw->shift == "SIANG") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="SIANG">SIANG</option>
                      <option <?php if ($rw->shift == "MALAM") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="MALAM">MALAM</option>
                    </select>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Tanggal</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <input type="text" name="tanggal" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?php echo $rw->tanggal?>"/>
                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Jam</label>
                    <!-- <input type="text" name="jam" id="jam" class="form-control time" placeholder="00:00" style="width:80px;" onchange="isValidate()" required> -->
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control" name="jam" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" data-mask style="width:80px;" value="<?php echo $rw->jam_periksa?>" required>
                    </div>
                  </div>
                  <input class="form-control" type="hidden" name="lokasi" value="SCP POS OPERASIONAL 2">

                  <div class="form-group">
                    <?php
                    if ($sform == "karyawan") {
                    ?>
                      <label>Nama Karyawan</label>
                    <?php
                    } else {
                    ?>
                      <label>Nama Penumpang</label>
                    <?php
                    }
                    ?>
      
                  <input class="form-control" type="text" name="namakar" value="<?php echo $rw->namakar?>" required>
                  <input class="form-control" type="hidden" name="idno" value="<?php echo $rw->idno?>" required>
      
                    
                  </div>

                  <div class="form-group">
                    <?php
                    if ($sform == "karyawan") {
                    ?>
                      <label>Instansi</label>
                    <?php
                    } else {
                    ?>
                      <label>No. Flight</label>
                    <?php
                    }
                    ?>
                    <input class="form-control" type="text" name="instansi" maxlength="10" onkeyup="this.value = this.value.toUpperCase();" value="<?php echo $rw->instansi?>" required >
                  </div>

                  <div class="form-group">
                    <label>Jenis Barang Bawaan</label>
                    <input class="form-control" type="text" name="jenisbrg_bawaan" value="<?php echo $rw->jenisbrg_bawaan?>" required>
                  </div>

                  <div class="form-group">
                    <label>Metode Pemeriksaan Penumpang</label>
                    <!-- <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" value="0" name="mtdperiksakar" checked>
                          <label for="customRadio1" class="custom-control-label">Manual Check</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" value="1" name="mtdperiksakar">
                          <label for="customRadio2" class="custom-control-label">Tidak Manual Check</label>
                        </div> -->
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="0" name="mtdperiksakar"
                      <?php if ($rw->mtd_periksakar == 0) 
                        echo "checked";
                      ?>>
                      <label class="form-check-label">Manual Check</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="1" name="mtdperiksakar"
                      <?php if ($rw->mtd_periksakar == 1) 
                        echo "checked";
                      ?>>
                      <label class="form-check-label">Tidak Manual Check</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Metode Pemeriksaan Barang Bawaan</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="0" name="mtdperiksabrg"
                      <?php if ($rw->mtd_periksabrg == 0) 
                        echo "checked";
                      ?>>
                      <label class="form-check-label">Manual Check</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="1" type="radio" name="mtdperiksabrg"
                      <?php if ($rw->mtd_periksabrg == 1) 
                        echo "checked";
                      ?>>
                      <label class="form-check-label">E T D</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Personil Pemeriksa</label>
                    <input class="form-control" type="text" name="personil_pemeriksa" value="<?php echo $rw->personil_pemeriksa?>" required>
                  </div>

                  <div class="form-group">
                    <label>Hasil Pemeriksaan</label>
                    <input class="form-control" type="text" name="hasil_temuan" value="<?php echo $rw->hasil_temuan?>">
                  </div>

                  <?php
              }
              ?>
                  <!-- sdad -->

                  <hr>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button class="btn btn-danger float-right" href="<?= base_url(); ?>main/randomtampil_scppos2" >Cancel</button>
                  </div>
                </div>
              </div>
            </form>

          </div>



        </div>
      </div>
  </section>
</div>