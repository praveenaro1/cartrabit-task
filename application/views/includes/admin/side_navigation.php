<header class="main-header" style="margin-right: 0px !important;">
  <div class="d-flex align-items-center logo-box justify-content-start">
    <a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent hover-primary" data-toggle="push-menu" role="button">
      <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
    </a>  
    <!-- Logo -->
    <a href="" class="logo">
      <!-- logo-->
      <div class="logo-lg">
      <?php $logo=(getSettings()->logo!='') ? getSettings()->logo : 'no_image.jpg'; ?>
      <img style="object-fit: cover;object-position: center;" src="<?php echo base_url('uploads/logo/'.$logo ); ?>" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
      <span class="brand-text font-weight-bold"></span>
      </div>
    </a>  
  </div>  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
    <div class="app-menu">
    <ul class="header-megamenu nav">
      <li class="btn-group nav-item d-md-none">
        <a href="#" class="waves-effect waves-light nav-link push-btn btn-info-light" data-toggle="push-menu" role="button">
          <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
          </a>
      </li>
    </ul> 
    </div>
    
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav"> 
      <li class="btn-group nav-item d-lg-inline-flex d-none">
        <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-info-light" title="Full Screen">
          <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
          </a>
      </li> 
      <!-- Notifications -->
      
      
      <!-- Messages -->
      
          <!-- Control Sidebar Toggle Button -->
             
        <!-- Right Sidebar Toggle Button -->
          
        <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle p-0 text-dark hover-primary ml-md-30 ml-10" data-toggle="dropdown" title="User">
        <span class="pl-30 d-md-inline-block d-none">Hello,</span> <strong class="d-md-inline-block d-none">
          <?php $profile=getAdminProfile(getLoggerID()); echo $profile=($profile != 'admin') ? $profile->name : ''; ?></strong><img src="<?php echo base_url(); ?>assets/admin/images/avatar/6.jpg" class="user-image rounded-circle avatar bg-white mx-10" alt="User Image">
            </a>
            <ul class="dropdown-menu animated flipInX">
              <li class="user-body">
         <a class="dropdown-item" href="<?php echo base_url('admin/profile'); ?>"><i class="ti-user text-muted mr-2"></i> Profile</a>
        <!--  <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
         <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a> -->
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="<?php echo base_url('admin/logout'); ?>"><i class="ti-lock text-muted mr-2"></i> Logout</a>
              </li>
            </ul>
          </li> 
      
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative"> 
    <div class="multinav">
      <div class="multinav-scroll" style="height: 100%;"> 
        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree" style="padding-bottom: 100%;">
        <li class="treeview">
          <a href="">
          <i class="fa fa-bus"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
          <span>Customer Service List</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo base_url('admin/bike'); ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>New Customer List</a></li>
          <li><a href="<?php echo base_url('admin/servicecomplete'); ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Update Completed Service</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="">
          <i class="fa fa-street-view"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
          <span>Service</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo base_url('admin/service'); ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List Service</a></li>
          <li><a href="<?php echo base_url('admin/service/add'); ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Service</a></li>
          </ul>
        </li>
        <!-- <li>
          <a href="<?php echo base_url('admin/checklist/list_chick'); ?>">
          <i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span></i>
          <span>Check List</span>
          </a>
        </li> -->
        
        </ul> 
        <div class="sidebar-widgets pt-50px">
          <!-- <div class="mx-25 mb-30 pb-20 side-bx bg-primary bg-food-dark rounded20">
          <div class="text-center">
            <img src="<?php echo base_url(); ?>assets/admin/images/res-menu.png" class="sideimg" alt="">
            <h3 class="title-bx">Add Menu</h3>
            <a href="#" class="text-white py-10 font-size-16 mb-0">
              Manage Your food and beverages menu <i class="mdi mdi-arrow-right"></i>
            </a>
          </div>
          </div> -->
        <div class="copyright text-left m-25">
          <p><strong class="d-block"><?php echo strtoupper(getSettings()->header); ?></strong> © 2023 All Rights Reserved</p>
        </div>
        </div>
      </div>
    </div>
    </section>
  </aside>