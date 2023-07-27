<?php 

// DB Config.
$host = "localhost";
$username = "root";
$password = "";
$db_name = "satu_data";

// Membuat koneksi ke database.
$db_connection = mysqli_connect($host, $username, $password, $db_name);

// Mengecek koneksi.
if (mysqli_connect_errno()) {
    echo "Connection failed : " . mysqli_connect_error();
    exit();
}
