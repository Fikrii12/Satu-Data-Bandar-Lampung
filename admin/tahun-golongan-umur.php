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

// Query SQL untuk mengambil data berdasarkan tahun yang dipilih
$sql_golongan_umur = "SELECT * FROM bkd_golongan_umur WHERE id_tahun = '$selectedYear'";
$bkd_golongan_umur = $conn->query($sql_golongan_umur);





// Menampilkan data pada tabel
echo '<style>';
echo 'a[data-color="#265ed7"] .icon-copy { color: #265ed7; }'; // Ganti warna ikon edit menjadi biru
echo 'a[data-color="#e95959"] .icon-copy { color: #e95959; }'; // Ganti warna ikon delete menjadi merah
echo '</style>';




echo '<div class="card-box pb-10">';
if ($bkd_golongan_umur->num_rows > 0) {
     echo "<table class='data-table table nowrap'>
               <thead>
                    <tr>
                         <th>Golongan</th>
                         <th>62</th>
                         <th>20-25</th>
                         <th>26-30</th>
                         <th>31-35</th>
                         <th>36-40</th>
                         <th>41-45</th>
                         <th>46-50</th>
                         <th>51-55</th>
                         <th>56-58</th>
                         <th>50-60</th>
                         <th>Jumlah</th>
                         <th>Tindakan</th>
                    </tr>
               </thead>
               <tbody>";
     while ($row = $bkd_golongan_umur->fetch_assoc()) {
          echo "<tr>
               <td>" . $row["golongan"] . "</td>
               <td>" . $row["umur1"] . "</td>
               <td>" . $row["umur2"] . "</td>
               <td>" . $row["umur3"] . "</td>
               <td>" . $row["umur4"] . "</td>
               <td>" . $row["umur5"] . "</td>
               <td>" . $row["umur6"] . "</td>
               <td>" . $row["umur7"] . "</td>
               <td>" . $row["umur8"] . "</td>
               <td>" . $row["umur9"] . "</td>
               <td>" . $row["umur10"] . "</td>
               <td>" . $row["jumlah"] . "</td>
               <td>
                    <div class='table-actions'>
                    <a href='edit-golongan-umur.php?id=" . $row["id_golongan"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                    <a href='hapus-baris-golongan-umur.php?id=" . $row["id_golongan"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
                    </div>
               </td>
          </tr>";
     }
     echo "</tbody></table>";
} else {
     echo "Tidak ada data yang ditemukan.";
}
echo '</div>';

// Menutup koneksi database
$conn->close();
?>
