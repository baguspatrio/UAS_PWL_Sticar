<?php $this->load->view('admin/_partials/header.php') ?>
<?php $this->load->view('admin/_partials/navbar.php') ?>
<?php $this->load->view('admin/_partials/sidebar.php') ?>


	
		<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
        	<form action="<?php echo base_url('Iklan/aksieditiklan') ?>" method="post" enctype="multipart/form-data">
        		 <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('error'); ?>
        </div>
        <?php endif; ?>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Edit Iklan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
           
            <div class="card-body">
              <div class="form-group">
              	<input type="hidden" name="idIklan" value="<?php echo $iklan->idIklan ?>">
                 <label>Nama Driver</label>
                          <select class="form-control js-example-basic-single select2 "name="idDriver" required>
                          	<option value="<?php echo $iklan->idDriver ?>"><?php echo $iklan->namaDriver ?></option>

                             <?php foreach ($driver as $key ) {?>
                  			<option value="<?php echo $key->idDriver ?>"><?php echo $key->namaDriver ?></option>
                  			<?php } ?>
                     </select>
              </div>
              <div class="form-group">
                 <label>Nama Produk</label>
                          <select class="form-control js-example-basic-single select2 "name="idPengiklan" required>
                          	<option value="<?php echo $iklan->idPengiklan ?>"><?php echo $iklan->namaProduk ?></option>
                             <?php foreach ($pengiklan as $key ) {?>
                  			<option value="<?php echo $key->idPengiklan ?>"><?php echo $key->namaProduk?></option>
                  			<?php } ?>
                     </select>
              </div>
              <div class="form-group">
                <label for="fotoSim">Foto SIM</label>
                <input type="file" id="fotoSim" class="form-control" placeholder="Masukkan Foto SIM" name="fotoKendaraan" value="<?php echo $iklan->fotoKendaraan ?>">
                 <div class="form-group">
 					  <img src="<?php echo base_url('gambar/iklan/').$iklan->fotoKendaraan ?>"  class="img-thumbnail" width="150" height="180">
 					
			    </div>
              </div>
              <div class="row">
		        <div class="col-12">
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

<script type="text/javascript">
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>