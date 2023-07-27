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
$sql_industri_jumlah = "SELECT * FROM industri_jumlah WHERE id_tahun = '$selectedYear'";
$result_industri_jumlah = $conn->query($sql_industri_jumlah);

// Menampilkan data pada tabel
echo '<style>';
echo 'a[data-color="#265ed7"] .icon-copy { color: #265ed7; }'; // Ganti warna ikon edit menjadi biru
echo 'a[data-color="#e95959"] .icon-copy { color: #e95959; }'; // Ganti warna ikon delete menjadi merah
echo '</style>';

echo '<div class="card-box pb-10">';
if ($result_industri_jumlah->num_rows > 0) {
    echo "<table class='data-table table nowrap'>
               <thead>
                    <tr>
                         <th>Industri</th>
                         <th>Jumlah Industri</th>
                         <th>IKAHH</th>
                         <th>ILMEA</th>
                         <th>Tindakan</th>
                    </tr>
               </thead>
               <tbody>";
    while ($row = $result_industri_jumlah->fetch_assoc()) {
        echo "<tr>
               <td>" . $row["industri"] . "</td>
               <td>" . $row["jumlah"] . "</td>
               <td>" . $row["ikahh"] . "</td>
               <td>" . $row["ilmea"] . "</td>
               <td>
                    <div class='table-actions'>
                    <a href='edit-industri-jumlah.php?id=" . $row["id_industri"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                    <a href='hapus-baris-industri-jumlah.php?id=" . $row["id_industri"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
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
