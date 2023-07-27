<?php
// Konfigurasi koneksi database
require_once 'database.php';

// Membuat koneksi ke database
$connection = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($connection->connect_error) {
    die("Koneksi database gagal: " . $connection->connect_error);
}

// Mengecek apakah parameter 'id' telah diterima
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Menghapus data berdasarkan 'id'
    $query = "DELETE FROM dinsos WHERE id_kecamatan = '$id'";
    $result = $connection->query($query);

    if ($result) {
        // Mengarahkan kembali ke halaman sebelumnya setelah penghapusan berhasil
        header("Location: table-sosial.php");
        exit();
    } else {
        echo "Terjadi kesalahan saat menghapus data: " . $connection->error;
    }
} else {
    echo "ID data tidak ditemukan.";
}
?>
