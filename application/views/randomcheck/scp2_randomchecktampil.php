<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <!-- <div class="row mb-2"> -->
      <div class="col-sm-12">
        <h4>RANDOM CHECK & UNPREDICTIBLE ORANG & BARANG DI SCP II</h4>
      </div>
      <!-- 
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div> -->
      <!-- </div> -->
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <?php
  // $tgl= date('Y-m-d', strtotime($this->session->userdata('tglcari_rdbagasi')));
  // date_default_timezone_set("Asia/Makassar");
  // $tgl= date('d-m-Y'); // $this->session->userdata('tglcari_rdbagasi');

  $tgl = date('d-m-Y', strtotime($this->session->userdata('tglrdorang')));
  $team = $this->session->userdata('teamrdorang');
  $shift = $this->session->userdata('shiftrdorang');
  ?>

  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- <div class="col-12"> -->


        <div class="card">
          <div class="card-header">

            <div class="col-12">
              <form class="form-horizontal" action="<?php base_url(); ?>randomtampil_scp2" method="POST">
                <div class="form-group row">
                  <div class="col-sm-2">
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                      <input type="text" name="tglcari_rdorang" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?php if ($tgl == NULL) {
                                                                                                                                                  echo "";
                                                                                                                                                } else {
                                                                                                                                                  echo $tgl;
                                                                                                                                                } ?>" />
                    </div>
                  </div>

                  <div class="col-sm-2">
                    <select class="form-control" name="team" style="width: 100%;">
                      <option value="ALL">--Pilih Team--</option>
                      <option <?php if ($team == "ALPHA") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="ALPHA">ALPHA</option>
                      <option <?php if ($team == "BRAVO") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="BRAVO">BRAVO</option>
                      <option <?php if ($team == "CHARLIE") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="CHARLIE">CHARLIE</option>
                      <option <?php if ($team == "DELTA") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="DELTA">DELTA</option>
                      <option <?php if ($team == "ECHO") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="ECHO">ECHO</option>
                    </select>
                  </div>

                  <div class="col-sm-2">
                    <select class="form-control" name="shift" style="width: 100%;">
                      <option value="ALL">--Pilih Shift--</option>
                      <option <?php if ($shift == "PAGI") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="PAGI">PAGI</option>
                      <option <?php if ($shift == "SIANG") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="SIANG">SIANG</option>
                      <option <?php if ($shift == "MALAM") {
                                echo "selected";
                              } else {
                                echo "";
                              } ?> value="MALAM">MALAM</option>
                    </select>
                  </div>

                  <div class="col-sm-1">
                    <button type="submit" class="btn btn-secondary btn btn-block" name="rdorang"> Cari! </button>
                  </div>
                </div>
              </form>
            </div>

          </div> <!-- //card-header -->

          <!-- /.card-header -->
          <div class="card-body">
            <!-- <div class="row">                   -->
            <div class="row">
              <div class="col-sm-2">
                <div class="form-group">
                  <div class="input-group">
                    <?php
                    if ((!empty($random)) && ($team <> "") && ($shift <> "") && ($team <> "ALL") && ($shift <> "ALL")) {
                    ?>
                      <button type="button" class="btn btn-info btn btn-block" data-toggle="modal" data-target="#modal-default">
                        <span class="fa fa-paper-plane"></span> Kirim Approval</button>
                    <?php
                    } else {
                    ?>
                      <button type="button" class="btn btn-info btn btn-block" data-toggle="modal" title="<?php echo "Silahkan pilih Tanggal, Team dan Shift terlebih dahulu"; ?>" disabled data-target="#modal-default">
                        <span class="fa fa-paper-plane" style="font-size:12px;"></span> Kirim Approval</button>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-sm-2">
              </div>
              <div class="col-sm-2">
              </div>
              <div class="col-sm-2">
              </div>
              <div class="col-sm-2">
              </div>

              <div class="col-sm-2 float-right">
                <form action="<?php base_url(); ?>random_scp2" method="POST">
                  <button type="submit" class="btn btn-primary btn btn-block"><span class="fa fa-plus" style="font-size:12px">
                    </span> Tambah Data</button>
                </form>
              </div>

            </div>

            <!-- </div> -->
            <!-- </div> -->
            <!-- </div> -->

            <!-- <table id="example1" class="table table-bordered table-striped table-hover"> -->
            <table id="example4" class="table table-striped projects table-bordered display no-wrap" style="width:100%">
              <thead>
                <tr>
                  <th rowspan="3" style="text-align: center">NO. URUT</th>
                  <th rowspan="3" style="text-align: center">TANGGAL</th>
                  <th rowspan="3" style="text-align: center">JAM</th>
                  <th colspan="3" style="text-align: center">YANG DIPERIKSA</th>
                  <th colspan="3" style="text-align: center">METODE PEMERIKSAAN</th>
                  <th rowspan="3" style="text-align: center">PERSONEL AVSEC</th>
                  <th rowspan="3" style="text-align: center">HASIL</br>PEMERIKSAAN/TEMUAN</th>
                  <th rowspan="3" style="text-align: center">TEAM</th>
                  <th rowspan="3" style="text-align: center">SHIFT</th>
                  <th colspan="2" style="text-align: center">STATUS APPROVAL</th>
                  <th rowspan="3" style="text-align: center">Aksi</th>

                </tr>
                <tr>
                  <th colspan="2" style="text-align: center">DATA PENUMPANG</th>
                  <th rowspan="2" style="text-align: center">JENIS</br>BARANG BAWAAN</th>
                  <th style="text-align: center">PENUMPANG</th>
                  <th colspan="2" style="text-align: center">BARANG BAWAAN</th>
                  <th rowspan="2" style="text-align: center">SQUAD LEADER</th>
                  <th rowspan="2" style="text-align: center">SUPERVISOR</th>
                </tr>
                <tr>
                  <th style="text-align: center">NAMA PENUMPANG</th>
                  <th style="text-align: center">NO. FLIGHT</th>
                  <th style="text-align: center">MANUAL CHECK</th>
                  <th style="text-align: center">MANUAL CHECK</th>
                  <th style="text-align: center">ETD</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $idkode = "";
                $idno = "";
                $nourut = 1;
                foreach ($random as $data) {
                  // echo $data->status_approv." - ";
                  // if (empty($data->status_approv) && ($data->status_approv)<>0) 
                  //   $stapprov = "Not Sent";
                  $idkode = $data->idkode;
                  $idno = $data->idno;

                  if (($data->st_approv01) == '0')
                    $stapprov01 = "Proses";
                  else if (($data->st_approv01) == '1')
                    $stapprov01 = "Diterima";
                  else $stapprov01 = "Not Sent";

                  if (($data->st_approv02) == '0')
                    $stapprov02 = "Proses";
                  else if (($data->st_approv02) == '1')
                    $stapprov02 = "Diterima";
                  else $stapprov02 = "Not Sent";
                ?>
                  <tr>
                    <!-- idno, tanggal, , nopen, , , , personil_pemeriksa, hasil_temuan, lokasi, jam_periksa -->

                    <td style="text-align: center"><?php echo $nourut++; ?></td>
                    <td style="text-align: center"><?php echo date('d-m-Y', strtotime($data->tanggal)); ?></td>
                    <td style="text-align: center"><?php echo $data->jam_periksa; ?></td>
                    <td><?php echo $data->namapax; ?></td>
                    <td style="text-align: center"><?php echo $data->nopen; ?></td>
                    <td><?php echo $data->jenisbrg_bawaan; ?></td>

                    <td style="text-align: center"><?php if ($data->mtd_periksapax == 0) echo " &radic;";
                                                    else echo "-"; ?></td>
                    <td style="text-align: center"><?php if ($data->mtd_periksabrg == 0) echo " &radic;";
                                                    else echo "-"; ?></td>
                    <td style="text-align: center"><?php if ($data->mtd_periksabrg == 0) echo "-";
                                                    else echo " &radic;"; ?></td>

                    <td><?php echo $data->personil_pemeriksa; ?></td>

                    <td><?php echo $data->hasil_temuan; ?></td>
                    <td><?php echo $data->team; ?></td>
                    <td><?php echo $data->shift; ?></td>
                    <td>
                      <?php
                      echo $stapprov01;
                      ?>
                    </td>
                    <td>
                      <?php
                      echo $stapprov02;
                      ?>
                    </td>
                    <td>
                      <a class="m-1 btn btn-info btn-sm openPopup" href="javascript:void(0);" data-href="<?php base_url() ?>randomtabel_scp2?idkode=<?php echo $idkode ?>" title="Lihat">
                        <i class="fas fa-eye"></i>
                      </a>

                      <!-- <a class="m-1 btn btn-warning btn-sm approval" href="javascript:void(0);" data-href="<?php base_url() ?>rcscp2_konfirm?idkode=<?php echo $idkode ?>">
                        <i class="fas fa-pen"></i>
                      </a> -->
                      <!-- <?php echo $idno ?> -->
                      <a class="m-1 btn btn-warning btn-sm approval" href="<?php base_url(); ?>randomedit_scp2?idno=<?php echo $idno ?>" method="POST" >
                        <i class="fas fa-pen"></i>
                      </a>

                      <!-- <a class="m-1 btn btn-warning btn-sm approval" href="<?php base_url(); ?>randomedit_scp2?idno=<?php echo $idno ?>" method="POST" >
                        <i class="fas fa-pen"></i>
                      </a> -->

                      <a class="m-1 btn btn-danger btn-sm delete" action="<?php base_url();  ?>random_delete?idno=<?php echo $idno ?>" >
                        <i class="far fa-trash-alt"></i>
                      </a>

                      <a class="m-1 btn btn-success btn-sm print" href="<?php base_url(); ?>print_orgbrg?idkode=<?php echo $idkode ?>" rel="noopener" target="_blank">
                            <i class="fas fa-print"></i>
                      </a>

                      <!-- <div class="col-sm-2 float-right">
                        <form action="<?php base_url(); ?>random_scp2" method="POST">
                          <button type="submit" class="btn btn-primary btn btn-block"><span class="fa fa-plus" style="font-size:12px">
                            </span> Tambah Data</button>
                        </form>
                      </div> -->

                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>

              <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> -->
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Kirim Approval</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-horizontal" method="POST" action="<?php base_url(); ?>approvform_orgbrg_insert">
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Squad Leader</label>
            <div class="col-sm-8">
              <select class="form-control select2" name="sqleader" style="width: 100%;">
                <?php
                $userq = $this->model_main->getuser('Screening Section');
                // print_r($userq);
                echo "<option></option>";
                foreach ($userq as $data) {
                ?>
                  <option value="<?php echo $data->id_users; ?>"><?php echo $data->nama . " / " . $data->jabatan; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Supervisor</label>
            <div class="col-sm-8">
              <select class="form-control select2" name="supervisor" style="width: 100%;">
                <?php
                $userq = $this->model_main->getuser('Screening Section');
                // print_r($userq);
                echo "<option></option>";
                foreach ($userq as $data) {
                ?>
                  <option value="<?php echo $data->id_users; ?>"><?php echo $data->nama . " / " . $data->jabatan; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Lokasi </label>
            <div class="col-sm-8">
              <input class="form-control" type="text" name="lokasi" value="SCP II">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tanggal </label>
            <div class="col-sm-8">
              <input class="form-control" type="text" name="tgl_form" value="<?php echo $tgl; ?>">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Team </label>
            <div class="col-sm-8">
              <input class="form-control" type="text" name="team" value="<?php echo $team; ?>">
              <input class="form-control" type="text" name="id_kode" value="<?php echo $idkode; ?>">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Shift </label>
            <div class="col-sm-8">
              <input class="form-control" type="text" name="shift" value="<?php echo $shift; ?>">
            </div>
          </div>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>