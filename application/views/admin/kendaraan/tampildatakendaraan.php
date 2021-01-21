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
                <h3 class="card-title">Data Kendaraan Sticar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php echo $this->session->flashdata('simpan'); ?>
                <?php echo $this->session->flashdata('edit'); ?>
                <?php echo $this->session->flashdata('hapus'); ?>
                <?php echo $this->session->flashdata('gagal'); ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA DRIVER</th>
                    <th>MEREK KENDARAAN</th>
                    <th>TYPE KENDARAAN</th>
                    <th>NO. PLAT</th>
                    <th>TAHUN KENDARAAN</th>
                    <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>

                  	<?php $no=1;?>
                  	<?php foreach ($kendaraan as $key) {?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                  	<td><?php echo  $key->namaDriver?></td>
                    <td><?php echo $key->namaMerk ?></td>
          					<td><?php echo  $key->namaType ?></td>
          					<td><?php echo $key->nopol ?></td>
                    <td><?php echo  $key->tahunKendaraan ?></td>
          					<td><a class="btn btn-primary" href="<?php echo base_url('Admin/editkendaraan/'.$key->idKendaraan)  ?>" >EDIT</a><a class="btn btn-danger" href="<?php echo base_url('Admin/deletekendaraan/'.$key->idKendaraan) ?>"onclick="return confirm('Apakah Anda Yakin Akan Ingin Menghapus Data Ini ?')">DELETE</a></td>  
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