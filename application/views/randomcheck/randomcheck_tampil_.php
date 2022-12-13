<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="right_col" role="main">
	<!-- <div class="col-md-8"> -->
	<div class="row tile_count">
        <div class="animated flipInY col-md-12 col-sm-12 col-xs-12">
            <div class="left"></div>
            <!-- <div class="right"> -->
                <h2>RANDOM CHECK & UNPREDICTIBLE ORANG & BARANG DI <?php echo $title; ?></h2>
                <!-- <h3></h3> -->
            <!-- </div> -->
        </div>
    </div>
	<div class="row">
    <div class="col-md-12">
        <form action="<?php base_url(); ?>random_scp2?loka=<?php echo $title; ?>" method="POST">                    
            <button type="submit" class="btn btn-primary" name="submit" style="margin-top: 15px;">
                Tambah Data <span class="fa fa-plus" style="font-size:15px">
                </span>
            </button>
        </form>

      <div class="panel panel-default">
        <!-- <-- .panel-heading -->
        <div class="panel-body">                                  
          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
            <thead>
               	<tr>     
                  	<th rowspan="3" style="text-align: center">NO. URUT</th>
                  	<th rowspan="3" style="text-align: center">TANGGAL</th>
                  	<th rowspan="3" style="text-align: center">JAM</th>
                  	<th colspan="3" style="text-align: center">YANG DIPERIKSA</th>
                  	<th colspan="3" style="text-align: center">METODE PEMERIKSAAN</th>
                  	<th rowspan="3" style="text-align: center">PERSONEL AVSEC</th>
                  	<th rowspan="3" style="text-align: center">HASIL</br>PEMERIKSAAN/TEMUAN</th>
                  	<th rowspan="3" style="text-align: center">LOKASI</th>                  	
              	</tr>
              	<tr>
              		<th colspan="2" style="text-align: center">DATA PENUMPANG</th>
              		<th rowspan="2" style="text-align: center">JENIS BARANG BAWAAN</th>
              		<th style="text-align: center">PENUMPANG</th>
              		<th colspan="2" style="text-align: center">BARANG BAWAAN</th>
              	</tr>
              	<tr>
                  	<th style="text-align: center">NAMA PENUMPANG</th>
                  	<th style="text-align: center">NO. FLIGHT</th>
                  	<th style="text-align: center">MANUAL CHECK</th>
              		<th style="text-align: center">MANUAL CHECK</th>
              		<th style="text-align: center">E T D</th>
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
          </table>
          <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
</div>	<!-- end page -->

<script>
 	$(document).ready(function() {
  		$('#dataTables').DataTable({
   			responsive: true
 		});
	});

 	var today = new Date();
 	var dd = today.getDate()+1;
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            if(dd<10){
              dd='0'+dd
            } 
            if(mm<10){
              mm='0'+mm
            } 

            today = yyyy+'-'+mm+'-'+dd;
            document.getElementById("datefield1").setAttribute("max", today);


</script>