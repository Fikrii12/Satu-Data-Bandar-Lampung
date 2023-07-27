<?php
require_once("../admin/database.php");

// Buat query untuk mengambil data dari tabel bkd_pendidikan
$sql_pendidikan = "SELECT pendidikan, pria, wanita, jumlah FROM bkd_pendidikan";

// Jalankan query
$result_pendidikan = mysqli_query($conn, $sql_pendidikan);

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
$result_golongan = mysqli_query($conn, $sql_golongan);

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
$result_dinsos = mysqli_query($conn, $sql_dinsos);

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
$result_dishub = mysqli_query($conn, $sql_dishub);

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
$result_dispentani = mysqli_query($conn, $sql_dispentani);

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
$result_dispan = mysqli_query($conn, $sql_dispan);

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

/// Buat query untuk mengambil data dari tabel bkd_gol_umur
$sql_gol_umur = "SELECT golongan, umur1, umur2, umur3, umur4, umur5, umur6, umur7, umur8, umur9, umur10, jumlah FROM bkd_gol_umur";

// Jalankan query
$result_gol_umur = mysqli_query($conn, $sql_gol_umur);

// Inisialisasi array untuk menyimpan data gol_umur 
$data_gol_umur = array();

// Loop untuk memasukkan data dari database ke dalam array gol_umur
if (mysqli_num_rows($result_gol_umur) > 0) {
    while ($row = mysqli_fetch_assoc($result_gol_umur)) {
        $data_gol_umur[] = array(
            "golongan" => $row["golongan"],
            "umur1" => (int)$row["umur1"],
            "umur2" => (int)$row["umur2"],
            "umur3" => (int)$row["umur3"],
            "umur4" => (int)$row["umur4"],
            "umur5" => (int)$row["umur5"],
            "umur6" => (int)$row["umur6"],
            "umur7" => (int)$row["umur7"],
            "umur8" => (int)$row["umur8"],
            "umur9" => (int)$row["umur9"],
            "umur10" => (int)$row["umur10"],
            "jumlah" => (int)$row["jumlah"],
        );
    }
}

// Buat query untuk mengambil data dari tabel bkd_umur
$sql_umur = "SELECT umur, pria, wanita, jumlah FROM bkd_umur";

// Jalankan query
$result_umur = mysqli_query($conn, $sql_umur);

// Inisialisasi array untuk menyimpan data umur
$data_umur = array();

// Loop untuk memasukkan data dari database ke dalam array umur
if (mysqli_num_rows($result_umur) > 0) {
    while ($row = mysqli_fetch_assoc($result_umur)) {
        $data_umur[] = array(
            "umur" => $row["umur"],
            "pria" => (int)$row["pria"],
            "wanita" => (int)$row["wanita"],
            "jumlah" => (int)$row["jumlah"],
        );
    }
}


// Buat query untuk mengambil data dari tabel dishub_wajib_noumum
$sql_dishub_wajib_noumum = "SELECT jenis, jumlah FROM dishub_wajib_noumum";

// Jalankan query
$result_dishub_wajib_noumum = mysqli_query($conn, $sql_dishub_wajib_noumum);

// Inisialisasi array untuk menyimpan data dishub_wajib_noumum
$data_dishub_wajib_noumum = array();

// Loop untuk memasukkan data dari database ke dalam array dishub_wajib_noumum
if (mysqli_num_rows($result_dishub_wajib_noumum) > 0) {
    while ($row = mysqli_fetch_assoc($result_dishub_wajib_noumum)) {
        $data_dishub_wajib_noumum[] = array(
            "jenis" => $row["jenis"],
            "jumlah" => (int)$row["jumlah"],
        );
    }
}

/// Buat query untuk mengambil data dari tabel dishub_wajib_umum
$sql_dishub_wajib_umum = "SELECT jenis_mobil, jumlah_mobil FROM dishub_wajib_umum";

