<?php
require_once 'database.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

if (isset($_GET['year'])) {
    $selectedYear = $_GET['year'];
} else {
    $selectedYear = '2022';
}

$sql_ducapil_pendidikan = "SELECT * FROM dukcapil_pendidikan WHERE id_tahun = '$selectedYear'";
$ducapil_pendidikan = $conn->query($sql_ducapil_pendidikan);

// Menampilkan data pada tabel
echo '<style>';
echo 'a[data-color="#265ed7"] .icon-copy { color: #265ed7; }'; 
echo 'a[data-color="#e95959"] .icon-copy { color: #e95959; }';
echo '</style>';

echo '<div class="card-box pb-10">';
if ($ducapil_pendidikan->num_rows > 0) {
    echo "<table class='data-table table nowrap' id='data-dukcapil-pendidikan'>
              <thead>
                   <tr>
                       <th>Kecamatan</th>
                       <th>Tidak Sekolah</th>
                       <th>Belum Tamat SD</th>
                       <th>Tamat SD</th>
                       <th>SLTP</th>
                       <th>SLTA</th>
                       <th>DI/II</th>
                       <th>DIII</th>
                       <th>DIV/S1</th>
                       <th>S2</th>
                       <th>S3</th>
                       <th>Jumlah</th>
                       <th>Tindakan</th>
                   </tr>
              </thead>
              <tbody>";
    while ($row = $ducapil_pendidikan->fetch_assoc()) {
         echo "<tr>
              <td>" . $row["kecamatan"] . "</td>
              <td>" . $row["tidak_sekolah"] . "</td>
              <td>" . $row["belum_sd"] . "</td>
              <td>" . $row["tamat_sd"] . "</td>
              <td>" . $row["sltp"] . "</td>
              <td>" . $row["slta"] . "</td>
              <td>" . $row["d1_2"] . "</td>
              <td>" . $row["d3"] . "</td>
              <td>" . $row["d4_s1"] . "</td>
              <td>" . $row["s2"] . "</td>
              <td>" . $row["s3"] . "</td>
              <td>" . $row["jumlah"] . "</td>
              <td>
                   <div class='table-actions'>
                       <a href='edit-ducapil-pendidikan.php?id=" . $row["id_kecamatan"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                       <a href='hapus-baris-ducapil-pendidikan.php?id=" . $row["id_kecamatan"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
                   </div>
              </td>
         </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "Tidak ada data yang ditemukan.";
}
echo '</div>';

$conn->close();
?>
