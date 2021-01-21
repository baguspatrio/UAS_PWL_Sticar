<?php $this->load->view('admin/_partials/header.php') ?>
<?php $this->load->view('admin/_partials/navbar.php') ?>
<?php $this->load->view('admin/_partials/sidebar.php') ?>


	
		<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <?php echo $this->session->flashdata('eror') ?>
        	<form action="<?php echo base_url('Admin/aksitambahdriver') ?>" method="post" enctype="multipart/form-data">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data Driver</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama Driver</label>
                <input type="text" id="inputName" class="form-control" required placeholder="Masukkan Nama" name="namaDriver">
              </div>
              <div class="form-group">
                <label for="noTelpon">No Telephone</label>
                <input type="number" id="noTelpon" class="form-control" required placeholder="Masukkan No. Telephone ex:081234567898" name="noTelpon">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" class="form-control" required placeholder="Masukkan Alamat " rows="4" name="alamat"></textarea>
              </div>
           		<div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                 <input type="text" id="pekerjaan" class="form-control" required placeholder="Masukkan Pekerjaan" name="pekerjaan">
              </div>
             <div class="form-group">
                <label for="fotoSim">Foto Sim</label>
                <input type="file" id="fotoSim" class="form-control" required placeholder="Masukkan Foto Sim" name="fotoSim">
              </div>
              <div class="row">
		        <div class="col-12">
		          <button type="cancel" class="btn btn-secondary" onclick="javascript:window.location='<?php echo base_url('Admin/tampildatadriver') ?>';">Cancel</button>
		          <input type="submit" value="SIMPAN" class="btn btn-success float-right">
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