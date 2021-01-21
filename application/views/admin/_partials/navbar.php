<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
    </ul>

   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <!-- Notifications Dropdown Menu -->
     <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mb-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:20px">
            <?php echo $this->session->userdata('nama') ?> <i class="fas fa-user-tie"></i>
          </a>
          <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
            <li> <a class=" btn btn-outline-primary" href="<?php echo base_url('Admin/editprofile/')?><?php  echo $this->session->userdata('id');  ?>">UBAH PASSWORD</a></li>
           
            <li><hr class="dropdown-divider"></li>
            <li><a class=" btn btn-outline-primary" href="<?php echo base_url('logout') ?>">LOGOUT</a></li>
          </ul>
         
        </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->