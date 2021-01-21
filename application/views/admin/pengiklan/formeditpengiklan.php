
<?php $this->load->view('admin/_partials/header.php') ?>
<?php $this->load->view('admin/_partials/navbar.php') ?>
<?php $this->load->view('admin/_partials/sidebar.php') ?>


	
		<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
        	<form action="<?php echo base_url('Display/aksieditpengiklan') ?>" method="post" enctype="multipart/form-data">
        		 <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('error'); ?>
        </div>
        <?php endif; ?>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Edit Pengiklan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
           
            <div class="card-body">
              <div class="form-group">
              	<input type="hidden" name="idPengiklan" value="<?php echo $pengiklan->idPengiklan ?>">
                <label for="inputName">Nama pengiklan</label>
                <input type="text" id="inputName" class="form-control" required placeholder="Masukkan Nama" name="namaPengiklan" value="<?php echo $pengiklan->namaPengiklan ?>">
              </div>
              <div class="form-group">
                <label for="inputName">Nama Produk</label>
                <input type="text" id="inputName" class="form-control" required placeholder="Masukkan Nama Produk" name="namaProduk" value="<?php echo $pengiklan->namaProduk ?>">
              </div>
              <div class="form-group">
                <label for="inputName">Email</label>
                <input type="email" id="inputName" class="form-control" required placeholder="Masukkan Email" name="email" value="<?php echo $pengiklan->emailPengiklan ?>">
              </div>
              <div class="form-group">
                <label for="noTelpon">No Telephone</label>
                <input type="number" id="noTelpon" class="form-control" required placeholder="Masukkan No. Telephone ex:081234567898" name="noTelpon"value="<?php echo $pengiklan->noTelponpengiklan?>">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" class="form-control" required placeholder="Masukkan Alamat " rows="4" name="alamat"><?php echo $pengiklan->alamat?></textarea>
              </div>
              <div class="form-group">
                <label for="fotoProduk">Foto Produk</label>
                <input type="file" id="fotoProduk" class="form-control" placeholder="Masukkan Foto SIM" name="fotoProduk" value="<?php echo $pengiklan->fotoProduk ?>">
                 <div class="form-group">
 					  <img src="<?php echo base_url('gambar/pengiklan/').$pengiklan->fotoProduk ?>"  class="img-thumbnail" width="150" height="180">
			    </div>
              </div>
           		<div class="form-group">
                <label for="inputStatus">Posisi Iklan</label>
                <select id="inputStatus" class="form-control custom-select" name="posisiIklan">
                  	<option value="<?php echo $pengiklan->posisiIklan ?>"><?php echo $pengiklan->posisiIklan ?></option>
                  	<option value="Rear Window">Rear Window</option>
					<option value="Partial Back">Partial Back</option>
					<option value="Full Back">Full Back</option>
					<option value="Half Wrap">Half Wrap</option>
					<option value="Full Wrap">Full Wrap</option>
                </select>
              </div>
              
              <div class="row">
		        <div class="col-12">
		          <button type="cancel" class="btn btn-secondary" onclick="javascript:window.location='<?php echo base_url('admin/Admin/tampildatapengiklan') ?>';">Cancel</button>
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
