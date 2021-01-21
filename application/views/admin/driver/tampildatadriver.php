<?php $this->load->view('admin/_partials/header.php') ?>
<?php $this->load->view('admin/_partials/navbar.php') ?>
<?php $this->load->view('admin/_partials/sidebar.php') ?>


<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <!-- Main row -->
        
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
           <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Driver Sticar</h3>
              </div>
         
                <?php echo  $this->session->flashdata('cek') ?>
               <?php echo $this->session->flashdata('simpan'); ?>
                <?php echo $this->session->flashdata('edit'); ?>
                <?php echo $this->session->flashdata('hapus'); ?>
                <?php echo $this->session->flashdata('gagal'); ?>
              
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA DRIVER</th>
                    <th>NO. TELEPHONE</th>
                    <th>ALAMAT</th>
                    <th>PEKERJAAN</th>
                    <th>FOTO SIM</th>
                    <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>

                  	<?php $no=1;?>
                  	<?php foreach ($driver as $key) {?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                  	<td><?php echo  $key->namaDriver?></td>
          					<td><?php echo  $key->noTelpon ?></td>
          					<td><?php echo $key->alamat; ?></td>
          					<td><?php echo  $key->pekerjaan ?></td>
          					<td><img width="200" height="200" src="<?php echo base_url('gambar/driver/').$key->fotoSim ?>"></td>
          					<td><a class="btn btn-primary" href="<?php echo base_url('Admin/editdriver/'.$key->idDriver)  ?>" >EDIT</a><a class="btn btn-danger" href="<?php echo base_url('Admin/deletedriver/'.$key->idDriver) ?>"onclick="return confirm('Apakah Anda Yakin Akan Ingin Menghapus Data Ini ?')">DELETE</a></td>  
                  </tr>
                 	<?php } ?>
			
			
		
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
      </div><!-- /.container-fluid -->
    </section>
	

<?php $this->load->view('admin/_partials/footer.php') ?>