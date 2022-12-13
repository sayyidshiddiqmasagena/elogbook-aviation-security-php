<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- <div class="card"> -->



          <!-- <div class="card-header"> -->
            <!-- <div class="row">                   -->
              <!-- <div class="card-header">
                <div class="col-12">
                  <form class="form-horizontal" action="<?php base_url(); ?>randomtampil_bagasi1" method="POST">
                    <div class="form-group row">
                      <div class="col-sm-3">
                        <form action="<?php base_url(); ?>main/verifikasi_approv01" method="POST">  
                          <div class="form-group">
                            <input class="form-control" type="text" name="id_kode" value="<?php echo $idkode;?>">  
                            <button type="submit" class="btn btn-info btn btn-block" data-toggle="modal" data-target="#modal-default" style="margin-top: 15px;">
                            <span class="fa fa-check-square"></span>  Setuju</button>
                          </div>
                        </form>
                      </div>

                      <div class="col-sm-3">
                        <button type="button" class="btn btn-danger btn btn-block" data-toggle="modal" data-target="#modal-default" style="margin-top: 15px;">
                          <span class="fa fa-ban"></span>  Ditolak</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div> -->
              <!-- </card header>  -->

                    <table id="example4" class="table table-striped projects table-bordered display no-wrap" style="width:100%">
                        <thead>
                        <tr>     
                      <th rowspan="3" style="text-align: center">NO. URUT</th>
                      <th rowspan="3" style="text-align: center">TANGGAL</th>
                      <th rowspan="3" style="text-align: center">JAM</th>
                      <th colspan="3" style="text-align: center">YANG DIPERIKSA</th>
                      <th colspan="3" style="text-align: center">METODE PEMERIKSAAN</th>
                      <th rowspan="3" style="text-align: center">PERSONEL AVSEC</th>
                      <th rowspan="3" style="text-align: center">HASIL</br>PEMERIK-</br>SAAN/</br>TEMUAN</th>
                      <th rowspan="3" style="text-align: center">TEAM</th>
                      <th rowspan="3" style="text-align: center">SHIFT</th>
                      <!-- <th colspan="2" style="text-align: center">STATUS APPROVAL</th>
                      <th rowspan="3" style="text-align: center">Aksi</th> -->

                  </tr>
                  <tr>
                    <th colspan="2" style="text-align: center">DATA PENUMPANG</th>
                    <th rowspan="2" style="text-align: center">JENIS</br>BARANG BAWAAN</th>
                    <th style="text-align: center">PENUM-</br>PANG</th>
                    <th colspan="2" style="text-align: center">BARANG BAWAAN</th>
                    <!-- <th rowspan="2" style="text-align: center">SQUAD LEADER</th>
                    <th rowspan="2" style="text-align: center">SUPERVISOR</th> -->
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
                      $nourut=1;
                      foreach ($random as $data) {                    
                        // echo $data->status_approv." - ";
                            // if (empty($data->status_approv) && ($data->status_approv)<>0) 
                            //   $stapprov = "Not Sent";
                            $idkode = $data->idkode;

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
                                                
                        <td style="text-align: center"><?php if ($data->mtd_periksapax==0) echo " &radic;"; else echo "-"; ?></td>
                        <td style="text-align: center"><?php if ($data->mtd_periksabrg==0) echo " &radic;"; else echo "-"; ?></td>                    
                        <td style="text-align: center"><?php if ($data->mtd_periksabrg==0) echo "-"; else echo " &radic;"; ?></td>                    

                        <td><?php echo $data->personil_pemeriksa; ?></td>

                        <td><?php echo $data->hasil_temuan; ?></td>
                        <td><?php echo $data->team; ?></td>
                        <td><?php echo $data->shift; ?></td>
                        <!-- <td style="text-align: center"><?php echo $data->lokasi; ?></td> -->
                      
                    </tr>
                    <?php
                      }
                    ?>
                  </tbody>

                 <!--  <tfoot>
                  <tr>
                    <th colspan="4">Rendering engine</th>
                    <th colspan="5">Rendering engine</th>
                    <th colspan="4">Rendering engine</th>
                  </tr>
                </tfoot> -->
              </table>
            <!-- </div> -->

          </br>
          <?php
          foreach ($userq as $data) {
            ?>
            <div class="row">                  
              <div class="col-sm-4">  
                <center>SUPERVISOR
                  </br>
                  <img src="<?= base_url(); ?>assets/images/barcode/<?= $data->barcode_approv02; ?>" height="100">
                  </br>
                  (<?= $data->nama_approv02; ?>)
                </center>
              </div>

              <div class="col-sm-4">  
              </div>

              <div class="col-sm-4">
              <!-- <div class="form-group">   -->
                <center>SQUAD LEADER
                </br>
                  <img src="<?= base_url(); ?>assets/images/barcode/<?= $data->barcode_approv01; ?>" height="100">
                  </br>
                  (<?= $data->nama_approv01; ?>)
                </center>
              <!-- </div> -->
              </div>
            </div>
        <?php } ?>
      <!-- </div> -->


    <!-- </div> -->
  </div>
</div>
</div>
</section>
