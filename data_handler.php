<?php

include_once 'admin/database.php';


function fetchDataByCategory($selectedCategory, $selectedYear, $db_conn)
{

    $query = "";


    switch ($selectedCategory) {
        case 'bkd_pendidikan':
            $query = "SELECT pendidikan, pria, wanita, jumlah, id_tahun FROM bkd_pendidikan WHERE id_tahun = ?";
            break;
        case 'bkd_golongan_umur':
            $query = "SELECT golongan, umur1, umur2, umur3, umur4, umur5, umur6, umur7, umur8, umur9, umur10, jumlah FROM bkd_golongan_umur WHERE id_tahun = ?";
            break;
        case 'bkd_umur':
            $query = "SELECT umur, pria, wanita, jumlah FROM bkd_umur WHERE id_tahun = ?";
            break;
        case 'bkd_golongan_jenis_kelamin':
            $query = "SELECT golongan, pria, wanita, jumlah FROM bkd_golongan_jenis_kelamin WHERE id_tahun = ?";
            break;
        case 'dispan':
            $query = "SELECT komoditas, total, kebutuhan, stok_akhir FROM dispan WHERE id_tahun = ?";
            break;
        case 'dishub':
            $query = "SELECT bulan, truck_pick_up, bus, oplet FROM dishub WHERE id_tahun = ?";
            break;
        case 'dishub_wajib_umum':
            $query = "SELECT jenis, jumlah FROM dishub_wajib_umum WHERE id_tahun = ?";
            break;
        case 'dishub_wajib_noumum':
            $query = "SELECT jenis, jumlah FROM dishub_wajib_noumum WHERE id_tahun = ?";
            break;
        case 'dishub_wajib_biaya':
            $query = "SELECT bulan, jumlah, biaya FROM dishub_wajib_biaya WHERE id_tahun = ?";
            break;
        case 'dispentani':
            $query = "SELECT nama_tanaman, luas_tanaman, luas_rusak, luas_penanaman FROM dispentani WHERE id_tahun = ?";
            break;
        case 'dispu_flyover_underpass':
            $query = "SELECT nama_flyover, ukuran_flyover, kondisi_flyover, tahun_pembuatan FROM dispu_flyover_underpass WHERE id_tahun = ?";
            break;
        case 'dinsos':
            $query = "SELECT kecamatan, jumlah_individu, jumlah_keluarga FROM dinsos WHERE id_tahun = ?";
            break;
        case 'posyandu':
            $query = "SELECT kecamatan, pratama, madya, purnama, mandiri, jumlah FROM posyandu WHERE id_tahun = ?";
            break;
        case 'rumah_sakit':
            $query = "SELECT nama_rs, rs_umum, rs_kusus FROM rumah_sakit WHERE id_tahun = ?";
            break;
        case 'puskesmas':
            $query = "SELECT sarana, rawat_inap, non_rawat_inap FROM puskesmas WHERE id_tahun = ?";
            break;
        case 'tenaga_kerja':
            $query = "SELECT tenaga_kerja, jumlah FROM tenaga_kerja WHERE id_tahun = ?";
            break;
        case 'ducapil_umur':
            $query = "SELECT kecamatan, umur1, umur2, umur3, umur4, umur5, umur6, umur7, umur8 FROM ducapil_umur WHERE id_tahun = ?";
            break;
        case 'dukcapil_agama':
            $query = "SELECT kecamatan, islam, kristen, katolik, hindu, budha, konghucu, kepercayaan, jumlah FROM dukcapil_agama WHERE id_tahun = ?";
            break;
        case 'dukcapil_jenis_kelamin':
            $query = "SELECT kecamatan, pria, wanita, jumlah FROM dukcapil_jenis_kelamin WHERE id_tahun = ?";
            break;
        case 'dukcapil_pendidikan':
            $query = "SELECT kecamatan, tidak_sekolah, belum_sd, tamat_sd, sltp, slta, d1_2, d3, d4_s1, s2, s3, jumlah FROM dukcapil_pendidikan WHERE id_tahun = ?";
            break;
        case 'industri_jumlah':
            $query = "SELECT industri, jumlah, ikahh, ilmea FROM industri_jumlah WHERE id_tahun = ?";
            break;
        default:
            return array();
    }

    $stmt = $db_conn->prepare($query);
    $stmt->bind_param("i", $selectedYear);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);

    return $data;
}


