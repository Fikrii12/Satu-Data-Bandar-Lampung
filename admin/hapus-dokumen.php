<?php
// Konfigurasi koneksi database
require_once 'database.php';

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}


if (isset($_GET['id'])) {
    $id_dok = $_GET['id'];


    $delete_query = "DELETE FROM documents WHERE id_dok = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("s", $id_dok);

    if ($stmt->execute()) {

        header("Location: pubikasi.php?status=success_delete");
        exit();
    } else {
 
        header("Location: publikasi.php?status=error_delete");
        exit();
    }
} else {
  
    header("Location: dokumen.php?status=error_id");
    exit();
}


$conn->close();
?>
