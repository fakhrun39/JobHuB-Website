<?php
session_start();
include 'koneksi.php';
// Cek apakah pengguna sudah login
if (!isset($_SESSION['session_email'])) {
    header("Location: login.php");  
    exit();
}
// Ambil informasi pengguna dari sesi
$email = $_SESSION['session_email'];

// Query untuk mengambil frist_name berdasarkan email
$sqlfirst = "SELECT frist_name FROM users WHERE email = '$email'";
$resultFirst = mysqli_query($conn, $sqlfirst);
$first = '';

// Periksa apakah query berhasil dieksekusi
if ($resultFirst) {
    // Ambil data frist_name dari hasil query
    $rowFirst = mysqli_fetch_assoc($resultFirst);
    $first = $rowFirst['frist_name'];
}

// Query untuk mengambil last_name berdasarkan email
$sqllast = "SELECT last_name FROM users WHERE email = '$email'";
$resultLast = mysqli_query($conn, $sqllast);
$last = '';

// Periksa apakah query berhasil dieksekusi
if ($resultLast) {
    // Ambil data last_name dari hasil query
    $rowLast = mysqli_fetch_assoc($resultLast);
    $last = $rowLast['last_name'];
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
        <!-- about section start -->
        <div class="about_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image_2"><img src="images/img-2.png"></div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="mark_text">Your Account Information</h1>
                        <p class="lorem_text">
                            <!-- Tampilkan informasi first name, last name, dan email dari pengguna -->
                            <strong>First Name:</strong> <?php echo $first; ?><br>
                            <strong>Last Name:</strong> <?php echo $last; ?><br>
                            <strong>Email:</strong> <?php echo $email; ?>
                        </p>
                        <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Pekerjaan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query untuk mengambil data pekerjaan dari tabel applications
            $sqlJobs = "SELECT job_title, status FROM applications WHERE email = '$email'";
            $resultJobs = mysqli_query($conn, $sqlJobs);
            if (mysqli_num_rows($resultJobs) > 0) {
                $count = 1;
                while ($rowJobs = mysqli_fetch_assoc($resultJobs)) {
                    $jobTitle = $rowJobs['job_title'];
                    $status = $rowJobs['status'];

                    // Mengganti status angka menjadi keterangan yang lebih jelas
                    $statusKeterangan = '';
                    switch ($status) {
                        case 0:
                            $statusKeterangan = 'Ditolak';
                            break;
                        case 1:
                            $statusKeterangan = 'Sudah Daftar';
                            break;
                        case 2:
                            $statusKeterangan = 'Diterima';
                            break;
                        default:
                            $statusKeterangan = 'Status Tidak Valid';
                    }

                    echo "<tr>";
                    echo "<td>$count</td>";
                    echo "<td>$jobTitle</td>";
                    echo "<td>$statusKeterangan</td>";
                    echo "</tr>";
                    $count++;
                }
            } else {
                echo "<tr><td colspan='3'>Tidak ada data pekerjaan</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--table responsive-->
                            
<!--table responsive-->
        <!-- about section end -->
        <!-- ... (kode bagian lainnya tetap sama seperti sebelumnya) ... -->
    </div>
    <!-- templet bg section end -->
    <!-- ... (kode bagian lainnya tetap sama seperti sebelumnya) ... -->
</body>
