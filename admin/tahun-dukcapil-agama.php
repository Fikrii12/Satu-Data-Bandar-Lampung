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

$sql_ducapil_agama = "SELECT * FROM dukcapil_agama WHERE id_tahun = '$selectedYear'";
$ducapil_agama = $conn->query($sql_ducapil_agama);

// Menampilkan data pada tabel
echo '<style>';
echo 'a[data-color="#265ed7"] .icon-copy { color: #265ed7; }'; 
echo 'a[data-color="#e95959"] .icon-copy { color: #e95959; }';
echo '</style>';

echo '<div class="card-box pb-10">';
if ($ducapil_agama->num_rows > 0) {
    echo "<table class='data-table table nowrap' id='data-dukcapil-agama'>
              <thead>
                   <tr>
                       <th>Kecamatan</th>
                       <th>Islam</th>
                       <th>Kristen</th>
                       <th>Katolik</th>
                       <th>Hindu</th>
                       <th>Budha</th>
                       <th>Konghucu</th>
                       <th>Kepercayaan</th>
                       <th>Jumlah</th>
                       <th>Tindakan</th>
                   </tr>
              </thead>
              <tbody>";
    while ($row = $ducapil_agama->fetch_assoc()) {
         echo "<tr>
              <td>" . $row["kecamatan"] . "</td>
              <td>" . $row["islam"] . "</td>
              <td>" . $row["kristen"] . "</td>
              <td>" . $row["katolik"] . "</td>
              <td>" . $row["hindu"] . "</td>
              <td>" . $row["budha"] . "</td>
              <td>" . $row["konghucu"] . "</td>
              <td>" . $row["kepercayaan"] . "</td>
              <td>" . $row["jumlah"] . "</td>
              <td>
                   <div class='table-actions'>
                       <a href='edit-ducapil-agama.php?id=" . $row["id_kecamatan"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                       <a href='hapus-baris-ducapil-agama.php?id=" . $row["id_kecamatan"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
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
