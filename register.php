<?php
// Koneksi ke database
include 'koneksi.php';
// Mendapatkan data dari formulir register
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Memeriksa apakah username sudah digunakan
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Username sudah digunakan
    echo 'Username sudah terdaftar. Silakan gunakan username lain.';
} else {
    // Menambahkan pengguna baru ke tabel users
    $query = "INSERT INTO users (username, email, password) VALUES ('$username','$email', '$password')";
    if (mysqli_query($conn, $query)) {
        // Registrasi berhasil
        echo 'Registrasi berhasil. Silakan login dengan akun baru.';
        echo '<script>window.location.href = "index.html";</script>';
    } else {
        // Registrasi gagal
        echo 'Registrasi gagal. Silakan coba lagi.';
    }
}

// Menutup koneksi database
mysqli_close($conn);
?>
