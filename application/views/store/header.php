<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?php echo base_url(); ?>assets/img/logo1.png" alt="" class="img-fluid logo-img" style="width: 200px; height: auto;">
        <!-- <h1 class="sitename">BNEI RA'AM</h1><span>.</span> -->
      </a>

      <nav id="navmenu" class="navmenu text-dark">
        <ul>
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li><a href="<?php echo base_url(); ?>">About</a></li>
          <!-- <li><a href="<?php echo base_url(); ?>#services">Services</a></li> -->

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Services </a>
            <ul class="dropdown-menu dropdown-menu-wide custom-dropdown">
              <div class="d-flex justify-content-center">
                <!-- Hardware Section (Left Side) -->
                <div class="p-3 w-50 ">
                  <li class="dropdown-header fw-bold">Software</li>
                  <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/services">E-commerce</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/services">App Development</a></li>
                </div>

                <!-- Divider Line -->
                <div class="vertical-divider"></div>

                <!-- Software Section (Right Side) -->
                <div class="p-3 w-50 ">
                  <li class="dropdown-header fw-bold">Hardware</li>
                  <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/services">Data Recovery</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/services">Hardware Maintenance</a></li>
                </div>

              </div>

              <a href="<?php echo base_url(); ?>index.php/services" class="d-flex justify-content-center text-center">View more...</a>
            </ul>
          </li>

          <li><a href="<?php echo base_url(); ?>#portfolio">Gallery</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Store" class="active">Store</a></li>
          <!-- <li><a href="<?php echo base_url(); ?>#pricing">Pricing</a></li> -->
          <!-- <li><a href="<?php echo base_url(); ?>#team">Team</a></li> -->
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="<?php echo base_url(); ?>#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="d-flex align-items-center mr-5">
        <!-- <?php if ($this->session->userdata('user_id')): ?>
          <div class="d-flex align-items-center me-3">
            <a href="<?php echo base_url(); ?>index.php/cart" class="me-3">
              <i class="fa fa-brands fa-opencart fs-3" style="color:#000"></i>
            </a>
            <div class="dropdown ml-3">
              <a class="nav-link" href="#" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user-circle fs-3"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url('index.php/profile'); ?>">Profile</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('index.php/auth/logout'); ?>">Logout</a></li>
              </ul>
            </div>
          </div>
        <?php else: ?>
          <div>
            <a class="btn" style="background-color: #e84545; color: white;" href="<?php echo base_url(); ?>index.php/login">Login</a>
          </div>
        <?php endif; ?> -->
      </div>

    </div>
  </header>
  <section class="section" style="background-color: #bcafb3;">

  </section>