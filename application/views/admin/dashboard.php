<?php $this->load->view('admin/_partials/header.php') ?>
<?php $this->load->view('admin/_partials/navbar.php') ?>
<?php $this->load->view('admin/_partials/sidebar.php') ?>


<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $totaliklan ?></h3>

                <p>Total Iklan</p>
              </div>
              <div class="icon">
                <i class="fas fa-ad"></i>
              </div>
              <a href="<?php echo base_url('admin') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $totaldriver ?></h3>

                <p>Total Driver</p>
              </div>
              <div class="icon">
               <i class="fas fa-street-view"></i>
              </div>
              <a href="<?php echo base_url('tampildatadriver') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $totalpengiklan ?></h3>

                <p>Total Pengiklan</p>
              </div>
              <div class="icon">
                 <i class="fas fa-user-tie"></i>
              </div>
              <a href="<?php echo base_url('tampildatapengiklan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $totalkendaraan ?></h3>

                <p>Total Kendaraan</p>
              </div>
              <div class="icon">
                <i class="fas fa-car"></i>
              </div>
              <a href="<?php echo base_url('tampildatakendaraan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
           <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Iklan yang sedang Berjalan</h3>
                <h5 class="float-right"><?php $this->load->helper('tgl_indo');
                        $tgl=date("Y-m-d H:i:s");
                        echo tgl_ind($tgl); ?></h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <?php echo $this->session->flashdata('simpan'); ?>
                <?php echo $this->session->flashdata('edit'); ?>
                <?php echo $this->session->flashdata('hapus'); ?>
                <?php echo $this->session->flashdata('gagal'); ?>
                 <?php echo  $this->session->flashdata('cek') ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   <th>NO</th>
                  <th>NAMA Driver</th>
                  <th>NAMA PRODUK</th>
                  <th>NAMA PENGIKLAN</th>
                  <th>TIPE KENDARAAN</th>
                  <th>NO. DRIVER</th>
                  <th>FOTO KENDARAAN</th>
                  <th>POSISI IKLAN</th>
                  <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>

                  	<?php $no=1;?>
                    <?php foreach ($iklan as $key) {?>
                    <tr style="border: 1px solid black">
                      <td><?php echo $no++ ?></td>
                      <td><?php echo  $key->namaDriver?></td>
                      <td><?php echo  $key->namaProduk?></td>
                      <td><?php echo  $key->namaPengiklan?></td>
                      <td><?php echo  $key->namaType ?></td>
                      <td><?php echo $key->noTelpon ?></td>
                      <td><img class="img-fluid" src="<?php echo base_url('gambar/iklan/').$key->fotoKendaraan ?>"></td>
                      <td><?php echo  $key->posisiIklan ?></td>
                      <td><a class="btn btn-primary" href="<?php echo base_url('Iklan/editiklan/'.$key->idIklan) ?>">EDIT</a><a class="btn btn-danger" href="<?php echo base_url('Iklan/deleteiklan/'.$key->idIklan) ?>"onclick="return confirm('Yakin Akan Hapus Data Ini ?')">DELETE</a></td> 
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
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
	 
	<br>
	 

	


<?php $this->load->view('admin/_partials/footer.php') ?>