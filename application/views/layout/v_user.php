 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Login Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Home</a></li>
              <li class="breadcrumb-item active">Login Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <a href="<?php echo base_url('user/user_tambah');?>" class='btn btn-sm btn-success pull-right'><i class="fa fa-plus"></i>User Tambah</a>
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No</th>
                                            <th class="border-top-0">Username</th>
                                            <th class="border-top-0">Level</th>
                                            <th class="border-top-0">Last Login</th>
                                            <th class="border-top-0">Last Logout</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $No = 1;
                                        foreach ($user as $key) {
                                        ?>
                                        
                                        <tr>
                                            <td><?php echo $No;?></td>
                                            <td><?php echo $key->username;?></td>
                                            <td><?php echo $key->level;?></td>
                                            <td><?php echo $key->last_login;?></td>
                                            <td><?php echo $key->last_logout;?></td>
                                            <td><a href="<?php echo base_url('user/user_edit/'.$key->id_user);?>" class="btn btn-danger d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Edit</a></td>
                                            <td><a href="<?php echo base_url('user/user_hapus/'.$key->id_user);?>" class="btn btn-info d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Hapus</a></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>