// Jalankan query
$result_dishub_wajib_umum = mysqli_query($conn, $sql_dishub_wajib_umum);

// Inisialisasi array untuk menyimpan data dishub_wajib_umum
$data_dishub_wajib_umum = array();

// Loop untuk memasukkan data dari database ke dalam array dishub_wajib_umum
if (mysqli_num_rows($result_dishub_wajib_umum) > 0) {
    while ($row = mysqli_fetch_assoc($result_dishub_wajib_umum)) {
        $data_dishub_wajib_umum[] = array(
            "jenis_mobil" => $row["jenis_mobil"],
            "jumlah_mobil" => (int)$row["jumlah_mobil"],
        );
    }
}

// Buat query untuk mengambil data dari tabel dispu_flyover_underpass
$sql_dispu_flyover_underpass = "SELECT nama_flyover, ukuran_flyover, kondisi_flyover, tahun_pembuatan FROM dispu_flyover_underpass";

// Jalankan query
$result_dispu_flyover_underpass = mysqli_query($conn, $sql_dispu_flyover_underpass);

// Inisialisasi array untuk menyimpan data dispu_flyover_underpass
$data_dispu_flyover_underpass = array();

// Loop untuk memasukkan data dari database ke dalam array dispu_flyover_underpass
if (mysqli_num_rows($result_dispu_flyover_underpass) > 0) {
    while ($row = mysqli_fetch_assoc($result_dispu_flyover_underpass)) {
        $data_dispu_flyover_underpass[] = array(
            "nama_flyover" => $row["nama_flyover"],
            "ukuran_flyover" => (int)$row["ukuran_flyover"],
            "kondisi_flyover" => $row["kondisi_flyover"],
            "tahun_pembuatan" => (int)$row["tahun_pembuatan"],
        );
    }
}

// Buat query untuk mengambil data dari tabel ducapil_umur
$sql_ducapil_umur = "SELECT kecamatan, umur1, umur2, umur3, umur4, umur5, umur6, umur7, umur8 FROM ducapil_umur";

// Jalankan query
$result_ducapil_umur = mysqli_query($conn, $sql_ducapil_umur);

// Inisialisasi array untuk menyimpan data ducapil_umur
$data_ducapil_umur = array();

// Loop untuk memasukkan data dari database ke dalam array ducapil_umur
if (mysqli_num_rows($result_ducapil_umur) > 0) {
    while ($row = mysqli_fetch_assoc($result_ducapil_umur)) {
        $data_ducapil_umur[] = array(
            "kecamatan" => $row["kecamatan"],
            "umur1" => (int)$row["umur1"],
            "umur2" => (int)$row["umur2"],
            "umur3" => (int)$row["umur3"],
            "umur4" => (int)$row["umur4"],
            "umur5" => (int)$row["umur5"],
            "umur6" => (int)$row["umur6"],
            "umur7" => (int)$row["umur7"],
            "umur8" => (int)$row["umur8"],
        );
    }
}


// Buat query untuk mengambil data dari tabel dukcapil_agama
$sql_dukcapil_agama = "SELECT kecamatan, islam, kristen, katolik, hindu, budha, konghucu, kepercayaan, jumlah FROM dukcapil_agama";

// Jalankan query
$result_dukcapil_agama = mysqli_query($conn, $sql_dukcapil_agama);

// Inisialisasi array untuk menyimpan data dukcapil_agama
$data_dukcapil_agama = array();

// Loop untuk memasukkan data dari database ke dalam array dukcapil_agama
if (mysqli_num_rows($result_dukcapil_agama) > 0) {
    while ($row = mysqli_fetch_assoc($result_dukcapil_agama)) {
        $data_dukcapil_agama[] = array(
            "kecamatan" => $row["kecamatan"],
            "islam" => (int)$row["islam"],
            "kristen" => (int)$row["kristen"],
            "katolik" => (int)$row["katolik"],
            "hindu" => (int)$row["hindu"],
            "budha" => (int)$row["budha"],
            "konghucu" => (int)$row["konghucu"],
            "kepercayaan" => (int)$row["kepercayaan"],
            "jumlah" => (int)$row["jumlah"],
        );
    }
}

