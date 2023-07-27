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
											<a href="table-dukcapil.php">Data Dinas Dukcapil</a>
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
                                   $kecamatan = $_POST['kecamatan'];
                                   $umur1 = $_POST['umur1'];
                                   $umur2 = $_POST['umur2'];
                                   $umur3 = $_POST['umur3'];
                                   $umur4 = $_POST['umur4'];
                                   $umur5 = $_POST['umur5'];
                                   $umur6 = $_POST['umur6'];
                                   $umur7 = $_POST['umur7'];
                                   $umur8 = $_POST['umur8'];

                                   // Query untuk memperbarui data
                                   $query = "UPDATE ducapil_umur SET kecamatan = '$kecamatan', umur1 = $umur1, umur2 = $umur2, umur3 = $umur3, umur4 = $umur4, umur5 = $umur5, umur6 = $umur6, umur7 = $umur7, umur8 = $umur8 WHERE id_kecamatan = '$id'";
                                   $result = $connection->query($query);

                                   if ($result === TRUE) {
                                        echo "<script>
                                             window.location.href='table-dukcapil.php';
                                        </script>";
                                   } else {
                                        echo "Terjadi kesalahan saat memperbarui data: " . $connection->error;
                                   }
                              }

                              // Query untuk mendapatkan data berdasarkan id_kecamatan sebelum diperbarui
                              $query = "SELECT * FROM ducapil_umur WHERE id_kecamatan = '$id'";
                              $result = $connection->query($query);

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
                                        <label class="col-sm-12 col-md-2 col-form-label">0-9</label>
                                        <div class="col-sm-12 col-md-10">
                                             <input type="number" name="umur1" value="<?php echo $row['umur1']; ?>" class="form-control" step="any">
                                        </div>
                                   </div>
                                   <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">10-19</label>
                                        <div class="col-sm-12 col-md-10">
                                             <input type="number" name="umur2" value="<?php echo $row['umur2']; ?>" class="form-control" step="any">
                                        </div>
                                   </div>
                                   <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">20-29</label>
                                        <div class="col-sm-12 col-md-10">
                                             <input type="number" name="umur3" value="<?php echo $row['umur3']; ?>" class="form-control" step="any">
                                        </div>
                                   </div>
                                   <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">30-39</label>
                                        <div class="col-sm-12 col-md-10">
                                             <input type="number" name="umur4" value="<?php echo $row['umur4']; ?>" class="form-control" step="any">
                                        </div>
                                   </div>
                                   <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">40-49</label>
                                        <div class="col-sm-12 col-md-10">
                                             <input type="number" name="umur5" value="<?php echo $row['umur5']; ?>" class="form-control" step="any">
                                        </div>
                                   </div>
                                   <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">50-59</label>
                                        <div class="col-sm-12 col-md-10">
                                             <input type="number" name="umur6" value="<?php echo $row['umur6']; ?>" class="form-control" step="any">
                                        </div>
                                   </div>
                                   <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">60-69</label>
                                        <div class="col-sm-12 col-md-10">
                                             <input type="number" name="umur7" value="<?php echo $row['umur7']; ?>" class="form-control" step="any">
                                        </div>
                                   </div>
                                   <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">>70</label>
                                        <div class="col-sm-12 col-md-10">
                                             <input type="number" name="umur8" value="<?php echo $row['umur8']; ?>" class="form-control" step="any">
                                        </div>
                                   </div>
                                   <div class="modal-footer">
                                        <button onclick="window.location.href='table-dukcapil.php'" type="button" class="btn btn-secondary">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                   </div>
                                   </form>

                              <?php
                              } else {
                                   echo "<script>
                                        window.location.href='table-dukcapil.php';
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
