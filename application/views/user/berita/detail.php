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
            <form role="form" action="<?=base_url('berita/edit_data/').$data_berita['id_berita'] ?>" method="post" enctype="multipart/form-data">
              <div class="row">

                <div class="col">

                 <div class="form-group">
                    <label for="tgl">Tgl Upload</label>
                    <input type="text" class="form-control" id="tgl" value="<?= $data_berita['tgl']; ?>" name="judul" readonly>
                  </div>

                <div class="form-group">
                  <label for="nama">Topik Berita</label>
                  <input type="text" class="form-control" id="nama" name="judul" value="<?=$data_berita['judul']?>" readonly>
                </div>
                 
                <div class="form-group">
                  <label for="isi">Konten Berita</label>
                  <textarea class="form-control" id="isi" readonly=""><?=$data_berita['isi']?></textarea>
                </div>
                <div class="form-group">
                  <label for="user">User</label>
                 <input type="text" class="form-control" name="user" id="user" value="<?=$data_berita['user']?>" readonly>
                </div>

                
              </div>

            </div>

        <div class="card-footer">
          <a href="<?=base_url('berita')?>" class="btn btn-secondary" role="button">Kembali</a>
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
