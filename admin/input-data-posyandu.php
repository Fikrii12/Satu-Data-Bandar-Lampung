<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Impor Data</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/logo_bdl.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/logo_bdl.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	

	<?php require_once("../layouts/sidebar.layout.php") ?>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Form</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="table-kesehatan.php">Data Dinas Kesehatan</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Impor Data
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										
									>
										
									</a>
									
								</div>
							</div>
						</div>
					</div>
					<!-- Default Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Impor Data </h4>
							</div>
							
						</div>
                           
                              <?php
if (isset($_POST["submit"])) {
    // Pastikan file CSV diunggah tanpa error
    if ($_FILES["csvFile"]["error"] > 0) {
        die("Error: " . $_FILES["csvFile"]["error"]);
    }

    // Periksa tipe file apakah CSV
    $fileType = strtolower(pathinfo($_FILES["csvFile"]["name"], PATHINFO_EXTENSION));
    if ($fileType !== "csv") {
        die("Error: Hanya file CSV yang diperbolehkan.");
    }

    // Lokasi file sementara setelah diunggah
    $tempFile = $_FILES["csvFile"]["tmp_name"];

    // Baca isi file CSV dan proses datanya
    $handle = fopen($tempFile, "r");
    if ($handle) {
        // Koneksi ke database (sesuaikan dengan informasi koneksi Anda)
        require_once 'database.php';

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Koneksi database gagal: " . $conn->connect_error);
        }

        $first = true;
        $tahun = $conn->real_escape_string($_POST["tahun"]);
        $opd = "Dinas Kesehatan";
        while (($data = fgetcsv($handle, 1000, ";")) !== false) {

            if ($first) {
                $data[0] = preg_replace('/^\xEF\xBB\xBF/', '', $data[0]);
                $first = false;
            }

            if (count($data) === 9) {
               $id_posyandu = uniqid();
               $kecamatan = $conn->real_escape_string($data[0]);
               $puskesmas = $conn->real_escape_string($data[1]);
               $pratama = (int) $data[2]; // Convert to integer
               $madya = (int) $data[3];   // Convert to integer
               $purnama = (int) $data[4]; // Convert to integer
               $mandiri = (int) $data[5]; // Convert to integer
               $jumlah = $pratama + $madya + $purnama + $mandiri;
               $aktif = (int) $data[6];   // Convert to integer
               $puskeskel = (int) $data[7]; // Convert to integer

                // Query untuk menyimpan data ke dalam tabel
			 $stmt = $conn->prepare("INSERT INTO posyandu (id_posyandu, kecamatan, puskesmas, pratama, madya, purnama, mandiri, jumlah, aktif, puskeskel, id_opd, id_tahun) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
			 $stmt->bind_param("ssssssssssss", $id_posyandu, $kecamatan, $puskesmas, $pratama, $madya, $purnama, $mandiri, $jumlah, $aktif, $puskeskel, $id_opd, $tahun);
			 $result = $stmt->execute();
            }
        }

        fclose($handle);
        $conn->close();
    } else {
        die("Error: Tidak dapat membuka file CSV.");
    }

    echo "<script>
        window.location.href='table-kesehatan.php';
    </script>";
}
?>




                              <!-- Form untuk menambahkan data -->
                              <form method="POST" enctype="multipart/form-data">
                                   <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">Data Tahun</label>
                                        <div class="col-sm-12 col-md-10">
                                             <input type="number" name="tahun" class="form-control">
                                        </div>
                                   </div>
                                   <div class="form-group">
                                        <label>File data "nama file.csv"</label>
                                        <input type="file" name="csvFile" id="csvFile" accept=".csv" 
                                             class="form-control-file form-control height-auto"
                                        />
                                   </div>
                                   <div class="modal-footer">
								<button onclick="window.location.href='table-kesehatan.php'" type="button" class="btn btn-secondary">Close</button>
                                        <button type="submit" name="submit" value="Import Data" class="btn btn-primary">Impor Data</button>
                                   </div>
                              </form>

						
				</div>
				
				<div class="footer-wrap pd-20 mb-20 card-box mt-5">
					Copyright © 2023 SATU DATA KOTA BANDAR LAMPUNG. All Rights Reserved
				</div>
			</div>
		</div>
		<!-- welcome modal start -->
		
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
