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


$sql_ducapil_umur = "SELECT * FROM ducapil_umur WHERE id_tahun = '$selectedYear'";
$ducapil_umur = $conn->query($sql_ducapil_umur);

// Menampilkan data pada tabel
echo '<style>';
echo 'a[data-color="#265ed7"] .icon-copy { color: #265ed7; }'; 
echo 'a[data-color="#e95959"] .icon-copy { color: #e95959; }';
echo '</style>';

echo '<div class="card-box pb-10">';
if ($ducapil_umur->num_rows > 0) {
    echo "<table class='data-table table nowrap'>
              <thead>
                   <tr>
                   <th>Kecamatan</th>
                   <th>0-9</th>
                   <th>10-19</th>
                   <th>20-29</th>
                   <th>30-39</th>
                   <th>40-49</th>
                   <th>50-59</th>
                   <th>60-69</th>
                   <th>>70</th>
                   <th>Timdakan</th>
                   </tr>
              </thead>
              <tbody>";
    while ($row = $ducapil_umur->fetch_assoc()) {
         echo "<tr>
              <td>" . $row["kecamatan"] . "</td>
              <td>" . $row["umur1"] . "</td>
              <td>" . $row["umur2"] . "</td>
              <td>" . $row["umur3"] . "</td>
              <td>" . $row["umur4"] . "</td>
              <td>" . $row["umur5"] . "</td>
              <td>" . $row["umur6"] . "</td>
              <td>" . $row["umur7"] . "</td>
              <td>" . $row["umur8"] . "</td>
              <td>
                   <div class='table-actions'>
                       <a href='edit-ducapil-umur.php?id=" . $row["id_kecamatan"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                     <a href='hapus-baris-ducapil-umur.php?id=" . $row["id_kecamatan"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>

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