// Buat query untuk mengambil data dari tabel dukcapil_jenis_kelamin
$sql_dukcapil_jenis_kelamin = "SELECT kecamatan, pria, wanita, jumlah FROM dukcapil_jenis_kelamin";

// Jalankan query
$result_dukcapil_jenis_kelamin = mysqli_query($conn, $sql_dukcapil_jenis_kelamin);

// Inisialisasi array untuk menyimpan data dukcapil_jenis_kelamin
$data_dukcapil_jenis_kelamin = array();

// Loop untuk memasukkan data dari database ke dalam array dukcapil_jenis_kelamin
if (mysqli_num_rows($result_dukcapil_jenis_kelamin) > 0) {
    while ($row = mysqli_fetch_assoc($result_dukcapil_jenis_kelamin)) {
        $data_dukcapil_jenis_kelamin[] = array(
            "kecamatan" => $row["kecamatan"],
            "pria" => (int)$row["pria"],
            "wanita" => (int)$row["wanita"],
            "jumlah" => (int)$row["jumlah"],
        );
    }
}

// Buat query untuk mengambil data dari tabel dukcapil_pendidikan
$sql_dukcapil_pendidikan = "SELECT kecamatan, tidak_sekolah, belum_sd, tamat_sd, sltp, slta, d1_2, d3, d4_s1, s2, s3, jumlah FROM dukcapil_pendidikan";

// Jalankan query
$result_dukcapil_pendidikan = mysqli_query($conn, $sql_dukcapil_pendidikan);

// Inisialisasi array untuk menyimpan data dukcapil_pendidikan
$data_dukcapil_pendidikan = array();

// Loop untuk memasukkan data dari database ke dalam array dukcapil_pendidikan
if (mysqli_num_rows($result_dukcapil_pendidikan) > 0) {
    while ($row = mysqli_fetch_assoc($result_dukcapil_pendidikan)) {
        $data_dukcapil_pendidikan[] = array(
            "kecamatan" => $row["kecamatan"],
            "tidak_sekolah" => (int)$row["tidak_sekolah"],
            "belum_sd" => (int)$row["belum_sd"],
            "tamat_sd" => (int)$row["tamat_sd"],
            "sltp" => (int)$row["sltp"],
            "slta" => (int)$row["slta"],
            "d1_2" => (int)$row["d1_2"],
            "d3" => (int)$row["d3"],
            "d4_s1" => (int)$row["d4_s1"],
            "s2" => (int)$row["s2"],
            "s3" => (int)$row["s3"],
            "jumlah" => (int)$row["jumlah"],
        );
    }
}

// Buat query untuk mengambil data dari tabel industri_jumlah
$sql_industri_jumlah = "SELECT industri, jumlah, ikahh, ilmea FROM industri_jumlah";

// Jalankan query
$result_industri_jumlah = mysqli_query($conn, $sql_industri_jumlah);

// Inisialisasi array untuk menyimpan data industri_jumlah
$data_industri_jumlah = array();

// Loop untuk memasukkan data dari database ke dalam array industri_jumlah
if (mysqli_num_rows($result_industri_jumlah) > 0) {
    while ($row = mysqli_fetch_assoc($result_industri_jumlah)) {
        $data_industri_jumlah[] = array(
            "industri" => $row["industri"],
            "jumlah" => (int)$row["jumlah"],
            "ikahh" => (int)$row["ikahh"],
            "ilmea" => (int)$row["ilmea"],
        );
    }
}

// Buat query untuk mengambil data dari tabel posyandu
$sql_posyandu = "SELECT kecamatan, puskesmas, pratama, madya, purnama, mandiri, jumlah, aktif, puskeskel FROM posyandu";

