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
                            <th rowspan="2" style="text-align: center">NO. URUT</th>
                            <th rowspan="2" style="text-align: center">TANGGAL</th>
                            <th rowspan="2" style="text-align: center">JAM</th>
                            <th colspan="4" style="text-align: center">BAGASI TERCATAT YANG DIPERIKSA</th>
                            <th colspan="2" style="text-align: center">METODE PEMERIKSAAN</th>
                            <th rowspan="2" style="text-align: center">PERSONEL AVSEC</th>
                            <!-- <th rowspan="2" style="text-align: center">HASIL</br>PEMERIKSAAN/TEMUAN</th> -->
                            <th rowspan="2" style="text-align: center">HASIL</br>PERIKSA/TEMUAN</th>
                            <th rowspan="2" style="text-align: center">TEAM</th>
                            <th rowspan="2" style="text-align: center">SHIFT</th>
                          </tr>
                          <tr>
                            <th style="text-align: center">NAMA PEMILIK</th>
                            <th style="text-align: center">NO. FLIGHT</th>
                            <th style="text-align: center">JENIS BAGASI</th>
                            <th style="text-align: center">NO. CLAIM BAGASI</th>
                            <th style="text-align: center">MANUAL CHECK</th>
                            <th style="text-align: center">ETD</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php

                      // tgl_request, user_request, nama_form, tgl_inputform, status_approval, ditolak, iduser_approval, tgl_approval, keterangan, team, shift

                         $nourut=1;
                         foreach ($random as $data) {                    

                        // if (($data->status_approval) == '0') 
                        //   $stapprov = "Diterima";
                        // else if (($data->status_approval) == '1') 
                        //   $stapprov = "Ditolak";
                        // else $stapprov = "Belum diverifikasi";
                          ?>
                          <tr>
                            <td style="text-align: center"><?php echo $nourut++; ?></td>
                            <td style="text-align: center"><?php echo date('d-m-Y', strtotime($data->tanggal)); ?></td>                  
                            <td style="text-align: center"><?php echo $data->jam_periksa; ?></td>
                            <td><?php echo $data->namapemilik; ?></td>
                            <td style="text-align: center"><?php echo $data->nopen; ?></td>
                            <td><?php echo $data->jns_bagasi; ?></td>
                            <td><?php echo $data->no_claim; ?></td>

                            <td style="text-align: center"><?php if ($data->mtd_periksabagasi==0) echo " &radic;"; else echo "-"; ?></td>                    
                            <td style="text-align: center"><?php if ($data->mtd_periksabagasi==0) echo "-"; else echo " &radic;"; ?></td>                    

                            <td><?php echo $data->personil_pemeriksa; ?></td>

                            <td><?php echo $data->hasil_temuan; ?></td>
                            <td><?php echo $data->team; ?></td>
                            <td><?php echo $data->shift; ?></td>

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
