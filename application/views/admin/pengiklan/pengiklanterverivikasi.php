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
                <h3 class="card-title">Data Pengiklan Sticar</h3>
              </div>
               <?php echo $this->session->flashdata('simpan'); ?>
                <?php echo $this->session->flashdata('edit'); ?>
                <?php echo $this->session->flashdata('hapus'); ?>
                <?php echo $this->session->flashdata('gagal'); ?>
                 <?php echo  $this->session->flashdata('cek') ?>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA PENGIKLAN</th>
                    <th>NAMA PRODUK</th>
                    <th>EMAIL</th>
                    <th>NO. TELEPHONE</th>
                    <th>ALAMAT</th>
                    <th>FOTO PRODUK</th>
                    <th>POSISI IKLAN</th>
                    <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>

                  	<?php $no=1;?>
                  	<?php foreach ($pengiklan as $key) {?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                  	<td><?php echo  $key->namaPengiklan?></td>
                    <td><?php echo $key->namaProduk ?></td>
                    <td><?php echo $key->emailPengiklan; ?></td>
          					<td><?php echo  $key->noTelponpengiklan ?></td>
          					<td><?php echo $key->alamat; ?></td>
          					<td><img class="img-fluid " src="<?php echo base_url('gambar/pengiklan/').$key->fotoProduk ?>"></td>
                    <td><?php echo  $key->posisi ?></td>
          					<td><a class="btn btn-danger" href="<?php echo base_url('Display/deletepengiklan/'.$key->idPengiklan) ?>"onclick="return confirm('Apakah Anda Yakin Akan Ingin Menghapus Data Ini ?')">DELETE</a></td>  
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