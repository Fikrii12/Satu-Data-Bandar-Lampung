<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>Edit Data</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/logo_bdl.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/logo_bdl.png" />
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
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
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				"gtm.start": new Date().getTime(),
				event: "gtm.js"
			});
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
									Edit Data
								</li>
							</ol>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a>

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
						$kecamatan = $_POST['kecamatan'];
						$puskesmas = $_POST['puskesmas'];
						$pratama = $_POST['pratama'];
						$madya = $_POST['madya'];
						$purnama = $_POST['purnama'];
						$mandiri = $_POST['mandiri'];
						$jumlah = $pratama + $madya + $purnama + $mandiri;
						$aktif = $_POST['aktif'];
						$puskeskel = $_POST['puskeskel'];

						// Query untuk memperbarui data
						$query = "UPDATE posyandu SET kecamatan = ?, puskesmas = ?, pratama = ?, madya = ?, purnama = ?, mandiri = ?, jumlah = ?, aktif = ?, puskeskel = ? WHERE id_posyandu = ?";
						$stmt = $connection->prepare($query);
						$stmt->bind_param("ssssssssss", $kecamatan, $puskesmas, $pratama, $madya, $purnama, $mandiri, $jumlah, $aktif, $puskeskel, $id);
						$result = $stmt->execute();

						if ($result === TRUE) {
							echo "<script>
                                                  window.location.href='table-kesehatan.php';
                                             </script>";
						} else {
							echo "Terjadi kesalahan saat memperbarui data: " . $connection->error;
						}
					}

					// Query untuk mendapatkan data berdasarkan id sebelum diperbarui
					$query = "SELECT * FROM posyandu WHERE id_posyandu = ?";
					$stmt = $connection->prepare($query);
					$stmt->bind_param("s", $id);
					$stmt->execute();
					$result = $stmt->get_result();

					// Cek apakah data ditemukan
					if ($result->num_rows > 0) {
						$row = $result->fetch_assoc();
				?>
						<form method="POST" action="">
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Kecamatan</label>
								<div class="col-sm-12 col-md-10">
									<input type="text" name="kecamatan" value="<?php echo $row['kecamatan']; ?>" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Puskesmas</label>
								<div class="col-sm-12 col-md-10">
									<input type="text" name="puskesmas" value="<?php echo $row['puskesmas']; ?>" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Pratama</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="pratama" value="<?php echo $row['pratama']; ?>" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Madya</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="madya" value="<?php echo $row['madya']; ?>" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Purnama</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="purnama" value="<?php echo $row['purnama']; ?>" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Mandiri</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="mandiri" value="<?php echo $row['mandiri']; ?>" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Aktif</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="aktif" value="<?php echo $row['aktif']; ?>" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Puskeskel</label>
								<div class="col-sm-12 col-md-10">
									<input type="number" name="puskeskel" value="<?php echo $row['puskeskel']; ?>" class="form-control">
								</div>
							</div>
							<div class="modal-footer">
								<button onclick="window.location.href='table-kesehatan.php'" type="button" class="btn btn-secondary">Close</button>
								<button type="submit" class="btn btn-primary">Save changes</button>
							</div>
						</form>
				<?php
					} else {
						echo "<script>
                                             window.location.href='table-posyandu.php';
                                        </script>";
					}
				} else {
					echo "Data tidak ditemukan.";
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
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>