// Jalankan query
$result_posyandu = mysqli_query($conn, $sql_posyandu);

// Inisialisasi array untuk menyimpan data posyandu
$data_posyandu = array();

// Loop untuk memasukkan data dari database ke dalam array posyandu
if (mysqli_num_rows($result_posyandu) > 0) {
    while ($row = mysqli_fetch_assoc($result_posyandu)) {
        $data_posyandu[] = array(
            "kecamatan" => $row["kecamatan"],
            "puskesmas" => $row["puskesmas"],
            "pratama" => (int)$row["pratama"],
            "madya" => (int)$row["madya"],
            "purnama" => (int)$row["purnama"],
            "mandiri" => (int)$row["mandiri"],
            "jumlah" => (int)$row["jumlah"],
            "aktif" => (int)$row["aktif"],
            "puskeskel" => (int)$row["puskeskel"],
        );
    }
}

// Buat query untuk mengambil data dari tabel puskesmas
$sql_puskesmas = "SELECT sarana, 
                        SUM(CASE WHEN rawat_inap = 'Rawat Inap' THEN 1 ELSE 0 END) AS jumlah_rawat_inap,
                        SUM(CASE WHEN non_rawat_inap = 'Non Rawat Inap' THEN 1 ELSE 0 END) AS jumlah_non_rawat_inap
                 FROM puskesmas
                 GROUP BY sarana";

// Jalankan query
$result_puskesmas = mysqli_query($conn, $sql_puskesmas);

// Inisialisasi array untuk menyimpan data puskesmas
$data_puskesmas = array();

// Loop untuk memasukkan data dari database ke dalam array puskesmas
if (mysqli_num_rows($result_puskesmas) > 0) {
    while ($row = mysqli_fetch_assoc($result_puskesmas)) {
        $data_puskesmas[] = array(
            "sarana" => $row["sarana"],
            "jumlah_rawat_inap" => (int)$row["jumlah_rawat_inap"],
            "jumlah_non_rawat_inap" => (int)$row["jumlah_non_rawat_inap"],
        );
    }
}


// Buat query untuk mengambil data dari tabel rumah_sakit
$sql_rumah_sakit = "SELECT nama_rs, rs_umum, rs_kusus FROM rumah_sakit";

// Jalankan query
$result_rumah_sakit = mysqli_query($conn, $sql_rumah_sakit);

// Inisialisasi array untuk menyimpan data rumah_sakit
$data_rumah_sakit = array();

// Loop untuk memasukkan data dari database ke dalam array rumah_sakit
if (mysqli_num_rows($result_rumah_sakit) > 0) {
    while ($row = mysqli_fetch_assoc($result_rumah_sakit)) {
        $rs_umum_status = ($row["rs_umum"] === "Rawat Inap") ? "UMUM - Rawat Inap" : "UMUM - Non Rawat Inap";
        $rs_kusus_status = ($row["rs_kusus"] === "Rawat Inap") ? "KHUSUS - Rawat Inap" : "KHUSUS - Non Rawat Inap";

        $data_rumah_sakit[] = array(
            "nama_rs" => $row["nama_rs"],
            "rs_umum" => $rs_umum_status,
            "rs_kusus" => $rs_kusus_status,
        );
    }
}

// Buat query untuk mengambil data dari tabel rumah_sakit
$sql_rumah_sakit = "SELECT nama_rs, 
                           rs_umum,
                           rs_kusus
                    FROM rumah_sakit";

// Jalankan query
$result_rumah_sakit = mysqli_query($conn, $sql_rumah_sakit);

// Inisialisasi array untuk menyimpan data rumah_sakit
$data_umum = array();
$data_kusus = array();

