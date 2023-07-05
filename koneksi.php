<?php
$host = 'localhost';
$username = 'root';
$password = 'fakhrun';
$database = 'db_jobhub';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
?>