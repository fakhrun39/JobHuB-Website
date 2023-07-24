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
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>JobHub</title>
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
    <!-- banner section start -->
    <div class="banner_section layout_padding">
      <div class="container">
        <div id="my_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <h1 class="banner_taital">Find Your Dream Job <br> with JobHub </h1>
                  <div class="contact_bt"><a href="register.html">REGISTER</a></div>
                </div>
                <div class="col-md-6">
                  <div class="image_1"><img src="images/img-1.png"></div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <h1 class="banner_taital">Find Your Dream Job <br> with JobHub </h1>
                  <div class="contact_bt"><a href="login.php">LOGIN</a></div>
                </div>
                <div class="col-md-6">
                  <div class="image_1"><img src="images/img-1.png"></div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <h1 class="banner_taital">Find Your Dream Job <br> with JobHub </h1>
                  <div class="contact_bt"><a href="ABOUT.php">ABOUT US</a></div>
                </div>
                <div class="col-md-6">
                  <div class="image_1"><img src="images/img-1.png"></div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
              <i class="fa fa-left"><img src="images/left-icon.png"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
              <i class="fa fa-right"><img src="images/right-icon.png"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- banner section end -->
    <!-- templet bg section start -->
    <div class="templet_bg">
    <!-- about section start -->
    <div class="about_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="image_2"><img src="images/img-2.png"></div>
          </div>
          <div class="col-md-6">
            <h1 class="mark_text">Find Your Dream Job with JobHub</h1>
            <p class="lorem_text">JobHub adalah portal pekerjaan terkemuka yang menghubungkan pencari kerja dengan perusahaan. Kami menyediakan platform di mana pencari kerja dapat menemukan pekerjaan impian mereka dan perusahaan dapat memposting lowongan pekerjaan. Dengan antarmuka yang mudah digunakan dan opsi pencarian yang canggih, menemukan pekerjaan yang sempurna atau kandidat ideal menjadi lebih mudah. Bergabunglah dengan JobHub hari ini dan tingkatkan karier Anda ke level baru.</p>
            <div class="contact_bt"><a href="#">Read More</a></div>
          </div>
       ```html
        </div>
      </div>
    </div>
    <!-- about section end --> 
    <!-- job section start -->
    <div class="job_section layout_padding">
      <div class="container">
        <h1 class="solution_text">Best Jobs</h1>
        <div class="row">
          <div class="col-sm-4">
            <div class="job_box">
              <div class="job_img"><img src="images/job-1.png"></div>
              <h3 class="job_title">Software Engineer</h3>
              <p class="job_desc">
                Sebagai seorang Software Engineer, Anda akan bertanggung jawab dalam pengembangan perangkat lunak dan solusi teknologi yang inovatif. Anda akan memanfaatkan keahlian dalam pemrograman dan analisis sistem untuk menciptakan aplikasi yang efisien dan handal. Dengan pengetahuan mendalam tentang bahasa pemrograman dan kerangka kerja, Anda akan menjadi bagian dari tim yang mendorong inovasi dan membangun solusi perangkat lunak yang mengubah dunia. Bergabunglah dengan kami sebagai Software Engineer dan wujudkan potensi teknologi untuk masa depan yang lebih baik.</p>
              <div class="read_more"><a href="#">Read More</a></div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="job_box">
              <div class="job_img"><img src="images/job-2.png"></div>
              <h3 class="job_title">Graphic Designer</h3>
              <p class="job_desc">Seorang graphic designer adalah seorang seniman visual yang kreatif dan berbakat. Mereka menggabungkan elemen desain dan konsep untuk menciptakan karya visual yang menarik dan memikat. Dengan keahlian mereka dalam menggunakan alat desain dan pemahaman yang mendalam tentang komposisi, warna, dan tipografi, mereka menghasilkan desain yang mempengaruhi dan memikat audiens. Seorang graphic designer adalah kunci dalam membantu merek, perusahaan, atau individu mengkomunikasikan pesan mereka melalui desain visual yang menarik dan efektif.</p>
              <div class="read_more"><a href="#">Read More</a></div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="job_box">
              <div class="job_img"><img src="images/job-3.png"></div>
              <h3 class="job_title">Marketing Manager</h3>
              <p class="job_desc">Sebagai seorang Marketing Manager, tanggung jawab anda adalah mengembangkan strategi pemasaran yang efektif, mengelola tim pemasaran, dan mencapai target penjualan perusahaan. nda juga bertanggung jawab untuk mengidentifikasi peluang pasar, melakukan analisis pesaing, dan mengarahkan kegiatan pemasaran untuk meningkatkan citra merek dan kesadaran konsumen.
              </p>
              <div class="read_more"><a href="#">Read More</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- job section end --> 
    <!-- services section start -->
    <div class="services_section layout_padding">
      <div class="container">
        <h1 class="solution_text">Our Services</h1>
        <div class="row">
          <div class="col-md-4">
            <div class="services_box">
              <div class="services_icon"><img src="images/service-icon1.png"></div>
              <h3 class="services_title">Job Search</h3>
              <p class="services_desc">Layanan pencarian pekerjaan kami dirancang untuk membantu Anda menemukan peluang karir yang sesuai dengan keahlian dan minat Anda. Kami menyediakan platform yang memungkinkan Anda mencari dan mendaftar ke berbagai lowongan pekerjaan, serta memberikan informasi yang relevan tentang perusahaan dan persyaratan pekerjaan. Dengan layanan pencarian pekerjaan kami, Anda dapat dengan mudah menjelajahi pasar tenaga kerja dan meningkatkan peluang Anda untuk mendapatkan pekerjaan yang diinginkan.</p>
              <div class="read_more"><a href="#">Read More</a></div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="services_box">
              <div class="services_icon"><img src="images/service-icon2.png"></div>
              <h3 class="services_title">Resume Builder</h3>
              <p class="services_desc">Resume builder adalah sebuah alat atau aplikasi yang dirancang untuk membantu pengguna dalam membuat resume atau CV profesional dengan mudah dan efisien. Dengan menggunakan resume builder, pengguna dapat memilih dari berbagai template yang sudah dirancang dengan baik dan mengisi informasi pribadi, pendidikan, pengalaman kerja, keterampilan, dan prestasi mereka. Resume builder juga sering dilengkapi dengan fitur-fitur tambahan seperti saran konten, tata letak yang responsif, dan kemampuan untuk menyesuaikan desain resume sesuai kebutuhan.</p>
              <div class="read_more"><a href="#">Read More</a></div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="services_box">
              <div class="services_icon"><img src="images/service-icon3.png"></div>
              <h3 class="services_title">Interview Tips</h3>
              <p class="services_desc">Kami memahami betapa pentingnya persiapan yang baik dalam menghadapi wawancara kerja. Dengan tim ahli kami yang berpengalaman, kami siap memberikan pelayanan yang profesional dan personal guna membantu Anda meraih kesuksesan dalam proses intervieu. Dengan pemahaman mendalam tentang berbagai industri dan tren terkini, kami akan memberikan tips yang relevan dan strategi yang efektif untuk membantu Anda mempersiapkan diri secara maksimal</p>
              <div class="read_more"><a href="#">Read More</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- services section end --> 
    <!-- footer section start -->
    <div class="footer_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <div class="footer_logo"><a href="dashboard.php"><img src="images/logo.png"></a></div>
            <h4 class="contact_text">Contact Us</h4>
            <div class="call_section">
              <div class="call_section_left">
                <div class="map_icon"><img src="images/map-icon.png"></div>
                <p class="location_text">London 145</p>
                <p class="location_text">United Kingdom</p>
              </div>
              <div class="call_section_middle">
                <div class="map_icon"><img src="images/mail-icon1.png"></div>
                <p class="location_text">demo@gmail.com</p>
                <p class="location_text">demo@gmail.com</p>
              </div>
              <div class="call_section_right">
                <div class="map_icon"><img src="images/call-icon1.png"></div>
                <p class="location_text">+01 1234567890</p>
                <p class="location_text">+01 9876543210</p>
              </div>
            </div>
            <div class="social_icon">
              <ul>
                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                <li><a href="#"><img src="images/instagram-icon.png"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12">
            <div class="menus_main">
              <div class="menus_left">
                <h3 class="menus_text">Menus</h3>
                <div class="menu_text">
                  <ul>
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="jobs.html">Jobs</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="menus_middle">
                <h3 class="Recent_text">Recent Post</h3>
                <p class="staff_text">Participate in staff meetings manage dedicated to marketing November 25, 2019</p>
              </div>
              <div class="menus_right">
                <h1 class="Recent_text">Newsletter</h1>
                <input type="text" class="Enter_text" placeholder="Enter your Email" name="Enter your Email">
                <div class="subscribe_bt"><a href="#">Subscribe</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section end -->
    </div>
    <!-- templet bg section end -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
</body>
</html>
