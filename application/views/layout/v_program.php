    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Program Kursus</h1>
          </div>
          <div class="col-sm-6 ">
          	<span class="float-sm-right">
            <a href="<?php echo base_url('Program/program_tambah');?>" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah</a> 
            </span>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

    	      
      <div class="row">
        <div class="col-12">
          <div class="card">
         
            <!-- /.card-header -->
            <div class="card-body table-responsive">
            	<table id="datatabel" class="table table-hover nowrap" style="width: 100%" data-page-length="7">
	                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Program Kursus</th>
	                  <th>Keterangan</th>
	                  <th class="no-sort"></th>
	                
	                </tr>
	                </thead>
	                <tbody>
	                	<tr>
	                  <td>1</td>
	                  <td>Microsoft Word</td>
	                  <td>Program Kursus yang ditujukan untuk mahir dalam penggunaan perangkat lunak Microsoft Word.</td>
	                  <td>
	                  	<form class="form-1" method="POST" action="http://localhost/kursus/Program/program_edit" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                       			<input type="hidden" name="_method" value="DELETE">                       			<input type="hidden" name="_token" value="YpHo1SWQchGVn9KQbV5BOscUrbUWyzGSyiWEFHaR">	                  			
                             <a href="<?php echo base_url('Program/program_edit');?>" class="btn btn-danger d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Edit</a></td>
                             <td><a href="http://localhost/Kursus/program/program_hapus" class="btn btn-info d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Hapus</a></td>	
                        </form>
	                  	
	                  </td>
	                </tr>
	               		                <tr>
	                  <td>2</td>
	                  <td>Microsoft Excel</td>
	                  <td>Program Kursus yang ditujukan untuk mahir dalam penggunaan perangkat lunak Microsoft Excel.</td>
	                  <td>
	                  	<form class="form-2" method="POST" action="http://localhost/kursus/Program/program_edit" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                       			<input type="hidden" name="_method" value="DELETE">                       			<input type="hidden" name="_token" value="YpHo1SWQchGVn9KQbV5BOscUrbUWyzGSyiWEFHaR">	                  		
                             <a href="<?php echo base_url('Program/program_edit');?>" class="btn btn-danger d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Edit</a></td>

                             <td><a href="http://localhost/Kursus/program/program_hapus" class="btn btn-info d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Hapus</a></td>	
                        </form>
	                  	
	                  </td>
	                </tr>
	              <tr>
                <td>3</td>
	                  <td>Microsoft Powerpoint</td>
	                  <td>Program Kursus yang ditujukan untuk mahir dalam penggunaan perangkat lunak Microsoft Powerpoint.</td>
	                  <td>
	                  	<form class="form-3" method="POST" action="http://localhost/kursus/Program/program" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                       			<input type="hidden" name="_method" value="DELETE">                       			<input type="hidden" name="_token" value="YpHo1SWQchGVn9KQbV5BOscUrbUWyzGSyiWEFHaR">	                  			
                             <a href="<?php echo base_url('Program/program_edit');?>" class="btn btn-danger d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Edit</a></td>

                             <td><a href="<?php echo base_url('Program/program_hapus');?>" class="btn btn-info d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Hapus</a></td>
                        </form>
	                  	
	                  </td>
	                </tr>