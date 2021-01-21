
<?php $this->load->view('admin/_partials/header.php') ?>
<?php $this->load->view('admin/_partials/navbar.php') ?>
<?php $this->load->view('admin/_partials/sidebar.php') ?>


	
		<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
        	<form action="<?php echo base_url('Iklan/aksitambahiklan') ?>" method="post" enctype="multipart/form-data">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data pengiklan</h3>
              <!-- <?php echo $error; ?> -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
      			    <label>Nama Driver</label>
                <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
      					 <div class="form-group">
                          <select class="form-control js-example-basic-single select2"name="idDriver" required>
                             <?php foreach ($driver as $key ) {?>
                  						<option value="<?php echo $key->idDriver ?>"><?php echo $key->namaDriver ?></option>
                  						<?php } ?>
       
                          </select>
                        </div>
      			  </div>
               
              <div class="form-group">
      			    <label>Nama Produk</label>
      					 <div class="form-group">
                          <select class="form-control js-example-basic-single select2"name="idPengiklan" required>
                             <?php foreach ($pengiklan as $key ) {?>
                  						<option value="<?php echo $key->idPengiklan ?>"><?php echo $key->namaProduk ?></option>
                  						<?php } ?>
       
                          </select>
                        </div>
      			  </div>
              <div class="form-group">
                <label for="type">Foto Kendaraan</label>
                <input type="file" id="type" class="form-control" required placeholder="Masukkan Tipe Kendaraan" name="fotoKendaraan" value="<?= set_value('fotoKendaraan') ?>">
              </div>
              <div class="row">
		        <div class="col-12">
		          <button type="cancel" class="btn btn-secondary" onclick="javascript:window.location='<?php echo base_url('admin/Admin/tampildatapengiklan') ?>';">Cancel</button>
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
<script type="text/javascript">
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