if (isset($_POST['str_pd']) && isset($_POST['str_ub']) && isset($_POST['top_year'])) {
    $selectedOPD = $_POST['str_pd'];
    $selectedCategory = $_POST['str_ub'];
    $selectedYear = $_POST['top_year'];


    $db_conn = new mysqli($servername, $username, $password, $dbname);


    if ($db_conn->connect_error) {
        die("Koneksi gagal: " . $db_conn->connect_error);
    }


    switch ($selectedCategory) {
        case 'bkd_pendidikan':
            $data = fetchDataByCategory('bkd_pendidikan', $selectedYear, $db_conn);
            break;
        case 'bkd_golongan_umur':
            $data = fetchDataByCategory('bkd_golongan_umur', $selectedYear, $db_conn);
            break;
        case 'bkd_umur':
            $data = fetchDataByCategory('bkd_umur', $selectedYear, $db_conn);
            break;
        case 'bkd_golongan_jenis_kelamin':
            $data = fetchDataByCategory('bkd_golongan_jenis_kelamin', $selectedYear, $db_conn);
            break;
        case 'dispan':
            $data = fetchDataByCategory('dispan', $selectedYear, $db_conn);
            break;
        case 'dishub':
            $data = fetchDataByCategory('dishub', $selectedYear, $db_conn);
            break;
        case 'dishub_wajib_umum':
            $data = fetchDataByCategory('dishub_wajib_umum', $selectedYear, $db_conn);
            break;
        case 'dishub_wajib_noumum':
            $data = fetchDataByCategory('dishub_wajib_noumum', $selectedYear, $db_conn);
            break;
        case 'dishub_wajib_biaya':
            $data = fetchDataByCategory('dishub_wajib_biaya', $selectedYear, $db_conn);
            break;
        case 'dispentani':
            $data = fetchDataByCategory('dispentani', $selectedYear, $db_conn);
            break;
        case 'dispu_flyover_underpass':
            $data = fetchDataByCategory('dispu_flyover_underpass', $selectedYear, $db_conn);
            break;
        case 'dinsos':
            $data = fetchDataByCategory('dinsos', $selectedYear, $db_conn);
            break;
        case 'posyandu':
            $data = fetchDataByCategory('posyandu', $selectedYear, $db_conn);
            break;
        case 'rumah_sakit':
            $data = fetchDataByCategory('rumah_sakit', $selectedYear, $db_conn);
            break;
        case 'puskesmas':
            $data = fetchDataByCategory('puskesmas', $selectedYear, $db_conn);
            break;
        case 'tenaga_kerja':
            $data = fetchDataByCategory('tenaga_kerja', $selectedYear, $db_conn);
            break;
        case 'ducapil_umur':
            $data = fetchDataByCategory('ducapil_umur', $selectedYear, $db_conn);
            break;
        case 'dukcapil_agama':
            $data = fetchDataByCategory('dukcapil_agama', $selectedYear, $db_conn);
            break;
        case 'dukcapil_jenis_kelamin':
            $data = fetchDataByCategory('dukcapil_jenis_kelamin', $selectedYear, $db_conn);
            break;

        case 'dukcapil_pendidikan':
            $data = fetchDataByCategory('dukcapil_pendidikan', $selectedYear, $db_conn);
            break;
        case 'industri_jumlah':
            $data = fetchDataByCategory('industri_jumlah', $selectedYear, $db_conn);
            break;
        default:
            $data = array();
    }

    $db_conn->close();
}
?>


