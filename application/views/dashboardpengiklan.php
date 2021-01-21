<?php $this->load->view('_partials/header') ?>

<body>

 <?php $this->load->view('_partials/navbarpengiklan') ?>

  <!-- ======= Hero Section ======= -->
  
  <main id="main">

      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="margin-top: 45px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Dashboard Pengiklan</h2>
        </div>

        <div class="row">


          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch align-center">
          <table id="example" class="table table-striped table-bordered" >
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
                  <th>Tanggal Pemasangan</th>
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
                      <td><?php echo $key->tanggal ?></td> 
                    </tr>
                    <?php } ?>
            </tbody>
            
        </table>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 <?php $this->load->view('_partials/footer') ?>
 <script type="text/javascript">
   $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>
</body>

</html>