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
      <h1>Kenali gejala covid-19 mulai dari sekaran!g</h1>
      <p class="lead text-muted">Situs ini merupakan sumber informasi inisiatif sukarela warganet Indonesia pro-data, terdiri dari praktisi kesehatan, akademisi & profesional.</p>
    </div>
  </section>

  <div class="album py-5 bg-light">

     <div class="container">
      <h3>Kenali gejalanya, lalu cari cara pencegahan</h3>
      <p>Melansir CNN, berikut 10 gejala kunci yang penting untuk Anda kenali sebagai gejala terinfeksi virus corona: </p>
      <ol>
        <li>Napas pendek Sesak napas umumnya muncul sebagai tanda penyakit mencapai tahap serius. </li>
        <li>Demam Demam merupakan salah satu tanda kunci dari Covid-19. Para ahli tidak mematok berapa angka suhu demam yang dialami</li>
        <li>Batuk kering Batuk merupakan gejala umum dari infeksi virus corona. Akan tetapi, batuk yang muncul bukan batuk biasa</li>
        <li>Menggigil dan tubuh merasa sakit Seorang koresonden CNN, Cuomo, yang menderita Covid-19, mengatakan, ia menggigil, tubuhnya terasa sakit, dan demam tinggi saat malam hari</li>
        <li>Tanda-tanda darurat Pada beberapa pasien, saat kondisi memburuk, mengalami sejumlah kondisi darurat. CDC mengingatkan, jika tubuh tidak mampu untuk bangun atau beranjak dari posisi berbaring, atau kehilangan respons, hal ini bisa jadi tanda serius bahwa Anda membutuhkan perawatan segera.</li>
        <li>Masalah pencernaan Awalnya, para peneliti tidak menganggap diare atau masalah lambung sebagai tanda Covid-19. Akan tetapi, pendapat tersebut berubah.</li>
        <li>Mata merah Penelitian di China, Korea Selatan, dan beberapa negara lain menunjukkan, sekitar 1 hinga 3 persen penderita Covid-19 juga mengalami gejala konjungtivitis atau mata merah muda. Ketika kondisi ini terjadi, maka sudah ada potensi untuk menularkan.</li>
        <li>Kehilangan bau dan rasa Hilangnya kemampuan dalam mencium bau dan rasa bisa menjadi gejala yang tidak biasa pada penderita Covid-19 dengan tingkatan kasus ringan hingga sedang.</li>
        <li>Kelelahan Orang yang mengalami kelelahan ekstrem bisa menjadi tanda awal virus corona. WHO melaporkan, hampir 40 persen dari 6.000 orang positif Covid-19 mengaku seperti mengalami kelelahan.</li>
        <li>Sakit kepala, sakit tenggorokan, dan hidung tersumbat Laporan WHO juga menemukan, hampir 14 persen dari hampir 6.000 pasien Covid-19 di China mengalami gejala sakit kepala dan sakit tenggorokan.</li>
      </ol>
    </div>

    <div class="container">
      <h3>Beberapa pencegahan !</h3>
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
