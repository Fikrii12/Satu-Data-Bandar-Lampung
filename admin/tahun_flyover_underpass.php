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

$sql_flyover_underpass = "SELECT * FROM dispu_flyover_underpass WHERE id_tahun = '$selectedYear'";
$flyover_underpass = $conn->query($sql_flyover_underpass);

// Menampilkan data pada tabel
echo '<style>';
echo 'a[data-color="#265ed7"] .icon-copy { color: #265ed7; }'; 
echo 'a[data-color="#e95959"] .icon-copy { color: #e95959; }'; 
echo '</style>';

echo '<div class="card-box pb-10">';
if ($flyover_underpass->num_rows > 0) {
     echo "<table class='data-table table nowrap' id='data-table-flyover-underpass'>
               <thead>
                    <tr>
                         <th>Nama Flyover</th>
                         <th>Ukuran Flyover</th>
                         <th>Kondisi Flyover</th>
                         <th>Tahun Pembuatan</th>
                         <th>Tindakan</th>
                    </tr>
               </thead>
               <tbody>";
     while ($row = $flyover_underpass->fetch_assoc()) {
          echo "<tr>
               <td>" . $row["nama_flyover"] . "</td>
               <td>" . $row["ukuran_flyover"] . "</td>
               <td>" . $row["kondisi_flyover"] . "</td>
               <td>" . $row["tahun_pembuatan"] . "</td>
               <td>
                    <div class='table-actions'>
                    <a href='edit-flyover-underpass.php?id=" . $row["id_flyover"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                    <a href='hapus-baris-flyover-underpass.php?id=" . $row["id_flyover"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
                    </div>
               </td>
          </tr>";
     }
     echo "</tbody></table>";
} else {
     echo "Tidak ada data Flyover dan Underpass yang ditemukan.";
}

echo '</div>';

// Menutup koneksi database
$conn->close();
?>