// Loop untuk memasukkan data dari database ke dalam array rumah_sakit
if (mysqli_num_rows($result_rumah_sakit) > 0) {
    while ($row = mysqli_fetch_assoc($result_rumah_sakit)) {
        $nama_rs = $row["nama_rs"];
        if ($row["rs_umum"] === "Rawat Inap") {
            $data_umum[] = array(
                "nama_rs" => $nama_rs,
                "jumlah_rawat_inap" => 1,
                "jumlah_non_rawat_inap" => 0,
            );
        } else {
            $data_umum[] = array(
                "nama_rs" => $nama_rs,
                "jumlah_rawat_inap" => 0,
                "jumlah_non_rawat_inap" => 1,
            );
        }

        if ($row["rs_kusus"] === "Rawat Inap") {
            $data_kusus[] = array(
                "nama_rs" => $nama_rs,
                "jumlah_rawat_inap" => 1,
                "jumlah_non_rawat_inap" => 0,
            );
        } else {
            $data_kusus[] = array(
                "nama_rs" => $nama_rs,
                "jumlah_rawat_inap" => 0,
                "jumlah_non_rawat_inap" => 1,
            );
        }
    }
}

// Gabungkan data umum dan khusus, dengan umum diutamakan dalam urutan
$data_rumah_sakit = array_merge($data_umum, $data_kusus);

// Tutup koneksi
mysqli_close($conn);

// Convert data arrays to JSON format
$json_data_pendidikan = json_encode($data_pendidikan);
$json_data_golongan = json_encode($data_golongan);
$json_data_dinsos = json_encode($data_dinsos);
$json_data_dishub = json_encode($data_dishub);
$json_data_dispentani = json_encode($data_dispentani);
$json_data_dispan = json_encode($data_dispan);
$json_data_gol_umur = json_encode($data_gol_umur);
$json_data_umur = json_encode($data_umur);
$json_data_dishub_wajib_noumum = json_encode($data_dishub_wajib_noumum);
$json_data_dishub_wajib_umum = json_encode($data_dishub_wajib_umum);
$json_data_dispu_flyover_underpass = json_encode($data_dispu_flyover_underpass);
$json_data_ducapil_umur = json_encode($data_ducapil_umur);
$json_data_dukcapil_agama = json_encode($data_dukcapil_agama);
$json_data_dukcapil_jenis_kelamin = json_encode($data_dukcapil_jenis_kelamin);
$json_data_dukcapil_pendidikan = json_encode($data_dukcapil_pendidikan);
$json_data_industri_jumlah = json_encode($data_industri_jumlah);
$json_data_posyandu = json_encode($data_posyandu);
$json_data_puskesmas = json_encode($data_puskesmas);
$json_data_rumah_sakit = json_encode($data_rumah_sakit);

// Output the JSON data
header('Content-Type: application/json');
echo '{"pendidikan": ' . $json_data_pendidikan . ', "golongan": ' . $json_data_golongan . ', "dinsos": ' . $json_data_dinsos . ', "dishub": ' . $json_data_dishub . ', "dispentani": ' . $json_data_dispentani . ', "dispan": ' . $json_data_dispan . ', "gol_umur": ' . $json_data_gol_umur . ', "umur": ' . $json_data_umur . ' , "dishub_wajib_noumum": ' . $json_data_dishub_wajib_noumum . ', "dishub_wajib_umum": ' . $json_data_dishub_wajib_umum . ', "dispu_flyover_underpass": ' . $json_data_dispu_flyover_underpass . ', "ducapil_umur": ' . $json_data_ducapil_umur . ', "dukcapil_agama": ' . $json_data_dukcapil_agama . ', "dukcapil_jenis_kelamin": ' . $json_data_dukcapil_jenis_kelamin . ', "dukcapil_pendidikan": ' . $json_data_dukcapil_pendidikan . ', "industri_jumlah": ' . $json_data_industri_jumlah . ', "posyandu": ' . $json_data_posyandu . ', "puskesmas": ' . $json_data_puskesmas . ', "rumah_sakit": ' . $json_data_rumah_sakit . '}';
?>