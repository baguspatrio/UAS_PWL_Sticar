
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('admin/') ?>" class="brand-link">
      <img src="<?php echo base_url('gambar/halamandepan/') ?>11a.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">STICAR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <i class="fas fa-user-tie"></i>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('nama'); ?></a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

           <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
             <i class="fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin') ?>" <?php echo $this->uri->segment(1)=='admin' || $this->uri->segment(1)==''?'class="nav-link active"':'class="nav-link"' ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('tambahiklan') ?>" <?php echo $this->uri->segment(1)=='tambahdriver' || $this->uri->segment(1)==''?'class="nav-link active"':'class="nav-link"' ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data Iklan</p>
                </a>
              </li>
              
            </ul>
          </li>
          <?php if ($this->session->userdata('level')=="admin") { ?>

             <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
             <i class="fal fa-user-hard-hat"></i>
              <p>
                Karyawan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('tampildatakaryawan') ?>" <?php echo $this->uri->segment(1)=='admin' || $this->uri->segment(1)==''?'class="nav-link active"':'class="nav-link"' ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampil Data Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('tambahkaryawan') ?>" <?php echo $this->uri->segment(1)=='tambahdriver' || $this->uri->segment(1)==''?'class="nav-link active"':'class="nav-link"' ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data Karyawan</p>
                </a>
              </li>
              
            </ul>
          </li>


          <?php } ?>

          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="fas fa-street-view"></i>
              <p>
                Driver
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('tampildatadriver') ?>"  <?php echo $this->uri->segment(1)=='tampildatadriver' || $this->uri->segment(1)==''?'class="nav-link active"':'class="nav-link"' ?> >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampil Data Driver</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('tambahdriver') ?>" <?php echo $this->uri->segment(1)=='tambahdriver' || $this->uri->segment(1)==''?'class="nav-link active"':'class="nav-link"' ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data Driver</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
             <i class="fas fa-user-tie"></i>
              <p>
                Pengiklan 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('tampildatapengiklan') ?>" <?php echo $this->uri->segment(1)=='tampildatapengiklan' || $this->uri->segment(1)==''?'class="nav-link active"':'class="nav-link"' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengiklan Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('pengiklanterverifikasi') ?>" <?php echo $this->uri->segment(1)=='pengiklanterverivikasi' || $this->uri->segment(1)==''?'class="nav-link active"':'class="nav-link"' ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengiklan Terverivikasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
             <i class="fas fa-car"></i>
              <p>
                Kendaraan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('tampildatakendaraan') ?>" <?php echo $this->uri->segment(1)=='tampildatakendaraan' || $this->uri->segment(1)==''?'class="nav-link active"':'class="nav-link"' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampil Data Kendaraan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('tambahkendaraan') ?>" <?php echo $this->uri->segment(1)=='tambahkendaraan' || $this->uri->segment(1)==''?'class="nav-link active"':'class="nav-link"' ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data Kendaraan</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
              <ol class="breadcrumb float-sm-left">
              <?php foreach ($this->uri->segments as $segment): ?>
                <?php 
                  $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
                  $is_active =  $url == $this->uri->uri_string;
                ?>


                <li class="breadcrumb-item <?php echo $is_active ? 'active': '' ?>">
                  <?php if($is_active): ?>
                    <?php echo ucfirst($segment) ?>
                  <?php else: ?>
                    <a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment) ?></a>
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>
              </ol>
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
              
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header