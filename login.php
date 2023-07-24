<?php
session_start();
$host = 'localhost';
$username = 'root';
$password = 'fakhrun';
$database = 'db_jobhub';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
$err = "";
$email = "";
$ingatpassword = "";
if(isset($_COOKIE['coookie_email'])){
    $coookie_email = $_COOKIE['coookie_email'];
    $cookie_password = $_COOKIE['cookie_password'];

    $sql1 = "select * from users where email = '$coookie_email'";
    $q1   = mysqli_query($conn,$sql1);
    $r1   = mysqli_fetch_array($q1);
    if($r1['password'] == $cookie_password){
        $_SESSION['session_email'] = $coookie_email;
        $_SESSION['session_password'] = $cookie_password;
    }
}

if(isset($_SESSION['session_email'])){
    header("location:dashboard.php");
    exit();
}

if(isset($_POST['login'])){
    $email   = $_POST['email'];
    $password   = $_POST['password'];
    $ingatpassword   = $_POST['ingatpassword'];

    if($email == '' or $password == ''){
        $err .= "<li>Silakan masukkan email dan juga password.</li>";
    }else{
        $sql1 = "select * from users where email = '$email'";
        $q1   = mysqli_query($conn,$sql1);
        $r1   = mysqli_fetch_array($q1);

        if($r1['email'] == ''){
            $err .= "<li>email <b>$email</b> tidak tersedia.</li>";
        }elseif($r1['password'] != $password){
            $err .= "<li>Password yang dimasukkan tidak sesuai.</li>";
        }       
        
        if(empty($err)){
            $_SESSION['session_email'] = $email; //server
            $_SESSION['session_password'] = $password;

            if($ingatpassword == 1){
                $cookie_name = "coookie_email";
                $cookie_value = $email;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");

                $cookie_name = "cookie_password";
                $cookie_value = $password;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");
            }
            header("location:dashboard.php");
        }
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
<title>Login</title>
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
        <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.html">JOBS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.html">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.html">REGISTER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">LOGIN</a>
            </li>
          </ul>  
          <form class="form-inline my-2 my-lg-0">
            <div class="search_icon"><a href="#"><img src="images/call-icon.png"><span class="padding_left0">TELP : +01 9876543210</span></a></div>
            <div class="search_icon"><a href="#"><img src="images/mail-icon.png"><span class="padding_left0">EMAIL : demo@gmail.com</span></a></div>
            <div class="search_icon"><a href="#"><img src="images/search-icon.png"></a></div>
          </form>
        </div>
      </nav>
    </div>
    <!-- header section end -->
    <!-- templet bg section start -->
    <div class="templet_bg"> 
    <!-- login section start -->
    <div class="login_section layout_padding">
      <div class="container">
        <h1 class="login_text">Login</h1>
        <?php if($err){ ?>
                    <div id="login-alert" class="alert alert-danger col-sm-12">
                        <ul><?php echo $err ?></ul>
                    </div>
                <?php } ?> 
                <form id="loginform" class="form-horizontal" action="" method="post" role="form">       
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="email" value="<?php echo $email ?>" placeholder="email">                                        
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div class="input-group">
                        <div class="checkbox">
                        <label>
                            <input id="login-remember" type="checkbox" name="ingatpassword" value="1" <?php if($password == '1') echo "checked"?>> Ingat Aku
                        </label>
                        </div>
                    </div>
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <input type="submit" name="login" class="btn btn-primary" value="Login"/>
                        </div>
                    </div>
                </form>  
      </div>
    </div>
    <!-- login section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="footer_logo"><a href="index.html"><img src="images/logo.png"></a></div>
              <h4 class="contact_text">Hubungi Kami</h4>
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