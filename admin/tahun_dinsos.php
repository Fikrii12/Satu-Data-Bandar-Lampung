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

$sql_dinsos = "SELECT * FROM dinsos WHERE id_tahun = '$selectedYear'";
$dinsos = $conn->query($sql_dinsos);

// Menampilkan data pada tabel
echo '<style>';
echo 'a[data-color="#265ed7"] .icon-copy { color: #265ed7; }'; 
echo 'a[data-color="#e95959"] .icon-copy { color: #e95959; }'; 
echo '</style>';

echo '<div class="card-box pb-10">';
if ($dinsos->num_rows > 0) {
    echo "<table class='data-table table nowrap' id='data-table-dinsos'>
            <thead>
                <tr>
                    <th>Kecamatan</th>
                    <th>Jumlah Individu</th>
                    <th>Jumlah Keluarga</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>";
    while ($row = $dinsos->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["kecamatan"] . "</td>
            <td>" . $row["jumlah_individu"] . "</td>
            <td>" . $row["jumlah_keluarga"] . "</td>
            <td>
                <div class='table-actions'>
                    <a href='edit-dinsos.php?id=" . $row["id_kecamatan"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                    <a href='hapus-baris-dinsos.php?id=" . $row["id_kecamatan"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
                </div>
            </td>
        </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "Tidak ada data Dinsos yang ditemukan.";
}

echo '</div>';

// Menutup koneksi database
$conn->close();
?>
