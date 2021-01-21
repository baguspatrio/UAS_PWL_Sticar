<?php $this->load->view('_partials/header') ?>

<body>

 <?php $this->load->view('_partials/navbarsp') ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style=" height: 55vh;">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
    
      <h1>PORTFOLIO</h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">

      <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

       <!--  <div class="section-title" data-aos="fade-left">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div> -->

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <!-- <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div> -->
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <?php foreach ($iklan as $key ) {?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url('gambar/iklan/').$key->fotoKendaraan ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $key->namaDriver; ?></h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

        </div>
        <nav aria-label="Page navigation example">
          <?php 
  echo $this->pagination->create_links();
  ?>
        </nav>
     
      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

 <?php $this->load->view('_partials/footer') ?>
</body>

</html>