  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Peserta Kursus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"> 
              <li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Home</a></li>
              <li class="breadcrumb-item active">Data Peserta Kursus</li>
            </ol>
          </div>
        </div>
        <a href="<?php echo base_url('Peserta/peserta_tambah');?>" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah</a> 
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Peserta</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>TTL</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Arnas</td>
                    <td>Desa Tlahab</td>
                    <td>Laki-Laki</td>
                    <td>Jambi<br>
                    <small>20004-05-07</small> <a href="<?php echo base_url('Peserta/peserta_tambah');?>" class="btn btn-danger d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Edit</a></td>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>Dilan</td>
                    <td>Desa Tlahab</td>
                    <td>Laki-Laki</td>
                    <td>Jambi<br>
                    <small>20004-05-07</small> <a href="<?php echo base_url('Peserta/peserta_tambah');?>" class="btn btn-danger d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Edit</a></td>
                    </td>                                                                                 
                    
                  </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            