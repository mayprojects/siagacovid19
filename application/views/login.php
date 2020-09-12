<!DOCTYPE html>
<html lang="en">

<head>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/login.css'); ?>" rel="stylesheet">
</head>

<body>
    <form class="form-signin" action="<?= base_url('user/proses_login'); ?>" method="post">

        <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('message'); ?>
        </div>
        <?php endif; ?> 

      <div class="text-center mb-4">
        <img class="mb-4" src="<?php echo base_url('assets/images/img-dir/bootstrap-solid.svg'); ?>"width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Masuk sebagai user</h1>
        <p>Untuk menambahkan data terbaru seputar covid 19. Sedikit info pasti akan bermanfaat :)</p>
      </div>

      <div class="form-label-group">
        <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Username</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button><br/>
      <p align="center">Kembali ke<a href="<?= base_url('welcome')?>"> Dashboard</a></p>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2020</p>
    </form>
</body>

</html>