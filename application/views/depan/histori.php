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
  <div class="row">
    <div class="col">
      <h3>Cerita perjuangan pasien yang sembuh dari  covid-19</h3>
      <video width="1100px" height="550px" controls>
        <source src="<?php echo base_url('assets/video/1.mp4'); ?>" type="video/mp4"  >
      </video><br/>
   </div>
  </div>

  </div><!-- /.row -->

    <div class="container">
      <h3>Motivasi penyemangat untuk kita semua :)</h3>
      <ul>
      <li> "Kamu lebih kuat dari yang kamu tahu. Lebih cakap dari yang pernah kamu impikan. Dan kamu dicintai lebih dari yang bisa kamu bayangkan."</li>
      <li> "Kadang ketika kamu berada di tempat gelap kamu pikir kamu telah terkubur, tetapi sebenarnya kamu telah ditanam."
      <li>"Saat kita masih diberi kesempatan bangun di pagi hari, itu berarti Tuhan masih memberi kesempatan kepada kita untuk melakukan pekerjaan yang harus kita lakukan."</li>
      <li>"Jika kita diberikan umur yang panjang, maka manfaatkan untuk bekerja dengan sebaik-baiknya."
      <li>"Jangan hanya bermalas-malasan, jadikan hidup kita lebih bermakna dengan bekerja."</li>
      <li>"Semua manusia memiliki kesempatan yang sama, jadi tetap semangat untuk melakukan pekerjaan sebaik mungkin."</li>
      <li>"Masa depan adalah milik mereka yang menyiapkan hari ini."</li>
      <li>"Pada malam hari, sesuatu mungkin bisa dilakukan. Namun, tunggulah hingga esok tiba. Tunggulah akal sehat di pagi hari."</li>
      <li>"Jangan pernah berhenti percaya pada harapan, karena keajaiban terjadi di setiap hari."</li>
      <li>"Kamu tidak harus menjadi hebat dulu untuk memulai, tapi kamu perlu memulai untuk menjadi hebat".</li>
      <li>"Setiap pagi, aku berkata pada diriku sendiri bahwa ini akan menjadi hari yang baik."</li>

      <li>"Selamat pagi jiwa-jiwa optimis, kesulitan yang dihadapi hari ini akan membantumu sukses di masa depan."</li>

      <li>"Mencoba itu adalah tetap melangkah ke anak tangga pertama, meski kita tidak tahu berapa jumlah anak tangga yang harus dilalui."</li>
    </ul>
    </div>
</main><!-- /.container -->

<footer class="text-muted" >
  <div class="container">
    <p class="float-right">
      <a href="#atas">Back to top</a>
    </p>
    <p><p>Siaga lawan COVID-19 &copy2020</p></p>
  </div>
</footer>
</body>
 <!-- JS -->
    <?php $this->load->view("layouts_user/js.php") ?>
  <!-- /JS -->

</html>