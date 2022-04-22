 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Input</h1>
          </div>
          <div class="col-sm-6">
            <span class="float-sm-right">
            <a href="<?php echo base_url('Peserta');?>" class="btn btn-primary"><i class="fas fa-undo"></i> Kembali</a> 
            </span>
</div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
            <div class="card-body">
              <form method="post" action="http://localhost/kursus/peserta">
                <input type="hidden" name="_token" value="YpHo1SWQchGVn9KQbV5BOscUrbUWyzGSyiWEFHaR">                
                <div class="row">
                  </div>
                  </div>
                  <div class="col-12">
                      <hr>
                  </div>
                  <div class="col-12 col-md-6">
                      <div class="form-group">
                          <label >Peserta</label>
                          <input name="nama" type="text" value="" class="form-control "/>
                                                </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                              <label >Alamat</label>
                              <textarea name="alamat" rows="3" class="form-control "></textarea>
                                                        </div>
                  </div>
                  <div class="col-12 col-md-6">
                      <div class="form-group">
                          <label >Jenis Kelamin</label>
                          <select name="gender" class="form-control select2" style="width: 100%;">
                            
                            <option value="L"  >Laki-laki</option>
                            <option value="P"  >Perempuan</option>
                            
                          </select>
                                                </div>
                  </div>
                  <div class="col-12 col-md-3">
                      <div class="form-group">
                          <label >Tempat Lahir</label>
                          <input name="tempat_lahir" type="text" value="" class="form-control "/>
                                                </div>
                  </div>
                  <div class="col-12 col-md-3">
                      <div class="form-group">
                          <label >Tanggal Lahir</label>
                          <input name="tanggal_lahir" id="tgl" type="text" value="" class="form-control ">
                                                </div>
                  </div>
                  <div class="col-12 text-right">
                    <button type="submit" class="btn btn-app"><i class="fas fa-save"></i> Simpan</button>
                  </div>  
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </section>
    
   </div