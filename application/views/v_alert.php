<div class="content-wrapper">
    
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success');?>">
      
    </div>




    <!-- <?php if ($this->session->flashdata('success')) { ?>
    <div class="row-md-2">
    <div class="col-md-4">
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Percobaan!</strong> <?= $this->session->flashdata('success');?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
    </div>   
    </div>
    <?php } ?> -->



    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">            
            <div class="card card-info">
              
              <form method="POST" action="<?php base_url();?>alerttampil" enctype="multipart/form-data">
              <div class="center_div">
                <div class="card-body">

                  <div class="form-group">
                    <label>Team</label>
                      <select class="form-control" name="team" style="width: 100%;">
                        <option value="ALPHA">ALPHA</option>
                        <option value="BRAVO">BRAVO</option>
                        <option value="CHARLIE">CHARLIE</option>
                        <option value="DELTA">DELTA</option>
                        <option value="ECHO">ECHO</option>
                      </select>
                  </div>
                  
                  <div class="form-group">
                    <label>Tanggal</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="tanggal" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                  </div>

                  <hr>
                  <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <!-- <button type="button" class="btn btn-danger float-right" onclick="Swal('Heloo boss','coba','success')">Coba</button> -->

                      <button type="button" class="btn btn-primary" onclick="Swal.fire('Good job!','You clicked the button!','success')">apajii</button>
                  </div>                  
                </div>
              </div>
              </form>

            </div>



        </div>
      </div>
    </section>
  </div>

  <script>
    <?php if ($this->session->set_flashdata('success')) { ?>
      var isi ='Berhasil simpan data';
      Swal.fire({
        icon: 'success',
        title: 'berhasil',
        text: 'apajiii',
      })
    <?php } ?>
  </script>