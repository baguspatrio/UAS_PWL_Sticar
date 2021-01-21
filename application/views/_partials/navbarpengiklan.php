<!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style="background: rgba(40, 58, 90, 0.9);
">
    <div class="container d-flex align-items-center">

     <!--  <h1 class="logo mr-auto"><a href="index.html">Arsha</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="<?php echo base_url() ?>" class="logo mr-auto"><img height="255" src="<?php echo base_url('gambar/halamandepan/') ?>logoo.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
          <li class=""><a href=""><?php echo $this->session->userdata('namaPengiklan') ?></a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="<?php echo base_url('PengiklanLogin/logout') ?>" class="get-started-btn scrollto">Logout</a>

    </div>
  </header><!-- End Header -->