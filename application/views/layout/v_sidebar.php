 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('home');?>" class="brand-link">
      <img src="<?php echo base_url();?>template/AdminLTE/dist/img/ds.png" alt="ds.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">English Course</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?php echo base_url();?>template/AdminLTE/#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Program');?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Program
                <i class="fas fa-angle-left right"></i>
              </p>
          <li class="nav-item">
            <a href="<?php echo base_url();?>template/AdminLTE/#" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Materi
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>template/AdminLTE/pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grammar</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>template/AdminLTE/pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reading</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>template/AdminLTE/pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pronunciation</p>
                </a>
              </li>
            </ul>
          </li>
            </a>
            <ul class="nav nav-treeview">     
            </ul>
          </li>
          <li class="nav-item">
            <a href="http://localhost/kursus/sertifikat" class="nav-link ">
              <i class="nav-icon fas fa-id-card"></i>
              <p>Sertifikat</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Peserta');?>" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>Peserta</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('User');?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            </ul>
          </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>