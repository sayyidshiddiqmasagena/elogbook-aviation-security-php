<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2"> -->
          <div class="col-sm-12">
            <h4>VERIFIKASI RANDOM CHECK & UNPREDICTIBLE ORANG DAN BARANG DI SCP INTERNASIONAL</h4>
          </div><!-- 
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div> -->
        <!-- </div> -->
      </div><!-- /.container-fluid -->
    </section>

    <?php 
      // $tgl= date('Y-m-d', strtotime($this->session->userdata('tglcari_rdbagasi')));
      $tgl= $this->session->userdata('tglcari_rdorang');
    ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <!-- <form> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <form action="<?php base_url(); ?>randomorang_inter_search" method="POST">
                        <div class="form-group">
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">                            
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>                                                        
                            <input type="text" name="tglcari_rdorang" class="form-control datetimepicker-input" data-target="#reservationdate"  value="<?php if ($tgl == NULL ) { echo ""; } else { echo $tgl;} ?>"/>
                              <button type="submit" class="btn btn-secondary" name="rdorang" style="width:100px;">Cari!</button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="col-sm-4">
                      <form action="<?php base_url(); ?>randomtampil_scpinter" method="POST">                    
                        <div class=" form-group col-md-3">
                          <button type="submit" class="btn btn-danger btn btn-block" name="reset">
                            Reset <span class="glyphicon glyphicon-refresh" style="font-size:15px">
                            </span>
                          </button>
                        </div>
                      </form>
                    </div>

                  </div>
                </div>  

                <a href="<?php base_url(); ?>print_scpinter" rel="noopener" target="_blank" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>
              
              <!-- /.card-header -->
              <div class="card-body">
                <!-- <table id="example1" class="table table-bordered table-striped table-hover"> -->
                  <table id="example4" class="table table-striped projects table-bordered display no-wrap" style="width:100%">
                  <thead>
                    <tr>     
                      <th rowspan="2" style="text-align: center">NO. URUT</th>
                      <th rowspan="2" style="text-align: center">TANGGAL REQUEST</th>
                      <th rowspan="2" style="text-align: center">USER REQUEST</th>
                      <th rowspan="2" style="text-align: center">NAMA FORM</th>
                      <th rowspan="2" style="text-align: center">TANGGAL INPUT</th>
                      <th rowspan="2" style="text-align: center">TEAM</th>
                      <th rowspan="2" style="text-align: center">SHIFT</th>
                      <th colspan="2" style="text-align: center">STATUS</th>
                      <th rowspan="2" style="text-align: center">AKSI</th>
                  </tr>
                  <tr>
                      <th style="text-align: center">SQUAD LEADER</th>
                      <th style="text-align: center">SUPERVISOR</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php
                      
                      // tgl_request, user_request, nama_form, tgl_inputform, status_approval, ditolak, iduser_approval, tgl_approval, keterangan, team, shift
                      // 0 = proses approv
                      // 1 = diterima
                      // 2 = ditolak

                      $nourut=1;
                      foreach ($ver_rcscpinter as $data) {                    

                        if (($data->st_approv01) == '0') 
                          $stapprov1 = "Proses";
                        else if (($data->st_approv01) == '1') 
                          $stapprov1 = "Diterima";
                        else if (($data->st_approv01) == '2') 
                          $stapprov1 = "Ditolak";
                        else $stapprov1 = "Belum dikirim";

                        if (($data->st_approv02) == '0') 
                          $stapprov2 = "Proses";
                        else if (($data->st_approv02) == '1') 
                          $stapprov2 = "Diterima";
                        else if (($data->st_approv02) == '2') 
                          $stapprov2 = "Ditolak";
                        else $stapprov2 = "Belum dikirim";

                        $idkode=$data->idkode;
                    ?>
                    <tr>
                        <td style="text-align: center"><?php echo $nourut++; ?></td>
                        <td style="text-align: center"><?php echo date('d-m-Y', strtotime($data->tgl_request)); ?></td>
                        <td><?php echo $data->user_request; ?></td>
                        <td><?php echo $data->nama_form; ?></td>
                        <td style="text-align: center"><?php echo date('d-m-Y', strtotime($data->tgl_inputform)); ?></td>
                        <td style="text-align: center"><?php echo $data->team; ?></td>
                        <td><?php echo $data->shift; ?></td>
                        <td><?php echo $stapprov1; ?></td>
                        <td><?php echo $stapprov2; ?></td>
                        <td>
                          <a class="m-1 btn btn-info btn-sm openPopup" href="javascript:void(0);" data-href="<?php base_url()?>randomtabel_scpinter?idkode=<?php echo $idkode ?>" title="Lihat">
                            <i class="fas fa-eye"></i>
                          </a>

                         <!--  <button data-href="<?php //base_url()?>randomtabel_bagasi1?idkode=<?php //echo $idkode ?>" class="m-1 btn btn-primary btn-sm openPopup" title="Lihat">
                            <i class='fa fa-eye'></i>
                          </button> -->

                         <!--  <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-approval" title="Konfirmasi">
                                  <span class="fa fa-recycle"></span></button> -->

                          <a class="m-1 btn btn-warning btn-sm approval" href="javascript:void(0);" data-href="<?php base_url()?>rcscpinter_konfirm?idkode=<?php echo $idkode ?>">
                            <i class="fas fa-recycle"></i>
                          </a>

                        </td>
                        <!-- <td style="text-align: center"><?php echo $data->lokasi; ?></td> -->
                      
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

  <!-- MODAL -->
    <div class="modal fade" id="modal-xl">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">VERIFIKASI RANDOM CHECK & UNPREDICTIBLE ORANG DAN BARANG DI SCP INTERNASIONAL</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-auto">
            
          <!-- Isi Modal -->
            <!-- isi Modal CONTROLLED BY JAVASCRIPT -->
          <!--/ Isi Modal -->

          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <!-- MODAL -->
    <div class="modal fade" id="modal-sm">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">KONFIRM. VERIFIKASI</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-auto">
            
          <!-- Isi Modal -->
            <!-- isi Modal CONTROLLED BY JAVASCRIPT -->
          <!--/ Isi Modal -->

          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <div class="modal fade" id="modal-approval">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title">Kirim Approval</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form" method="POST" action="<?php base_url();?>verifikasi_approv_scptransit">
          <div class="modal-body">
            
            <!-- <div class="form-group row"> -->
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Konfirmasi Verifikasi : </label>
                  <select class="form-control">
                    <option value='' selected>- - Pilih Konfirmasi Verifikasi - -</option>
                    <option value='1'>Diterima</option>
                    <option value='2'>Ditolak</option>
                  </select>
                </div>
              </div>
            <!-- </div> -->

            <!-- <div class="form-group row"> -->
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Catatan :</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." required></textarea>
                </div>
              </div>            
            <!-- </div> -->

            <input class="form-control" type="text" name="id_kode" value="<?php echo $idkode;?>">  
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Konfirmasi</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
