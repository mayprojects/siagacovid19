<!doctype html>
<html lang="en">

  <!-- HEAD -->
    <?php $this->load->view("layouts_user/head.php") ?>
     <link href="<?php echo base_url('assets/bootstrap/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- /HEAD -->
  
<body>

  <!-- NAVBAR -->
    <?php $this->load->view("layouts_user/navbar.php") ?>
  <!-- /NAVBAR -->

<div class="container-fluid">
  <div class="row">
    <!-- SIDEBAR -->
      <?php $this->load->view("layouts_user/sidebar.php") ?>
    <!-- /SIDEBAR -->

   

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Petugas <a class="btn btn-outline-primary" href="<?= base_url('laporan/input'); ?>">+Add Data</a></h1>
        
      </div>

      <!-- alert -->

      <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
      <?php endif; ?>
    

      <!-- /.alert -->

       <!-- Default box -->
      <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr align="center">
                  <th>No.</th>
                  <th>Pelapor</th>
                  <th>Nama Pasien</th>
                  <th>Alamat</th>
                  <th>Gejala</th>
                  <th>Rujukan</th>
                  <th>Status</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                   <?php $no = 1; foreach ($laporan as $data): ?>
                   <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data->user ?></td>
                        <td><?php echo $data->nama_pasien ?></td>
                        <td><?php echo $data->alamat ?></td>
                        <td><?php echo $data->gejala ?></td>
                        <td><?php echo $data->rujukan ?></td>
                        <td><?php echo $data->status ?></td>
                        <td align="center">
                          <a href="<?=base_url('laporan/detail/').$data->id_laporan;?>" class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye"></i>View</a>
                          <a href="<?=base_url('laporan/edit/').$data->id_laporan;?>" class="btn btn-sm btn-outline-success"><i class='fa fa-edit'></i>Edit</a>
                          <a onclick="deleteConfirm('<?=base_url('laporan/hapus_data/').$data->id_laporan;?>')" class="btn btn-sm btn-outline-danger" style="cursor: pointer;"  data-toggle="modal" data-target="#modal_hapus<?php echo $data->id_laporan;?>"><i class="fa fa-trash"></i>Delete</a>
                        </td>
                    </tr>
                   <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

   
    </main>
  </div>
  </div>


  <!-- modal hapus -->
    <?php foreach($laporan as $data){ ?>    
      <form action="<?=base_url('laporan/hapus_data/').$data->id_laporan;?>" method="post">
         <div class="modal fade" id="modal_hapus<?php echo $data->id_laporan;?>">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Konfirmasi Pilihan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="center">Yakin Menghapus <b><?php echo $data->nama_petugas ?></b> ?</p>
                  </div>
                  <div class="modal-footer pull-right">
                    <button type="submit" class="btn btn-danger">YA</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </form>
        <?php } ?>
  <!-- /.modal hapus -->
  
 
  <!-- JS -->
    <?php $this->load->view("layouts_user/js.php") ?>

  <!-- /JS -->

  </body>

</html>
