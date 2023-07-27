<?php
// Konfigurasi koneksi database
require_once 'database.php';
// Membuat koneksi dengan database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Tambahkan kode ini untuk mengambil data tahun dari permintaan AJAX
if (isset($_GET['year'])) {
    $selectedYear = $_GET['year'];
} else {
    // Jika tidak ada tahun yang dipilih, default ke tahun 2022
    $selectedYear = '2022';
}

// Query SQL untuk mengambil data berdasarkan tahun yang dipilih
$sql_dispan = "SELECT * FROM dispan WHERE id_tahun = '$selectedYear'";
$dinas_pangan = $conn->query($sql_dispan);



// Menampilkan data pada tabel
echo '<style>';
echo 'a[data-color="#265ed7"] .icon-copy { color: #265ed7; }'; // Ganti warna ikon edit menjadi biru
echo 'a[data-color="#e95959"] .icon-copy { color: #e95959; }'; // Ganti warna ikon delete menjadi merah
echo '</style>';


if ($dinas_pangan->num_rows > 0) {
    while ($row = $dinas_pangan->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["komoditas"] . "</td>
            <td>" . $row["total"] . "</td>
            <td>" . $row["kebutuhan"] . "</td>
            <td>" . $row["stok_akhir"] . "</td>
            <td>
                <div class='table-actions'>
                    <a href='edit-dispan.php?id=" . $row["id_komoditas"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                    <a href='hapus-baris-dinasPangan.php?id=" . $row["id_komoditas"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
                </div>
            </td>
        </tr>";
    }
} else {
    
}


// Menutup koneksi database
$conn->close();
?>
