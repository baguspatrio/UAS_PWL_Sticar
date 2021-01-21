<?php $this->load->view('_partials/header') ?>

<body>

 <?php $this->load->view('_partials/navbarsp') ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="height: 55vh;">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
    
      <h1>Register</h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">

      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Register Pengiklan</h2>
          <p> <?php echo $this->session->flashdata('pembayaran') ?>
        </p>

        </div>

        <div class="row">


          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch align-center">
            <form action="<?php echo base_url('Display/aksitambahpengiklan') ?>" method="post" enctype="multipart/form-data" class="formregister"  >
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Nama Perusahaan</label>
                  <input type="text" name="namaPengiklan" class="form-control" id="name"  value="<?= set_value('namaPengiklan') ?>" />
                  
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Username</label>
                  <input type="text" name="username" class="form-control" id="name"  value="<?= set_value('username') ?>" />
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Password</label>
                  <input type="Password" name="password" class="form-control" id="name"  value="<?= set_value('password') ?>" />
                  
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Nama Produk</label>
                  <input type="text" class="form-control" name="namaProduk" value="<?= set_value('namaProduk') ?>" />
                </div>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" class="form-control" required placeholder="Masukkan Alamat " rows="4" name="alamat" ><?= set_value('alamat') ?></textarea>
              </div>
               <div class="form-group">
                <label for="name">Email</label>
                <input type="email" class="form-control" name="email" value="<?= set_value('email') ?>" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">No. Telephone</label>
               <input type="number" id="noTelpon" class="form-control" required placeholder="Masukkan No. Telephone ex:081234567898" name="noTelpon" value="<?= set_value('noTelpon') ?>">
              </div>
              <div class="form-group">
                <label for="fotoProduk">Desain Iklan</label>
                <input type="file" id="fotoProduk" class="form-control" required placeholder="Masukkan Foto Produk" name="fotoProduk">
              </div>
              <div class="form-group">
                <label for="inputName">Posisi Iklan</label>
                <select class="form-control" name="posisiIklan" id="posisi" required>
                        <option value="">No Selected</option>
                        <?php foreach($posisi as $row):?>
                        <option value="<?php echo $row->idPosisi;?>"><?php echo $row->posisi;?></option>
                        <?php endforeach;?>
                    </select>
              </div>
              <div class="form-group">
                <label for="biaya">Biaya</label>
                <select class="form-control" id="biaya" name="biaya" required>
                        <option>No Selected</option>
 
                    </select>
              </div>
<!-- k^6X4+;(EifS -->

            <!--  
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Data anda akan segera kami proses</div>
              </div> -->
              <button type="submit" class="btn btn-primary">Register</button>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 <?php $this->load->view('_partials/footer') ?>
<script type="text/javascript">
        $(document).ready(function(){
 
            $('#posisi').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('Display/getbiaya');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].idBiaya+'>'+data[i].biaya+'</option>';
                        }
                        $('#biaya').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
    </script>