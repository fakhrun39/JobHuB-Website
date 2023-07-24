<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['session_email'])) {
    // variabel sesi ada, lanjutkan dengan mengambil data user
    $cookie_email = $_SESSION['session_email'];
    $sql = "SELECT frist_name, last_name FROM users WHERE email = '$cookie_email'";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $first_name = $row['frist_name'];
        $last_name = $row['last_name'];
    } else {
        // handle jika data user tidak ditemukan
        $first_name = '';
        $last_name = '';
    }
} else {
    // handle jika variabel sesi tidak ada
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Proses pengiriman aplikasi
    // Anda dapat menambahkan kode pengolahan data pengajuan aplikasi di sini
    $jobTitle = $_POST['job_title'];
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // Mengunggah file resume ke direktori yang diinginkan
    $targetDirectory = "resume/";
    $resumeFile = $targetDirectory . basename($_FILES['resume']['name']);
    $uploadOk = 1;
    $resumeFileType = strtolower(pathinfo($resumeFile, PATHINFO_EXTENSION));    

    // Mengecek apakah file resume sudah ada atau belum
    if (file_exists($resumeFile)) {
        echo "File resume sudah ada.";
        $uploadOk = 0;
    }

    // Mengecek ukuran file resume (maksimum 5MB)
    if ($_FILES['resume']['size'] > 5 * 1024 * 1024) {
        echo "Ukuran file resume terlalu besar.";
        $uploadOk = 0;
    }

    // Mengecek format file resume (hanya file PDF atau DOCX yang diperbolehkan)
    if ($resumeFileType != "pdf" && $resumeFileType != "docx") {
        echo "Hanya file PDF atau DOCX yang diperbolehkan.";
        $uploadOk = 0;
    }

    // Menyimpan data pengajuan aplikasi ke database jika semua validasi berhasil
    if ($uploadOk == 1) {
        // Simpan data ke database, misalnya menggunakan MySQLi
        include 'koneksi.php';

        // Membuat koneksi ke database
        $conn = new mysqli($servername, $username, $password, $database);

        // Memeriksa koneksi
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Menyimpan data pengajuan aplikasi ke tabel dalam database
        $sql = "INSERT INTO applications (job_title, full_name, email, phone, resume_file) VALUES ('$jobTitle', '$fullName', '$email', '$phone', '$resumeFile')";

        if ($conn->query($sql) === TRUE) {
            // Memindahkan file resume yang diunggah ke direktori yang diinginkan
            if (move_uploaded_file($_FILES['resume']['tmp_name'], $resumeFile)) {
                // Redirect ke halaman success.php setelah sukses menyimpan data
                header("Location: success.php");
                exit();
            } else {
                echo "Terjadi kesalahan dalam memindahkan file.";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
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
<title>Submit Application</title>
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
    <!-- templet bg section start -->
    <!-- submit application section start -->
    <form method="POST" enctype="multipart/form-data"> <!-- Gunakan tag form dengan atribut method="POST" -->
    <div class="submit_application_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="submit_title">Submit Application</h2>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="job_title">Job Title:</label>
                        <input type="text" class="form-control" id="job_title" name="job_title" required>
                    </div>
                    <div class="form-group">
                        <label for="full_name">Full Name:</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" readonly value="<?php echo $first_name . ' ' . $last_name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" readonly value="<?php echo $cookie_email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="resume">Resume:</label>
                        <input type="file" class="form-control" id="resume" name="resume" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>  
            </div>
        </div>
    </div>
</form>
    <!-- submit application section end --> 
    <!-- footer section end -->
    </div>
    <!-- templet bg section end -->
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
</body>
</html>
