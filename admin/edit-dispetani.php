<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Edit Data</title>

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
											<a href="table-pertanian.php">Data Dinas Pertanian</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Edit Data
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
								<h4 class="text-blue h4">Edit Data </h4>
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

						// Cek apakah parameter id telah diterima
						if (isset($_GET['id'])) {
						$id = $_GET['id'];

						// Cek apakah data telah di-submit melalui form
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$id = $_POST['id'];
							$nama = $_POST['nama'];
							$luas_tanaman = $_POST['luas_tanaman'];
							$luas_rusak = $_POST['luas_rusak'];
							$luas_penanaman = $_POST['luas_penanaman'];

							// Query untuk memperbarui data
							$query = "UPDATE dispentani SET nama_tanaman = '$nama', luas_tanaman = '$luas_tanaman', luas_rusak = '$luas_rusak', luas_penanaman = '$luas_penanaman' WHERE id_tanaman = '$id'";
							$result = $connection->query($query);

							if ($result === TRUE) {
								echo "<script>
									window.location.href='table-pertanian.php';
								</script>";
							} else {
								echo "Terjadi kesalahan saat memperbarui data: " . $connection->error;
							}
						}

						// Query untuk mendapatkan data berdasarkan tingkat pendidikan sebelum diperbarui
						$query = "SELECT * FROM dispentani WHERE id_tanaman = '$id'";
						$result = $connection->query($query);

						// Cek apakah data ditemukan
						if ($result->num_rows > 0) {
							$row = $result->fetch_assoc();
						?>
							<form method="POST" action="">
								<input type="hidden" name="id" value="<?php echo $id; ?>">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Nama Tanaman</label>
									<div class="col-sm-12 col-md-10">
										<input type="text" name="nama" value="<?php echo $row['nama_tanaman']; ?>" class="form-control">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Luas Tanaman (Ha)</label>
									<div class="col-sm-12 col-md-10">
										<input type="number" name="luas_tanaman" value="<?php echo $row['luas_tanaman']; ?>" class="form-control" step="any">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Luas Rusak (Ha)</label>
									<div class="col-sm-12 col-md-10">
										<input type="number" name="luas_rusak" value="<?php echo $row['luas_rusak']; ?>" class="form-control" step="any">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Luas Penanaman (Ha)</label>
									<div class="col-sm-12 col-md-10">
										<input type="number" name="luas_penanaman" value="<?php echo $row['luas_penanaman']; ?>" class="form-control" step="any">
									</div>
								</div>
								<div class="modal-footer">
									<button onclick="window.location.href='table-pertanian.php'" type="button" class="btn btn-secondary">Close</button>
									<button type="submit" class="btn btn-primary" >Save changes</button>
								</div>
							</form>
						<?php
						} else {
							echo "<script>
								window.location.href='table-pertanian.php';
							</script>";
						}
						} else {
						echo "Tingkat pendidikan tidak ditemukan.";
						}

						// Menutup koneksi
						$connection->close();
						?>


						
						
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
