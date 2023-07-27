<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Tambah Data</title>

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
											<a href="table-bkd.php">Data BKD</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Tambah Data
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<!-- Default Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Tambah Data </h4>
							</div>
							
						</div>



						<?php
                              // Konfigurasi koneksi database
						require_once 'database.php';
                              // Membuat koneksi ke database
                              $connection = new mysqli($servername, $username, $password, $dbname);

                              // Memeriksa koneksi
                              if ($connection->connect_error) {
                              die("Koneksi database gagal: " . $connection->connect_error);
                              }

                              // Cek apakah data telah di-submit melalui form tambah data
                              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                              $id_golongan = uniqid();
                              $golongan = $_POST['golongan'];
                              $tahun = $_POST['tahun'];
						$opd = "BKD";
                              $umur1= $_POST['62'];
                              $umur2 = $_POST['20-25'];
                              $umur3 = $_POST['26-30'];
                              $umur4 = $_POST['31-35'];
                              $umur5 = $_POST['36-40'];
                              $umur6 = $_POST['41-45'];
                              $umur7 = $_POST['46-50'];
                              $umur8 = $_POST['51-55'];
                              $umur9 = $_POST['56-58'];
                              $umur10 = $_POST['58-60'];
                              $jumlah = $umur1+$umur2+$umur3+$umur4+$umur5+$umur6+$umur7+$umur8+$umur9+$umur10;

                              // Prepared statement untuk menambahkan data
                              $stmt = $connection->prepare("INSERT INTO bkd_golongan_umur (id_golongan, golongan, umur1, umur2, umur3, umur4, umur5, umur6, umur7, umur8, umur9, umur10, jumlah, id_opd, id_tahun) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                              $stmt->bind_param("sssssssssssssss", $id_golongan, $golongan, $umur1, $umur2, $umur3, $umur4, $umur5, $umur6, $umur7, $umur8, $umur9, $umur10, $jumlah, $opd, $tahun);
                              $result = $stmt->execute();


                              if ($result === TRUE) {
                                   echo "<script>
									window.location.href='table-bkd.php';
								</script>";
                              } else {
                                   echo "Terjadi kesalahan saat menambahkan data: " . $connection->error;
                              }
                              }

                              // Menutup koneksi
                              $connection->close();
                              ?>

                              <!-- Form untuk menambahkan data -->
                              <form method="POST" action="">
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Data Tahun</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="tahun" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Golongan</label>
								<div class="col-sm-12 col-md-10">
									<input type="text" name="golongan" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Umur 62</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="62" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Umur 20-25</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="20-25" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Umur 26-30</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="26-30" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Umur 31-35</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="31-35" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Umur 36-40</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="36-40" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Umur 41-45</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="41-45" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Umur 46-50</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="46-50" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Umur 51-55</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="51-55" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Umur 56-58</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="56-58" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Umur 58-60</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="58-60" class="form-control">
								</div>
							</div>
							<div class="modal-footer">
								<button onclick="window.location.href='table-bkd.php'" type="button" class="btn btn-secondary">Close</button>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
                              </form>
					</div>
					
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
