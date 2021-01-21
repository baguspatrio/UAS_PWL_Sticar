
<?php $this->load->view('admin/_partials/header.php') ?>
<?php $this->load->view('admin/_partials/navbar.php') ?>
<?php $this->load->view('admin/_partials/sidebar.php') ?>


	
		<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
        	<form action="<?php echo base_url('Admin/aksitambahkaryawan') ?>" method="POST" enctype="multipart/form-data">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data Karyawan</h3>
              <!-- <?php echo $error; ?> -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body"> 
              <div class="form-group">
                <label for="inputName">Nama Karyawan</label>
                <input type="text" id="inputName" class="form-control" required placeholder="Masukkan Nama Karyawan" name="nama"value="<?= set_value('nama') ?>">
              </div>
              <div class="form-group">
                <label for="type">Username</label>
                <input type="text" id="type" class="form-control" required placeholder="Masukkan Username" name="username" value="<?= set_value('username') ?>">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" class="form-control" required placeholder="Masukkan Password" name="password" value="<?= set_value('password') ?>">
              </div>
              <div class="form-group">
                <label for="inputStatus">Level</label>
                <select id="inputStatus" class="form-control custom-select" name="level">
                  <option value="admin">Admin</option>
                  <option value="karyawan">Karyawan</option>
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
<script type="text/javascript">
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

