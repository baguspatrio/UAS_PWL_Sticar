<?php $this->load->view('admin/_partials/header.php') ?>
<?php $this->load->view('admin/_partials/navbar.php') ?>
<?php $this->load->view('admin/_partials/sidebar.php') ?>


	
		<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
        	<form action="<?php echo base_url('Admin/aksieditdriver') ?>" method="post" enctype="multipart/form-data">
        		 <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('error'); ?>
        </div>
        <?php endif; ?>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Edit Driver</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
           
            <div class="card-body">
              <div class="form-group">
              	<input type="hidden" name="idDriver" value="<?php echo $driver->idDriver ?>">
                <label for="inputName">Nama Driver</label>
                <input type="text" id="inputName" class="form-control" required placeholder="Masukkan Nama" name="namaDriver" value="<?php echo $driver->namaDriver ?>">
              </div>
              <div class="form-group">
                <label for="noTelpon">No Telephone</label>
                <input type="number" id="noTelpon" class="form-control" required placeholder="Masukkan No. Telephone ex:081234567898" name="noTelpon"value="<?php echo $driver->noTelpon ?>">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" class="form-control" required placeholder="Masukkan Alamat " rows="4" name="alamat"><?php echo $driver->alamat?></textarea>
              </div>
           		<div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                 <input type="text" id="pekerjaan" class="form-control" required placeholder="Masukkan Pekerjaan" name="pekerjaan" value="<?php echo $driver->pekerjaan ?>" >
              </div>
              <div class="form-group">
                <label for="fotoSim">Foto SIM</label>
                <input type="file" id="fotoSim" class="form-control" placeholder="Masukkan Foto SIM" name="fotoSim" value="<?php echo $driver->fotoSim ?>">
                 <div class="form-group">
 					  <img src="<?php echo base_url('gambar/driver/').$driver->fotoSim ?>"  class="img-thumbnail" width="150" height="180">
 					
			    </div>
              </div>
              <div class="row">
		        <div class="col-12">
		          <button type="cancel" class="btn btn-secondary" onclick="javascript:window.location='<?php echo base_url('admin/Admin/tampildatadriver') ?>';">Cancel</button>
		          <input type="submit" value="UPDATE" class="btn btn-success float-right">
		       </div>
              
            </div>
            <!-- /.card-body -->
          </div>
      </form>
          <!-- /.card -->
        </div>
        
      </div>
    </section>
    <!-- /.content -->
		

<?php $this->load->view('admin/_partials/footer.php') ?>