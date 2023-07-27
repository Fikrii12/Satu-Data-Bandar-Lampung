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
$sql_posyandu = "SELECT * FROM posyandu WHERE id_tahun = '$selectedYear'";
$data_posyandu = $conn->query($sql_posyandu);

// Menampilkan data pada tabel
echo '<style>';
echo 'a[data-color="#265ed7"] .icon-copy { color: #265ed7; }'; 
echo 'a[data-color="#e95959"] .icon-copy { color: #e95959; }'; 
echo '</style>';

echo "<table class='data-table table nowrap' id='data-table-posyandu'>
      <thead>
           <tr>
               <th>Kecamatan</th>
               <th>Puskesmas</th>
               <th>Pratama</th>
               <th>Madya</th>
               <th>Purnama</th>
               <th>Mandiri</th>
               <th>Jumlah</th>
               <th>Aktif</th>
               <th>Puskeskel</th>
               <th>Tindakan</th>
           </tr>
      </thead>
      <tbody>";

if ($data_posyandu->num_rows > 0) {
    while ($row = $data_posyandu->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["kecamatan"] . "</td>
            <td>" . $row["puskesmas"] . "</td>
            <td>" . $row["pratama"] . "</td>
            <td>" . $row["madya"] . "</td>
            <td>" . $row["purnama"] . "</td>
            <td>" . $row["mandiri"] . "</td>
            <td>" . $row["jumlah"] . "</td>
            <td>" . $row["aktif"] . "</td>
            <td>" . $row["puskeskel"] . "</td>
            <td>
                <div class='table-actions'>
                    <a href='edit-data-posyandu.php?id=" . $row["id_posyandu"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                    <a href='hapus-baris-data-posyandu.php?id=" . $row["id_posyandu"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
                </div>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='10'>Tidak ada data yang ditemukan.</td></tr>";
}

echo "</tbody></table>";

$conn->close();
?>
