<?php
session_start();

if (!isset($_SESSION['session_email'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Detail Pekerjaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Masukan data anda disini.</p>
        <!-- Contoh: Jika Anda ingin memuat halaman submit_aplication.php, gunakan iframe -->
        <iframe src="/submit_aplication.php" width="100%" height="500" frameborder="0"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Jobs</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
   <!-- header section start -->
   <div class="header_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href="dashboard.php"><img src="images/logo.png"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="dashboard.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jobs.php">JOBS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">SERVICES</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="account.php">ACCOUNT</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li> 
        </ul>
          <form class="form-inline my-2 my-lg-0">
            <div class="search_icon"><a href="#"><img src="images/call-icon.png"><span class="padding_left0">CALL US : +01 9876543210</span></a></div>
            <div class="search_icon"><a href="#"><img src="images/mail-icon.png"><span class="padding_left0">CALL US : +01 9876543210</span></a></div>
            <div class="search_icon"><a href="#"><img src="images/search-icon.png"></a></div>
          </form>
        </div>
      </nav>
    </div>
    <!-- header section end -->
    <!-- templet bg section start -->
    <div class="templet_bg">
    <!-- jobs section start -->
    <div class="jobs_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="jobs_text">Lowongan Pekerjaan</h2>
          </div>
          <!-- ... bagian sebelumnya ... -->
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="images/job-1.png" alt="Job 1">
                <div class="card-body">
                  <h5 class="card-title">Software Engineer</h5>
                  <p class="card-text">Deskripsi Singkat: Seorang Software Engineer adalah seorang profesional di bidang teknologi informasi yang bertanggung jawab untuk merancang, mengembangkan, dan memelihara perangkat lunak serta sistem komputer. Mereka berperan penting dalam menciptakan solusi perangkat lunak yang inovatif, handal, dan efisien untuk memenuhi kebutuhan perusahaan atau klien. Software Engineer memiliki pemahaman mendalam tentang pemrograman, algoritma, struktur data, dan teknologi terkini. Mereka bekerja sama dengan tim untuk menerjemahkan kebutuhan bisnis menjadi kode-kode yang dapat dijalankan dan digunakan oleh pengguna akhir.</p>
                  <a href="#" class="btn btn-primary btn-show-detail" data-href="/emailer/submit_aplication.php" data-toggle="modal" data-target="#detailModal">Apply</a>
                </div>
              </div>
            </div>
            <!-- ... bagian selanjutnya ... -->

          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="images/job-2.png" alt="Job 2">
              <div class="card-body">
                <h5 class="card-title">grapich designer</h5>
                <p class="card-text">Seorang graphic designer adalah seorang seniman visual yang kreatif dan berbakat. Mereka menggabungkan elemen desain dan konsep untuk menciptakan karya visual yang menarik dan memikat. Dengan keahlian mereka dalam menggunakan alat desain dan pemahaman yang mendalam tentang komposisi, warna, dan tipografi, mereka menghasilkan desain yang mempengaruhi dan memikat audiens. Seorang graphic designer adalah kunci dalam membantu merek, perusahaan, atau individu mengkomunikasikan pesan mereka melalui desain visual yang menarik dan efektif.</p>
                <a href="#" class="btn btn-primary btn-show-detail" data-href="/emailer/submit_aplication.php" data-toggle="modal" data-target="#detailModal">Apply</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="images/job-3.png" alt="Job 3">
              <div class="card-body">
                <h5 class="card-title">Marketing Manager</h5>
                <p class="card-text">Layanan pencarian pekerjaan kami dirancang untuk membantu Anda menemukan peluang karir yang sesuai dengan keahlian dan minat Anda. Kami menyediakan platform yang memungkinkan Anda mencari dan mendaftar ke berbagai lowongan pekerjaan, serta memberikan informasi yang relevan tentang perusahaan dan persyaratan pekerjaan. Dengan layanan pencarian pekerjaan kami, Anda dapat dengan mudah menjelajahi pasar tenaga kerja dan meningkatkan peluang Anda untuk mendapatkan pekerjaan yang diinginkan.</p>
                <a href="#" class="btn btn-primary btn-show-detail" data-href="/emailer/submit_aplication.php" data-toggle="modal" data-target="#detailModal">Apply</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <br><br>    
            <div class="card">
              <img class="card-img-top" src="images/job-3.png" alt="Job 3">
              <div class="card-body">
                <h5 class="card-title">Marketing Manager</h5>
                <p class="card-text">Layanan pencarian pekerjaan kami dirancang untuk membantu Anda menemukan peluang karir yang sesuai dengan keahlian dan minat Anda. Kami menyediakan platform yang memungkinkan Anda mencari dan mendaftar ke berbagai lowongan pekerjaan, serta memberikan informasi yang relevan tentang perusahaan dan persyaratan pekerjaan. Dengan layanan pencarian pekerjaan kami, Anda dapat dengan mudah menjelajahi pasar tenaga kerja dan meningkatkan peluang Anda untuk mendapatkan pekerjaan yang diinginkan.</p>
                <a href="#" class="btn btn-primary btn-show-detail" data-href="/emailer/submit_aplication.php" data-toggle="modal" data-target="#detailModal">Apply</a>
              </div></div></div>
        </div>
      </div>
    </div>
    <!-- jobs section end --> 
    <!-- footer section end -->
    </div>
    <!-- templet bg section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
      <div class="container">
        <div class="copyright_text">2019 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a>
          <span class="teams_text">Terms of Service        Privacy</span>
        </div>
      </div>
    </div>
   
    <!-- copyright section end -->
    <!-- Javascript files-->
   <!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<!-- javascript --> 
<script src="js/owl.carousel.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script>
  $(document).ready(function() {
    // Tangkap klik tombol "Lihat Detail" dalam modal
    $(".btn-show-detail").click(function() {
      // Dapatkan URL dari atribut data-href
      var href = $(this).data("href");
      // Update atribut src iframe dengan URL submit_aplication.php (jika diperlukan)
      $("#detailModal iframe").attr("src", href);
    });

    // Tangkap event hide modal untuk menghentikan pemutaran video jika ada dalam iframe
    $('#detailModal').on('hide.bs.modal', function (e) {
      $("#detailModal iframe").attr("src", "");
    });
  });
</script>
</script>
</body>
</html>
