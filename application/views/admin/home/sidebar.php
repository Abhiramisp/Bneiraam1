
<div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="#" class="logo navbar-brand mx-4 mb-3">
                <img src="<?php echo base_url(); ?>assets/img/logo1.png" alt="" class="img-fluid logo-img" >

                </a>
              
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-solid fa-user"></i> Users</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo base_url(); ?>index.php/admin_view_user" class="dropdown-item">Users List</a><p></p>
                            <a href="<?php echo base_url(); ?>index.php/Admin_view_user_requerments" class="dropdown-item">Users Requerments</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-solid fa-user"></i> Product</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo base_url(); ?>index.php/Admin_add_Product" class="dropdown-item">Add Product</a><p></p>
                            <a href="<?php echo base_url(); ?>index.php/list_all_products" class="dropdown-item">Edit Product</a>
                        </div>
                    </div>
                    <a href="<?php echo base_url(); ?>index.php/Admin_Form_controll" class="nav-item nav-link"><i class="bi bi-code-slash"></i> Camp Register</a>

                    <!-- <a href="<?php echo base_url(); ?>index.php/admin_view_user" class="nav-item nav-link"><i class="fa fa-solid fa-user"></i> Users</a> -->
                    <a href="<?php echo base_url(); ?>index.php/admin_add_property" class="nav-item nav-link"><i class="fa fa-solid fa-hotel"></i> Add Property</a>
                    <!-- <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div> -->
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->