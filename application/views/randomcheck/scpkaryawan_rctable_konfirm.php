<!-- <section class="content">
  <div class="container-fluid"> -->
  <div class="row">
      <div class="col-12">  

        <form class="form" method="POST" action="<?php base_url();?>verifikasi_approv_scpkaryawan">
          <div class="modal-body">
            <?php
              foreach ($userq as $data) {
            ?>

            <input class="form-control" type="hidden" name="iduser_approv01" value="<?= $data->iduser_approv01; ?>">
            <input class="form-control" type="hidden" name="iduser_approv02" value="<?= $data->iduser_approv02; ?>">

            <?php
              }
            ?>

            <!-- <div class="form-group row"> -->
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Konfirmasi Verifikasi : </label>
                  <select class="form-control" name="konfirm">
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
                  <textarea class="form-control" rows="3" name="catatan" placeholder="Enter ..."></textarea>
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
    </div>
  <!-- </div>
</section>
 -->