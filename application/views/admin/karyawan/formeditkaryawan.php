<?php $this->load->view('admin/_partials/header.php') ?>
<?php $this->load->view('admin/_partials/navbar.php') ?>
<?php $this->load->view('admin/_partials/sidebar.php') ?>


	
		<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
        	<form action="<?php echo base_url('Admin/aksieditkaryawan') ?>" method="post" enctype="multipart/form-data">
        		 <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('error'); ?>
        </div>
        <?php endif; ?>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Profile</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
           
            <div class="card-body">
              <div class="form-group">
              	<input type="hidden" name="id" value="<?php echo $karyawan->id ?>">
                <label for="inputName">Nama Karyawan</label>
                <input type="text" id="inputName" class="form-control" required placeholder="Masukkan Nama" name="nama" value="<?php echo $karyawan->nama ?>">
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" class="form-control" required placeholder="Masukkan username" name="username"value="<?php echo $karyawan->username ?>">
              </div>
               <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" required placeholder="Masukkan Password" name="password"value="<?php echo $karyawan->password ?>">
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