<?php $this->load->view('admin/_partials/header.php') ?>
<?php $this->load->view('admin/_partials/navbar.php') ?>
<?php $this->load->view('admin/_partials/sidebar.php') ?>


	
		<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
        	<form action="<?php echo base_url('Display/aksitambahpengiklan') ?>" method="POST" enctype="multipart/form-data">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data pengiklan</h3>
              <?php echo $error; ?>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama Pengiklan</label>
                <input type="text" id="inputName" class="form-control" required placeholder="Masukkan Nama" name="namaPengiklan" value="<?= set_value('namaPengiklan') ?>">
              </div>
               <div class="form-group">
                <label for="inputName">Nama Produk</label>
                <input type="text" id="inputName" class="form-control" required placeholder="Masukkan Nama Produk" name="namaProduk"value="<?= set_value('namaProduk') ?>">
              </div>
              <div class="form-group">
                <label for="inputName">Email</label>
                <input type="email" id="inputName" class="form-control" required placeholder="Masukkan Email" name="email"value="<?= set_value('email') ?>">
              </div>
              <div class="form-group">
                <label for="noTelpon">No Telephone</label>
                <input type="number" id="noTelpon" class="form-control" required placeholder="Masukkan No. Telephone ex:081234567898" name="noTelpon" value="<?= set_value('noTelpon') ?>">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" class="form-control" required placeholder="Masukkan Alamat " rows="4" name="alamat" ><?= set_value('alamat') ?></textarea>
              </div>
              <div class="form-group">
                <label for="fotoProduk">Foto Produk</label>
                <input type="file" id="fotoProduk" class="form-control" required placeholder="Masukkan Foto Produk" name="fotoProduk">
              </div>
              <div class="form-group">
                <label for="inputStatus">Posisi Iklan</label>
                <select id="inputStatus" class="form-control select2" name="posisiIklan">
                  	<option selected disabled>Pilih Salah Satu</option>
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

