<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>


<script type="text/javascript">
	function isNumberKey(evt)
	{
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;

		return true;
	}
</script>

<style>
	.center_div{
		margin: 0 auto;
		width:80%;
	}
</style>

<!-- <div class="loading" id="wait"><img src='<?= base_url();?>archive/image/demo_wait.gif' width="64" height="64" /><br>Loading..</div> -->

<!-- <div style="margin-bottom: 30px; margin-top: 20px;"> -->
<div class="right_col" role="main">
	<!-- <div class="col-md-8"> -->
	<div class="row tile_count">
        <div class="animated flipInY col-md-12 col-sm-10 col-xs-10">
            <div class="left"></div>
            <div class="right">
                <h2>FORM PENGISIAN RANDOM CHECK & UNPREDICTIBLE</h2>
                <h2>ORANG & BARANG DI SCP II</h2>
            </div>
        </div>
    </div>
	<div class="row">
		<form class="form-horizontal" id="perorangan" method="POST" action="<?php base_url();?>random_insert" enctype="multipart/form-data">		
			<div class="col-md-6">
				
				<!-- idno, tanggal, namapax, nopen, , , mtd_periksabrg, personil_pemeriksa, hasil_temuan, lokasi -->
				<!-- <div class="form-group">
					<div class="container center_div">
						<label class="control-label col-md-3">Lokasi</label>
						<div class="col-md-6">
							<select class="form-control" name="lokasi">		                  	
			                  	<option value="0">SCP II</option>
			               		<option value="1">SCP Transit</option>
			               		<option value="2">SCP Internasional</option>
			               		SCP AKSES KARYAWAN
			                </select>
						</div>
					</div>
				</div> -->

				<div class="form-group">
					<div class="container center_div">
						<label class="control-label col-md-3">Jam</label>
					    <div class="col-md-6">
		                    <!-- <input type='text' class="form-control" name="tgl_flight" maxlength="16" id='tgl_flight' placeholder="YYYY-MM-DD HH:MM"> -->		                    
		                    <input type="text" name="jam" id="jam" class="form-control time" placeholder="00:00" style="width:80px;" onchange="isValidate()">
		                    <input class="form-control" type="text" name="lokasi" value="<?php echo $lokasi; ?>">
		                </div>
					</div>
				</div>

				<div class="form-group">
					<div class="container center_div">
						<?php
							if ($sform=="karyawan") {
						?>
						<label class="control-label col-md-3">Nama Karyawan</label>
						<?php
							} else {
						?>
						<label class="control-label col-md-3">Nama Penumpang</label>
						<?php
							}
						?>
						<div class="col-md-6">
							<input class="form-control" type="text" name="namapax" >
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="container center_div">
						<?php
							if ($sform=="karyawan") {
						?>
						<label class="control-label col-md-3">Instansi</label>
						<?php
							} else {
						?>
						<label class="control-label col-md-3">No. Flight</label>
						<?php
							}
						?>
						<div class="col-md-6">
							<input class="form-control" type="text" name="nopen" onkeyup="this.value = this.value.toUpperCase();">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="container center_div">
						<label class="control-label col-md-3">Jenis Barang Bawaan</label>
						<div class="col-md-6">
							<input class="form-control" type="text" name="jenisbrg_bawaan" >
						</div>
					</div>
				</div>
				
				<!-- <hr>			 -->
				<div class="form-group">
					<div class="container center_div">
						<label class="control-label col-md-3">Metode Pemeriksaan Penumpang</label>
						<div class="col-md-9">
							<label class="radio-inline"><input type="radio" name="mtdperiksapax" value="0" checked>Manual Check</label>
							<label class="radio-inline"><input type="radio" name="mtdperiksapax" value="1">Tidak Manual Check</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="container center_div">
						<label class="control-label col-md-3">Metode Pemeriksaan Barang Bawaan</label>
						<div class="col-md-9">
							<label class="radio-inline"><input type="radio" name="mtdperiksabrg" value="0" >Manual Check</label>
							<label class="radio-inline"><input type="radio" name="mtdperiksabrg" value="1" checked>ETD</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="container center_div">
						<label class="control-label col-md-3">Personil Pemeriksa</label>
						<div class="col-md-6">
							<input class="form-control" type="text" name="personil_pemeriksa"  value="Ansar" readonly>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="container center_div">
						<label class="control-label col-md-3">Hasil Pemeriksaan</label>
						<div class="col-md-6">
							<input class="form-control" type="text" name="hasil_temuan" >
						</div>
					</div>
				</div>
				


				<hr>			
				<div class="form-group">
					<div class="container center_div">
						<div class="col-md-3"></div>
						<div class="col-md-9">
							<button type="submit" class="btn btn-info" name="per_save" id="per_save">
								<span class="glyphicon glyphicon-save"></span> Save
							</button>

							<button type="reset" class="btn btn-danger" name="per_cancel" id="per_cancel">
								<span class="glyphicon glyphicon-repeat"></span> Cancel
							</button>
						</div>
					</div>
				</div>
			
			</div>
		</form>
	</div>
</div>	<!-- end page -->



<script>	
	
	$("#wait").hide();

	$(document).ready(function(){
		$( "#namalengkap" ).autocomplete({
	      source: "<?= site_url('main/get_identitas');?>",
	      select: function (event, ui) {
	        $("#no_identitas").val(ui.item.no_identitas);
	        $("#namalengkap").val(ui.item.nama);
	        $("#instansi").val(ui.item.instansi);
	        $("#notlp").val(ui.item.telpon);
	        return false;
	      }
	    });
	  });

	$(document).ready(function(){
    $( "#nopen" ).autocomplete({
	      source: "<?= site_url('main/get_nopen');?>",
	      select: function (event, ui) {
	        $("#nopen").val(ui.item.nopen);
	        $("#tgl_flight").val(ui.item.schedule);
	        $("#gate").val(ui.item.gate);
	        $("#opr_id").val(ui.item.opr_id);        
	        $("#rute").val(ui.item.destination);
	        $("#tgl_flight").val(ui.item.schedule);
	        return false;
	      }
	    });
	  });

	$('#per_cancel').click(function(){
		location.replace("datasenpi");
		$('#perorangan').hide(1000);
	});


	$(document).ready(function(){

                $('#tgl_flight').datetimepicker({
                 // format : 'DD/MM/YYYY H:m:s'
                 format : 'YYYY-MM-DD HH:mm'
                });

                // $('#tgl_flight').data("DateTimePicker").date('2017-12-13 12:14:10');
            });


</script>

<script type="text/javascript">
    $(document).ready(function(){
      $('.time').mask('00:00');
     });
    
</script>