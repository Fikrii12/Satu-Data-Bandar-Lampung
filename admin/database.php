<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "databandarlampung"; 


// Membuat koneksi dengan database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}








// Query SQL untuk mengambil data berdasarkan tahun yang dipilih
$sql_bkd_pendidikan = "SELECT * FROM bkd_pendidikan";
$bkd_pendidikan = $conn->query($sql_bkd_pendidikan);

$sql_bkd_umur = "SELECT * FROM bkd_umur ";
$bkd_umur = $conn->query($sql_bkd_umur);

$sql_dispan = "SELECT * FROM dispan";
$dinas_pangan = $conn->query($sql_dispan);

$sql_dispetani = "SELECT * FROM dispentani";
$dinas_pertanian = $conn->query($sql_dispetani);

$sql_bkd_golongan_umur = "SELECT * FROM bkd_golongan_umur";
$bkd_golongan_umur = $conn->query($sql_bkd_golongan_umur);

$sql_bkd_golongan_jenis_kelamin = "SELECT * FROM bkd_golongan_jenis_kelamin";
$bkd_golongan_jenis_kelamin = $conn->query($sql_bkd_golongan_jenis_kelamin);

$sql_dishub = "SELECT * FROM dishub";
$dishub = $conn->query($sql_dishub);

$sql_dishub_wajib_umum = "SELECT * FROM dishub_wajib_umum";
$dishub_wajib_umum = $conn->query($sql_dishub_wajib_umum);

$sql_dishub_wajib_noumum = "SELECT * FROM dishub_wajib_noumum";
$dishub_wajib_noumum = $conn->query($sql_dishub_wajib_noumum);

$sql_dishub_wajib_biaya = "SELECT * FROM dishub_wajib_biaya";
$dishub_wajib_biaya = $conn->query($sql_dishub_wajib_biaya);

$sql_dinsos = "SELECT * FROM dinsos";
$dinsos = $conn->query($sql_dinsos);

$sql_flyover_underpass = "SELECT * FROM dispu_flyover_underpass";
$flyover_underpass = $conn->query($sql_flyover_underpass);

$sql_puskesmas = "SELECT * FROM puskesmas";
$puskesmas = $conn->query($sql_puskesmas);

$sql_rumah_sakit = "SELECT * FROM rumah_sakit ";
$rumah_sakit = $conn->query($sql_rumah_sakit);

$sql_tenaga_kerja = "SELECT * FROM tenaga_kerja";
$tenaga_kerja = $conn->query($sql_tenaga_kerja);

$sql_posyandu = "SELECT * FROM posyandu";
$posyandu = $conn->query($sql_posyandu);

$sql_ducapil_umur = "SELECT * FROM ducapil_umur";
$ducapil_umur = $conn->query($sql_ducapil_umur);

$sql_ducapil_agama = "SELECT * FROM dukcapil_agama";
$ducapil_agama = $conn->query($sql_ducapil_agama);

$sql_ducapil_pendidikan = "SELECT * FROM dukcapil_pendidikan";
$ducapil_pendidikan = $conn->query($sql_ducapil_pendidikan);

$sql_dukcapil_jenis_kelamin = "SELECT * FROM dukcapil_jenis_kelamin";
$dukcapil_jenis_kelamin = $conn->query($sql_dukcapil_jenis_kelamin);

$sql_industri_jumlah = "SELECT * FROM industri_jumlah";
$industri_jumlah = $conn->query($sql_industri_jumlah);

$sql_dokumen = "SELECT * FROM documents";
$dokumen = $conn->query($sql_dokumen);







// Menutup koneksi database
$conn->close();
?>