<?php if (isset($data) && !empty($data)) : ?>
    <?php if ($selectedCategory === 'bkd_pendidikan') : ?>

        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Jumlah ASN menurut tingkat pendidikan dan jenis kelamin</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Tingkat Pendidikan</th>
                                <th>Jumlah Pria</th>
                                <th>Jumlah Wanita</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['pendidikan']; ?></td>
                                    <td><?php echo $item['pria']; ?></td>
                                    <td><?php echo $item['wanita']; ?></td>
                                    <td><?php echo $item['jumlah']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    <?php endif; ?>

    <?php if ($selectedCategory === 'bkd_golongan_umur') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Jumlah ASN Menurut Golongan dan Kelompok Umur</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['golongan']; ?></td>
                                    <td><?php echo $item['umur1']; ?></td>
                                    <td><?php echo $item['umur2']; ?></td>
                                    <td><?php echo $item['umur3']; ?></td>
                                    <td><?php echo $item['umur4']; ?></td>
                                    <td><?php echo $item['umur5']; ?></td>
                                    <td><?php echo $item['umur6']; ?></td>
                                    <td><?php echo $item['umur7']; ?></td>
                                    <td><?php echo $item['umur8']; ?></td>
                                    <td><?php echo $item['umur9']; ?></td>
                                    <td><?php echo $item['umur10']; ?></td>
                                    <td><?php echo $item['jumlah']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'bkd_umur') : ?>
        <section>
            <div class="container ">
                <h2 class="h4 pt-4 pb-3">Jumlah ASN Menurut Kelompok Umur dan Jenis Kelamin</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Kelompok Umur</th>
                                <th>Jumlah Pria</th>
                                <th>Jumlah Wanita</th>
                                <th>Jumlah Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['umur']; ?></td>
                                    <td><?php echo $item['pria']; ?></td>
                                    <td><?php echo $item['wanita']; ?></td>
                                    <td><?php echo $item['jumlah']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'bkd_golongan_jenis_kelamin') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Jumlah ASN Menurut Kelompok Umur dan Jenis Kelamin</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Golongan</th>
                                <th>Jumlah Pria</th>
                                <th>Jumlah Wanita</th>
                                <th>Jumlah Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['golongan']; ?></td>
                                    <td><?php echo $item['pria']; ?></td>
                                    <td><?php echo $item['wanita']; ?></td>
                                    <td><?php echo $item['jumlah']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'dispan') : ?>
        <section>
            <div class="container ">
                <h2 class="h4 pt-4 pb-3">Ketersediaan Bahan Poko Menjelang Ramadhan</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Komoditas</th>
                                <th>Total Ketersediaan</th>
                                <th>Kebutuhan Ramadhan</th>
                                <th>Stok Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['komoditas']; ?></td>
                                    <td><?php echo $item['total']; ?></td>
                                    <td><?php echo $item['kebutuhan']; ?></td>
                                    <td><?php echo $item['stok_akhir']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'dishub') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Jumlah Kendaraan Menurut Jenis Kendaraan</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Bulan</th>
                                <th>Jumlah Truck Pick Up</th>
                                <th>Jumlah Bus</th>
                                <th>Jumlah Oplet</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['bulan']; ?></td>
                                    <td><?php echo $item['truck_pick_up']; ?></td>
                                    <td><?php echo $item['bus']; ?></td>
                                    <td><?php echo $item['oplet']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'dishub_wajib_umum') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Jumlah Kendaraan Bermotor Wajib Uji Menurut Jenis Kendaraan Umum</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Jenis</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['jenis']; ?></td>
                                    <td><?php echo $item['jumlah']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'dishub_wajib_noumum') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Jumlah Kendaraan Bermotor Wajib Uji Menurut Jenis Kendaraan Biasa</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Jenis</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['jenis']; ?></td>
                                    <td><?php echo $item['jumlah']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'dishub_wajib_biaya') : ?>
        <section>
            <div class="container mt-5">
                <h2 class="h4 pt-4 pb-3">Jumlah Kendaraan Bermotor Wajib Uji dan Biaya Uji</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Bulan</th>
                                <th>Jumlah</th>
                                <th>Biaya</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['bulan']; ?></td>
                                    <td><?php echo $item['jumlah']; ?></td>
                                    <td><?php echo $item['biaya']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'dispentani') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Tanaman Sayuran dan Buah-buahan Semusim</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama Tanaman</th>
                                <th>Luas Tanaman (Ha)</th>
                                <th>Luas Rusak/Puso (Ha)</th>
                                <th>Luas Penanaman (Ha)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['nama_tanaman']; ?></td>
                                    <td><?php echo $item['luas_tanaman']; ?></td>
                                    <td><?php echo $item['luas_rusak']; ?></td>
                                    <td><?php echo $item['luas_penanaman']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'dispu_flyover_underpass') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Jumlah Pembangunan Fly Over dan Under Pass</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama Flyover</th>
                                <th>Ukuran Flyover</th>
                                <th>Kondisi Flyover</th>
                                <th>Tahun Pembuatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['nama_flyover']; ?></td>
                                    <td><?php echo $item['ukuran_flyover']; ?></td>
                                    <td><?php echo $item['kondisi_flyover']; ?></td>
                                    <td><?php echo $item['tahun_pembuatan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'dinsos') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Jumlah Data Terpadu Kesejahteraan Sosial</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Kecamatan</th>
                                <th>Jumlah Individu</th>
                                <th>Jumlah Keluarga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['kecamatan']; ?></td>
                                    <td><?php echo $item['jumlah_individu']; ?></td>
                                    <td><?php echo $item['jumlah_keluarga']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'posyandu') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Data Posyandu Kota Bandar lampung</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Kecamatan</th>
                                <th>Pratama</th>
                                <th>Madya</th>
                                <th>Purnama</th>
                                <th>Mandiri</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['kecamatan']; ?></td>
                                    <td><?php echo $item['pratama']; ?></td>
                                    <td><?php echo $item['madya']; ?></td>
                                    <td><?php echo $item['purnama']; ?></td>
                                    <td><?php echo $item['mandiri']; ?></td>
                                    <td><?php echo $item['jumlah']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'rumah_sakit') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Rumah Sakit Kota Bandar Lampung</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama Rumah Sakit</th>
                                <th>Rumah Sakit Umum</th>
                                <th>Rumah Sakit Khusus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['nama_rs']; ?></td>
                                    <td><?php echo $item['rs_umum']; ?></td>
                                    <td><?php echo $item['rs_kusus']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'puskesmas') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Puskesmas Kota Bandar Lampung</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama Puskesmas</th>
                                <th>Rawat Inap</th>
                                <th>Non Rawat Inap</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['sarana']; ?></td>
                                    <td><?php echo $item['rawat_inap']; ?></td>
                                    <td><?php echo $item['non_rawat_inap']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'tenaga_kerja') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Data Tenaga Kerja Medis Kota Bandar Lampung</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Jenis Tenaga Kerja</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['tenaga_kerja']; ?></td>
                                    <td><?php echo $item['jumlah']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'ducapil_umur') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Data PenduduK Berdasarkan Umur</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Kecamatan</th>
                                <th>0-9</th>
                                <th>10-19</th>
                                <th>20-29</th>
                                <th>30-39</th>
                                <th>40-49</th>
                                <th>50-59</th>
                                <th>60-69</th>
                                <th>>70</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['kecamatan']; ?></td>
                                    <td><?php echo $item['umur1']; ?></td>
                                    <td><?php echo $item['umur2']; ?></td>
                                    <td><?php echo $item['umur3']; ?></td>
                                    <td><?php echo $item['umur4']; ?></td>
                                    <td><?php echo $item['umur5']; ?></td>
                                    <td><?php echo $item['umur6']; ?></td>
                                    <td><?php echo $item['umur7']; ?></td>
                                    <td><?php echo $item['umur8']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'dukcapil_agama') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Data Penduduk Berdasarkan Agama</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Kecamatan</th>
                                <th>Islam</th>
                                <th>Kristen</th>
                                <th>Katolik</th>
                                <th>Hindu</th>
                                <th>Budha</th>
                                <th>Konghucu</th>
                                <th>Kepercayaan</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['kecamatan']; ?></td>
                                    <td><?php echo $item['islam']; ?></td>
                                    <td><?php echo $item['kristen']; ?></td>
                                    <td><?php echo $item['katolik']; ?></td>
                                    <td><?php echo $item['hindu']; ?></td>
                                    <td><?php echo $item['budha']; ?></td>
                                    <td><?php echo $item['konghucu']; ?></td>
                                    <td><?php echo $item['kepercayaan']; ?></td>
                                    <td><?php echo $item['jumlah']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'dukcapil_jenis_kelamin') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Data Penduduk Berdasarkan Jenis Kelamin</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Kecamatan</th>
                                <th>Jumlah Pria</th>
                                <th>Jumlah Wanita</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['kecamatan']; ?></td>
                                    <td><?php echo $item['pria']; ?></td>
                                    <td><?php echo $item['wanita']; ?></td>
                                    <td><?php echo $item['jumlah']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'dukcapil_pendidikan') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Data Penduduk Berdasarkan Pendidikan</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['kecamatan']; ?></td>
                                    <td><?php echo $item['tidak_sekolah']; ?></td>
                                    <td><?php echo $item['belum_sd']; ?></td>
                                    <td><?php echo $item['tamat_sd']; ?></td>
                                    <td><?php echo $item['sltp']; ?></td>
                                    <td><?php echo $item['slta']; ?></td>
                                    <td><?php echo $item['d1_2']; ?></td>
                                    <td><?php echo $item['d3']; ?></td>
                                    <td><?php echo $item['d4_s1']; ?></td>
                                    <td><?php echo $item['s2']; ?></td>
                                    <td><?php echo $item['s3']; ?></td>
                                    <td><?php echo $item['jumlah']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($selectedCategory === 'industri_jumlah') : ?>
        <section>
            <div class="container">
                <h2 class="h4 pt-4 pb-3">Jumlah Usaha Industri di Kota Bandar Lampung</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Industri</th>
                                <th>Jumlah</th>
                                <th>IKAHH</th>
                                <th>ILMEA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number = 1; ?>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $item['industri']; ?></td>
                                    <td><?php echo $item['jumlah']; ?></td>
                                    <td><?php echo $item['ikahh']; ?></td>
                                    <td><?php echo $item['ilmea']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <?php endif; ?>



<?php endif; ?>