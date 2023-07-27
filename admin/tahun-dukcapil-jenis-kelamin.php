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

$sql_ducapil_jenis_kelamin = "SELECT * FROM dukcapil_jenis_kelamin WHERE id_tahun = '$selectedYear'";
$ducapil_jenis_kelamin = $conn->query($sql_ducapil_jenis_kelamin);

// Menampilkan data pada tabel
echo '<style>';
echo 'a[data-color="#265ed7"] .icon-copy { color: #265ed7; }'; 
echo 'a[data-color="#e95959"] .icon-copy { color: #e95959; }';
echo '</style>';

echo '<div class="card-box pb-10">';
if ($ducapil_jenis_kelamin->num_rows > 0) {
    echo "<table class='data-table table nowrap' id='data-dukcapil-jenis-kelamin'>
              <thead>
                   <tr>
                       <th>Kecamatan</th>
                       <th>Jumlah Pria</th>
                       <th>Jumlah Wanita</th>
                       <th>Jumlah Total</th>
                       <th>Tindakan</th>
                   </tr>
              </thead>
              <tbody>";
    while ($row = $ducapil_jenis_kelamin->fetch_assoc()) {
         echo "<tr>
              <td>" . $row["kecamatan"] . "</td>
              <td>" . $row["pria"] . "</td>
              <td>" . $row["wanita"] . "</td>
              <td>" . $row["jumlah"] . "</td>
              <td>
                   <div class='table-actions'>
                       <a href='edit-dukcapil-jenis-kelamin.php?id=" . $row["id_kecamatan"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                       <a href='hapus-baris-dukcapil-jenis-kelamin.php?id=" . $row["id_kecamatan"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
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
