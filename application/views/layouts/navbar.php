
<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <img src="<?php echo base_url('assets/images/img-dir/logo.png'); ?>" width="150px;">
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#"></a>
      </div>
      <div class="btn-group">
        <a class="btn btn-outline-secondary" href="<?= base_url('welcome/register'); ?>">Sign up</a>
        <a class="btn btn-outline-secondary" href="<?= base_url('welcome/login'); ?>">Sign in</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="<?= base_url('welcome'); ?>">Beranda</a>
      <a class="p-2 text-muted" href="<?= base_url('welcome/berita'); ?>">Berita Seputar Covid-19</a>
      <a class="p-2 text-muted" href="<?= base_url('welcome/data'); ?>">Data Penyebaran</a>
      <a class="p-2 text-muted" href="<?= base_url('welcome/deteksi'); ?>">Deteksi Dini</a>
      <a class="p-2 text-muted" href="<?= base_url('welcome/histori'); ?>">History Pasien</a>
    </nav>
  </div>
