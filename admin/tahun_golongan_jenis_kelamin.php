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
$sql_bkd_golongan_jenis_kelamin = "SELECT * FROM bkd_golongan_jenis_kelamin WHERE id_tahun = '$selectedYear'";
$bkd_golongan_jenis_kelamin = $conn->query($sql_bkd_golongan_jenis_kelamin);





// Menampilkan data pada tabel
echo '<style>';
echo 'a[data-color="#265ed7"] .icon-copy { color: #265ed7; }'; // Ganti warna ikon edit menjadi biru
echo 'a[data-color="#e95959"] .icon-copy { color: #e95959; }'; // Ganti warna ikon delete menjadi merah
echo '</style>';




echo '<div class="card-box pb-10">';
if ($bkd_golongan_jenis_kelamin->num_rows > 0) {
    echo "<table class='data-table table nowrap'>
            <thead>
                <tr>
                    <th>Golongan</th>
                    <th>Jumlah Pria</th>
                    <th>Jumlah Wanita</th>
                    <th>Jumlah Total</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>";
    // Menampilkan data pada tabel bkd_pendidikan
    while ($row = $bkd_golongan_jenis_kelamin->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["golongan"] . "</td>
                <td>" . $row["pria"] . "</td>
                <td>" . $row["wanita"] . "</td>
                <td>" . $row["jumlah"] . "</td>
                <td>
                    <div class='table-actions'>
                        <a href='edit-golongan-jenis-kelamin.php?id=" . $row["id_golongan_jenis_kelamin"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                        <a href='hapus-baris-golongan-jenis-kelamin.php?id=" . $row["id_golongan_jenis_kelamin"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
                    </div>
                </td>
            </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "Tidak ada data yang ditemukan.";
}
echo '</div>';

// Menutup koneksi database
$conn->close();
?>
