<?php

require_once 'database.php';

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

if (isset($_GET['year'])) {
    $selectedYear = $_GET['year'];
} else {
    $selectedYear = '2022';
}

// Query SQL untuk mengambil data berdasarkan tahun yang dipilih
$sql_tenaga_kerja = "SELECT * FROM tenaga_kerja WHERE id_tahun = '$selectedYear'";
$data_tenaga_kerja = $conn->query($sql_tenaga_kerja);

// Menampilkan data pada tabel
echo '<style>';
echo 'a[data-color="#265ed7"] .icon-copy { color: #265ed7; }'; 
echo 'a[data-color="#e95959"] .icon-copy { color: #e95959; }'; 
echo '</style>';

echo "<table class='data-table table nowrap' id='data-table-tenaga-kerja'>
      <thead>
           <tr>
               <th>Tenaga Kerja</th>
               <th>Jumlah</th>
               <th>Tindakan</th>
           </tr>
      </thead>
      <tbody>";

if ($data_tenaga_kerja->num_rows > 0) {
    while ($row = $data_tenaga_kerja->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["tenaga_kerja"] . "</td>
            <td>" . $row["jumlah"] . "</td>
            <td>
                <div class='table-actions'>
                    <a href='edit-data-tenaga-kerja.php?id=" . $row["id_tenaga"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                    <a href='hapus-baris-data-tenaga-kerja.php?id=" . $row["id_tenaga"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
                </div>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='3'>Tidak ada data yang ditemukan.</td></tr>";
}

echo "</tbody></table>";

$conn->close();
?>
