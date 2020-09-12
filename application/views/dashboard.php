<!doctype html>
<html lang="en">

  <!-- head -->
    <?php $this->load->view("layouts/head.php") ?>
  <!-- /.head -->
  
<body>

  

<main role="main">

  <div class="container">
    <!-- navbar -->
    <?php $this->load->view("layouts/navbar.php") ?>
  <!-- /.navbar -->
  </div>

  <section class="jumbotron text-center">
    <div class="container" id="awal">
      <h1>Bersatu kita lawan COVID 19!</h1>
      <p class="lead text-muted">Situs ini merupakan sumber informasi inisiatif sukarela warganet Indonesia pro-data, terdiri dari praktisi kesehatan, akademisi & profesional.</p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row" id="atas">
      	<div class="col">
          <div class="card mb-4 shadow-sm">
            <p style="font-size: 50pt;text-align: center;padding: 5px;">222.390</p>
            <div class="card-body">
              <p class="card-text" align="center">Terkonfirmasi.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 shadow-sm">
            <p style="font-size: 50pt;text-align: center;padding: 5px;">121.300</p>
            <div class="card-body">
              <p class="card-text" align="center">Dalam Perawatan.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 shadow-sm">
            <p style="font-size: 50pt;text-align: center;padding: 5px;">80.000</p>
            <div class="card-body">
              <p class="card-text" align="center">Sembuh.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 shadow-sm">
            <p style="font-size: 50pt;text-align: center;padding: 5px;">8000</p>
            <div class="card-body">
              <p class="card-text" align="center">Meninggal.</p>
            </div>
          </div>
        </div>
       	</div>
       </div>
      <div class="container">

        <h3>Berita terkini</h3>
      <div class="row">
		  <?php foreach($berita as $data){ ?>
		   <div class="col-sm-6">
		    <div class="card">
		      <div class="card-body">
		        <h5 class="card-title"><?= $data->judul; ?></h5>
		        <p class="card-text"><?= $data->isi; ?></p>
		        <a href="#" class="btn btn-primary">Detail</a>
		      </div>
		      <small style="padding:5px;" align="right" class="text-muted">-Upload by <b><?= $data->user; ?></b></small>
		    </div>
		  </div>
		  <?php } ?>
		</div>
  </div>
    <div class="container">
      <h3>Reminder for you guys !</h3>
      <div class="row">
        <div class="col">
          <img src="<?php echo base_url('assets/images/img-dir/r-1.png'); ?>" alt="..." class="img-thumbnail">
        </div>
        <div class="col">
          <img src="<?php echo base_url('assets/images/img-dir/r-2.png'); ?>" alt="..." class="img-thumbnail">
        </div>
        <div class="col">
          <img src="<?php echo base_url('assets/images/img-dir/r-3.png'); ?>" alt="..." class="img-thumbnail">
        </div>
      </div>
    </div>
  </div>
</main>

<footer class="text-muted"  style="background-color: #000;padding:10px; ">
  <div class="container">
    <p class="float-right">
      <a href="#awal" >Back to top</a>
    </p>
    <p><p>Siaga lawan COVID-19 &copy2020</p></p>
  </div>
</footer>

  </body>

   <!-- JS -->
    <?php $this->load->view("layouts_user/js.php") ?>
  <!-- /JS -->

</html>
