<!DOCTYPE html>
<html>
<!-- head -->
    <?php $this->load->view("layouts/head.php") ?>
  <!-- /.head -->
<body>

<div class="container">
  <!-- navbar -->
    <?php $this->load->view("layouts/navbar.php") ?>
  <!-- /.navbar -->

  <div class="row mb-2">
  	<?php foreach($lim as $data){ ?>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h4 class="mb-0"><?= $data->judul; ?></h4>
          <div class="mb-1 text-muted"><?= $data->tgl; ?></div>
          <p class="card-text mb-auto"><?= $data->isi; ?></p>
          <a href="#" class="stretched-link">Continue reading</a>
          <p style="text-decoration: underline;" class="d-inline-block mb-2 text-secondary">upload by : <?= $data->user; ?></p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="<?php echo base_url('assets/images/img-dir/').$data->foto; ?>" class="bd-placeholder-img" width="200" height="250" >
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        From the Firehose
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title">Sample blog post</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
        <hr>
        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
        <blockquote>
          <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
       
    	</div>
    </div><!-- /.blog-main -->


    <aside class="col-md-4 blog-sidebar">

      <div class="p-4">
        <h4 class="font-italic">Daftar Berita</h4>
        <ol class="list-unstyled mb-0">
        <?php foreach($berita as $data){ ?>
          <li><a href="#"><?= $data->judul; ?>.</a></li>
         <?php } ?>
        </ol>
      </div>

    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->
<footer class="text-muted" >
  <div class="container">
    <p class="float-right">
      <a href="#atas">Back to top</a>
    </p>
    <p>Siaga lawan COVID-19 &copy2020</p>
  </div>
</footer>
</body>
 <!-- JS -->
    <?php $this->load->view("layouts_user/js.php") ?>
  <!-- /JS -->

</html>