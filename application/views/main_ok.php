<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>     
                      <th rowspan="2" style="text-align: center">NO. URUT</th>
                      <th rowspan="2" style="text-align: center">TANGGAL</th>
                      <th rowspan="2" style="text-align: center">JAM</th>
                      <th colspan="3" style="text-align: center">YANG DIPERIKSA</th>
                      <th colspan="3" style="text-align: center">METODE PEMERIKSAAN</th>
                      <th rowspan="2" style="text-align: center">PERSONEL AVSEC</th>
                      <th rowspan="2" style="text-align: center">HASIL</br>PEMERIKSAAN/TEMUAN</th>
                      <th rowspan="2" style="text-align: center">LOKASI</th>                    
                    </tr>
                    <tr>
                        <th style="text-align: center">NAMA PENUMPANG</th>
                        <th style="text-align: center">NO. FLIGHT</th>
                        <th style="text-align: center">JENIS BARANG BAWAAN</th>
                        <th style="text-align: center">MANUAL CHECK (PAX)</th>
                        <th style="text-align: center">MANUAL CHECK</th>
                        <th style="text-align: center">ETD</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $nourut=1;
                      foreach ($random as $data) {                    
                        if ($data->lokasi==0) {
                          $lokasi ="SCP II";
                        } else if ($data->lokasi==1) {
                          $lokasi ="SCP Transit";
                        } else {
                          $lokasi ="SCP Internasional";
                        }
                    ?>
                    <tr>
                      <td style="text-align: center"><?php echo $nourut++; ?></td>
                        <td style="text-align: center"><?php echo date('d-m-Y', strtotime($data->tanggal)); ?></td>                  
                        <td style="text-align: center"><?php echo $data->jam_periksa; ?></td>
                        <td style="text-align: center"><?php echo $data->namapax; ?></td>
                        <td style="text-align: center"><?php echo $data->nopen; ?></td>
                        <td style="text-align: center"><?php echo $data->jenisbrg_bawaan; ?></td>
                        
                        <td style="text-align: center"><?php if ($data->mtd_periksapax==0) echo " &radic;"; else echo "-"; ?></td>
                        <td style="text-align: center"><?php if ($data->mtd_periksabrg==0) echo " &radic;"; else echo "-"; ?></td>                    
                        <td style="text-align: center"><?php if ($data->mtd_periksabrg==0) echo "-"; else echo " &radic;"; ?></td>                    

                        <td style="text-align: center"><?php echo $data->personil_pemeriksa; ?></td>

                        <td style="text-align: center"><?php echo $data->hasil_temuan; ?></td>
                        <td style="text-align: center"><?php echo $lokasi; ?></td>
                      
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




