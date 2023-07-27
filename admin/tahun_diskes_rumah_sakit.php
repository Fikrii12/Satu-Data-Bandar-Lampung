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
$sql_rumah_sakit = "SELECT * FROM rumah_sakit WHERE id_tahun = '$selectedYear'";
$data_rumah_sakit = $conn->query($sql_rumah_sakit);

// Menampilkan data pada tabel
echo '<style>';
echo 'a[data-color="#265ed7"] .icon-copy { color: #265ed7; }'; 
echo 'a[data-color="#e95959"] .icon-copy { color: #e95959; }'; 
echo '</style>';

echo "<table class='data-table table nowrap' id='data-table-rumah-sakit'>
      <thead>
           <tr>
               <th>Nama Rumah Sakit</th>
               <th>Rumah Sakit Umum</th>
               <th>Rumah Sakit Khusus</th>
               <th>Tindakan</th>
           </tr>
      </thead>
      <tbody>";

if ($data_rumah_sakit->num_rows > 0) {
    while ($row = $data_rumah_sakit->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["nama_rs"] . "</td>
            <td>" . $row["rs_umum"] . "</td>
            <td>" . $row["rs_kusus"] . "</td>
            <td>
                <div class='table-actions'>
                    <a href='edit-data-rumah-sakit.php?id=" . $row["id_rs"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                    <a href='hapus-baris-data-rumah-sakit.php?id=" . $row["id_rs"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
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
