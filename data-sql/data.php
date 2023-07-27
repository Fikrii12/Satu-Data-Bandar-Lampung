<?php
require_once("../admin/config.php");

// Buat query untuk mengambil data dari tabel bkd_pendidikan
$sql_pendidikan = "SELECT pendidikan, pria, wanita, jumlah FROM bkd_pendidikan";

// Jalankan query
$result_pendidikan = mysqli_query($db_connection, $sql_pendidikan);

// Inisialisasi array untuk menyimpan data pendidikan
$data_pendidikan = array();

// Loop untuk memasukkan data dari database ke dalam array pendidikan
if (mysqli_num_rows($result_pendidikan) > 0) {
    while ($row = mysqli_fetch_assoc($result_pendidikan)) {
        $data_pendidikan[] = array(
            "pendidikan" => $row["pendidikan"],
            "pria" => (int)$row["pria"],
            "wanita" => (int)$row["wanita"],
            "jumlah" => (int)$row["jumlah"],
        );
    }
}

// Buat query untuk mengambil data dari tabel bkd_golongan_jenis_kelamin
$sql_golongan = "SELECT golongan, pria, wanita, jumlah FROM bkd_golongan_jenis_kelamin";

// Jalankan query
$result_golongan = mysqli_query($db_connection, $sql_golongan);

// Inisialisasi array untuk menyimpan data golongan
$data_golongan = array();

// Loop untuk memasukkan data dari database ke dalam array golongan
if (mysqli_num_rows($result_golongan) > 0) {
    while ($row = mysqli_fetch_assoc($result_golongan)) {
        $data_golongan[] = array(
            "golongan" => $row["golongan"],
            "pria" => (int)$row["pria"],
            "wanita" => (int)$row["wanita"],
            "jumlah" => (int)$row["jumlah"],
        );
    }
}

// Buat query untuk mengambil data dari tabel dinsos
$sql_dinsos = "SELECT kecamatan, jumlah_individu, jumlah_keluarga FROM dinsos";

// Jalankan query
$result_dinsos = mysqli_query($db_connection, $sql_dinsos);

// Inisialisasi array untuk menyimpan data dinsos
$data_dinsos = array();

// Loop untuk memasukkan data dari database ke dalam array dinsos
if (mysqli_num_rows($result_dinsos) > 0) {
    while ($row = mysqli_fetch_assoc($result_dinsos)) {
        $data_dinsos[] = array(
            "kecamatan" => $row["kecamatan"],
            "jumlah_individu" => (int)$row["jumlah_individu"],
            "jumlah_keluarga" => (int)$row["jumlah_keluarga"],
        );
    }
}

// Buat query untuk mengambil data dari tabel dishub
$sql_dishub = "SELECT bulan, truck_pick_up, bus, oplet FROM dishub";

// Jalankan query
$result_dishub = mysqli_query($db_connection, $sql_dishub);

// Inisialisasi array untuk menyimpan data dishub
$data_dishub = array();

// Loop untuk memasukkan data dari database ke dalam array dishub
if (mysqli_num_rows($result_dishub) > 0) {
    while ($row = mysqli_fetch_assoc($result_dishub)) {
        $data_dishub[] = array(
            "bulan" => $row["bulan"],
            "truck_pick_up" => (int)$row["truck_pick_up"],
            "bus" => (int)$row["bus"],
            "oplet" => (int)$row["oplet"],
        );
    }
}

// Buat query untuk mengambil data dari tabel dispentani
$sql_dispentani = "SELECT nama_tanaman, luas_tanaman, luas_rusak, luas_penanaman FROM dispentani";

// Jalankan query
$result_dispentani = mysqli_query($db_connection, $sql_dispentani);

// Inisialisasi array untuk menyimpan data dispentani
$data_dispentani = array();

// Loop untuk memasukkan data dari database ke dalam array dispentani
if (mysqli_num_rows($result_dispentani) > 0) {
    while ($row = mysqli_fetch_assoc($result_dispentani)) {
        $data_dispentani[] = array(
            "nama_tanaman" => $row["nama_tanaman"],
            "luas_tanaman" => (int)$row["luas_tanaman"],
            "luas_rusak" => (int)$row["luas_rusak"],
            "luas_penanaman" => (int)$row["luas_penanaman"],
        );
    }
}

// Buat query untuk mengambil data dari tabel dispan
$sql_dispan = "SELECT komoditas, total, kebutuhan, stok_akhir, id_tahun FROM dispan";

// Jalankan query
$result_dispan = mysqli_query($db_connection, $sql_dispan);

// Inisialisasi array untuk menyimpan data dispan
$data_dispan = array();

// Loop untuk memasukkan data dari database ke dalam array dispan
if (mysqli_num_rows($result_dispan) > 0) {
    while ($row = mysqli_fetch_assoc($result_dispan)) {
        $data_dispan[] = array(
            "komoditas" => $row["komoditas"],
            "total" => (int)$row["total"],
            "kebutuhan" => (int)$row["kebutuhan"],
            "stok_akhir" => (int)$row["stok_akhir"],
            "id_tahun" => (int)$row["id_tahun"],
        );
    }
}

// Tutup koneksi
mysqli_close($db_connection);

// Convert data arrays to JSON format
$json_data_pendidikan = json_encode($data_pendidikan);
$json_data_golongan = json_encode($data_golongan);
$json_data_dinsos = json_encode($data_dinsos);
$json_data_dishub = json_encode($data_dishub);
$json_data_dispentani = json_encode($data_dispentani);
$json_data_dispan = json_encode($data_dispan);

// Output the JSON data
header('Content-Type: application/json');
echo '{"pendidikan": ' . $json_data_pendidikan . ', "golongan": ' . $json_data_golongan . ', "dinsos": ' . $json_data_dinsos . ', "dishub": ' . $json_data_dishub . ', "dispentani": ' . $json_data_dispentani . ', "dispan": ' . $json_data_dispan . '}';
?>