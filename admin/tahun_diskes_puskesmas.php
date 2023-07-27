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
$sql_puskesmas = "SELECT * FROM puskesmas WHERE id_tahun = '$selectedYear'";
$data_puskesmas = $conn->query($sql_puskesmas);

// Menampilkan data pada tabel
echo '<style>';
echo 'a[data-color="#265ed7"] .icon-copy { color: #265ed7; }'; 
echo 'a[data-color="#e95959"] .icon-copy { color: #e95959; }'; 
echo '</style>';

echo "<table class='data-table table nowrap' id='data-table-puskesmas'>
      <thead>
           <tr>
               <th>Sarana</th>
               <th>Rawat Inap</th>
               <th>Non Rawat Inap</th>
               <th>Tindakan</th>
           </tr>
      </thead>
      <tbody>";

if ($data_puskesmas->num_rows > 0) {
    while ($row = $data_puskesmas->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["sarana"] . "</td>
            <td>" . $row["rawat_inap"] . "</td>
            <td>" . $row["non_rawat_inap"] . "</td>
            <td>
                <div class='table-actions'>
                    <a href='edit-data-puskesmas.php?id=" . $row["id_sarana"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                    <a href='hapus-baris-data-puskesmas.php?id=" . $row["id_sarana"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
                </div>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='4'>Tidak ada data yang ditemukan.</td></tr>";
}

echo "</tbody></table>";


$conn->close();
?>
