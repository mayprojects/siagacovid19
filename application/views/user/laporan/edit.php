<!doctype html>
<html lang="en">

<!-- head -->
  <?php $this->load->view("layouts_user/head.php") ?>
<!-- /.head -->
  
<body>

  <!-- navbar -->
    <?php $this->load->view("layouts_user/navbar.php") ?>
  <!-- /.navbar -->

<div class="container-fluid">
  <div class="row">
    <!-- sidebar -->
      <?php $this->load->view("layouts_user/sidebar.php") ?>
    <!-- /.sidebar -->

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <!-- /card -->
      <div class="card-body">
        <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Tambah Data</h3>
        </div>
        
        <?php echo $this->session->flashdata('failed'); ?>

        <!-- form  -->
         <div class="modal-body">
            <form role="form" action="<?=base_url('laporan/edit_data/').$data_laporan['id_laporan'] ?>" method="post" enctype="multipart/form-data">
              <div class="row">

                <div class="col">

                 <div class="form-group">
                    <label for="nama">Nama Pasien</label>
                    <input type="text" class="form-control" id="nama" name="nama_pasien" value="<?= $data_laporan['nama_pasien'] ?>" >
                  </div>
                   
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat"><?= $data_laporan['alamat'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="gejala">Gejala</label>
                   <input type="text" class="form-control" name="gejala" value="<?= $data_laporan['gejala'] ?>" id="gejala" >
                  </div>
                  <div class="form-group">
                    <label for="rujukan">Rujukan</label>
                   <input type="text" class="form-control" name="rujukan" value="<?= $data_laporan['rujukan'] ?>" id="rujukan" >
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label>
                   <input type="text" class="form-control" name="status" value="<?= $data_laporan['status'] ?>" id="status" >
                  </div>
                  <div class="form-group">
                    <label for="user">User</label>
                   <input type="text" class="form-control" name="user" value="<?= $data_laporan['user'] ?>" id="user" >
                  </div>

                </div>

              </div>

            </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="<?=base_url('laporan')?>" class="btn btn-secondary" role="button">Kembali</a>
        </div>
      </form>
    
    </div>
    <!-- /.form  -->

      </div>
    </div>  

    </main>

    </div>
</div>

<!-- js -->
    <?php $this->load->view("layouts_user/js.php") ?>
  <!-- /.js -->
</body>
</html>
