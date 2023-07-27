	<!DOCTYPE html>
	<html>

	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Data BKD</title>

		<!-- Site favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="../vendors/images/apple-touch-icon.png" />
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

	<body>

	<?php require_once("../layouts/sidebar.layout.php") ?>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>BKD</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											BKD
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="row justify-content-end">
									<label for="selected-year" class="mt-2">Pilih Tahun:</label>
									<input type="number" class="form-control ml-2" id="selected-year" min="2022" max="2024" style="width: 80px;" />
									<button class="btn btn-primary ml-2" onclick="getDataByYear()">Tampilkan</button>
								</div>
							</div>
						</div>
					</div>

					<div class="card-box pb-10">
						<div class="d-flex  align-items-center">
							<h2 class="h4 pd-20">Jumlah ASN menurut tingkat pendidikan dan jenis kelamin</h2>
							<div class="justify-content-between float-right">
								<a href="input-data-bkd-pendidikan.php" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Impor Data</a>
								<a href="tambah-bkd-pendidikan.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
								<a href="hapus-tahun-bkdpendidikan.php" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Data</a>
							</div>

						</div>

						<?php include 'database.php'; ?>
						<?php
						if ($bkd_pendidikan->num_rows > 0) {
							echo "<table class='data-table table nowrap' id='data-table-pendidikan'>
										<thead>
											<tr>
											<th>Tingkat Pendidikan</th>
											<th>Jumlah Pria</th>
											<th>Jumlah Wanita</th>
											<th>Jumlah Total</th>
											<th>Tindakan</th>
											</tr>
										</thead>
										<tbody>";

							while ($row = $bkd_pendidikan->fetch_assoc()) {
								echo "<tr>
										<td>" . $row["pendidikan"] . "</td>
										<td>" . $row["pria"] . "</td>
										<td>" . $row["wanita"] . "</td>
										<td>" . $row["jumlah"] . "</td>
										<td>
											<div class='table-actions'>
											<a href='edit-pendidikan.php?id=" . $row["id_pendidikan"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
											<a href='hapus-baris-bkdpendidikan.php?id=" . $row["id_pendidikan"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
											</div>
										</td>
									</tr>";
							}
							echo "</tbody></table>";
						} else {
							echo "Tidak ada data yang ditemukan.";
						}
						?>
					</div>

					<div class="card-box pb-10 mt-5">
						<div class="d-flex  align-items-center">
							<h2 class="h4 pd-20">Jumlah ASN Menurut Kelompok Umur dan Jenis Kelamin</h2>
							<div class="justify-content-between float-right">
								<a href="input-data-bkd-umur.php" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Impor Data</a>
								<a href="tambah-bkd-umur.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
								<a href="hapus-tahun-bkdUmur.php" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Data</a>
							</div>
							</button>

						</div>

						<?php include 'database.php'; ?>
						<?php
						if ($bkd_umur->num_rows > 0) {
							echo "<table class='data-table table nowrap' id='data-table-umur'>
										<thead>
											<tr>
												<th>Kelompok Umur</th>
												<th>Jumlah Pria</th>
												<th>Jumlah Wanita</th>
												<th>Jumlah Total</th>
												<th>Tindakan</th>
											</tr>
										</thead>
										<tbody>";
							while ($row = $bkd_umur->fetch_assoc()) {
								echo "<tr>
										<td>" . $row["umur"] . "</td>
										<td>" . $row["pria"] . "</td>
										<td>" . $row["wanita"] . "</td>
										<td>" . $row["jumlah"] . "</td>
										<td>
											<div class='table-actions'>
											<a href='edit-bkdUmur.php?id=" . $row["id_umur"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
											<a href='hapus-baris-bkdUmur.php?id=" . $row["id_umur"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
											</div>
										</td>
									</tr>";
							}
							echo "</tbody></table>";
						} else {
							echo "Tidak ada data yang ditemukan.";
						}
						?>
					</div>

					<div class="card-box pb-10 mt-5">
						<div class="d-flex  align-items-center">
							<h2 class="h4 pd-20">Jumlah ASN Menurut Golongan dan Kelompok Umur</h2>
							<div class="justify-content-between float-right">
								<a href="input-data-golongan-umur.php" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Impor Data</a>
								<a href="tambah-bkd-golongan-umur.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
								<a href="hapus-tahun-golongan-umur.php" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Data</a>
							</div>
							</button>

						</div>

						<?php include 'database.php'; ?>
						<?php
						if ($bkd_golongan_umur->num_rows > 0) {
							echo "<table class='data-table table nowrap' id='data-table-golongan-umur'>
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
						?>
					</div>

					<div class="card-box pb-10 mt-5">
						<div class="d-flex  align-items-center">
							<h2 class="h4 pd-20">Jumlah ASN Menurut Golongan dan Jenis Kelamin</h2>
							<div class="justify-content-between float-right">
								<a href="input-data-golongan-jenis-kelamin.php" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Impor Data</a>
								<a href="tambah-golongan-jenis-kelamin.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
								<a href="hapus-tahun-golongan-jenis-kelamin.php" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Data</a>
							</div>

						</div>

						<?php include 'database.php'; ?>
						<?php
						if ($bkd_golongan_jenis_kelamin->num_rows > 0) {
							echo "<table class='data-table table nowrap' id='data-table-golongan-jenis-kelamin'>
										<thead>
											<tr>
											<th>Golongan</th>
											<th>Jumlah Pria</th>
											<th>Jumlah Wanita</th>
											<th>Jumlah Total</th>
											<th>Tindakan</th>
											</tr>
										</thead>
										<tbody>";

							while ($row = $bkd_golongan_jenis_kelamin->fetch_assoc()) {
								echo "<tr>
										<td>" . $row["golongan"] . "</td>
										<td>" . $row["pria"] . "</td>
										<td>" . $row["wanita"] . "</td>
										<td>" . $row["jumlah"] . "</td>
										<td>
											<div class='table-actions'>
											<a href='edit-golongan-jenis-kelamin.php?id=" . $row["id_golongan_jenis_kelamin"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
											<a href='hapus-baris-golongan-jenis-kelamin.php?id=" . $row["id_golongan_jenis_kelamin"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
											</div>
										</td>
									</tr>";
							}
							echo "</tbody></table>";
						} else {
							echo "Tidak ada data yang ditemukan.";
						}
						?>
					</div>



					<script>
						function getDataByYear() {
							var selectedYear = document.getElementById('selected-year').value;
							var xhttpPendidikan = new XMLHttpRequest();
							var xhttpUmur = new XMLHttpRequest();
							var xhttpGolonganUmur = new XMLHttpRequest();
							var xhttpGolonganJenisKelamin = new XMLHttpRequest();

							xhttpPendidikan.onreadystatechange = function() {
								if (this.readyState == 4 && this.status == 200) {
									document.getElementById('data-table-pendidikan').innerHTML = this.responseText;
								}
							};

							xhttpGolonganUmur.onreadystatechange = function() {
								if (this.readyState == 4 && this.status == 200) {
									document.getElementById('data-table-golongan-umur').innerHTML = this.responseText;
								}
							};
							xhttpUmur.onreadystatechange = function() {
								if (this.readyState == 4 && this.status == 200) {
									document.getElementById('data-table-umur').innerHTML = this.responseText;
								}
							};

							xhttpGolonganJenisKelamin.onreadystatechange = function() {
								if (this.readyState == 4 && this.status == 200) {
									document.getElementById('data-table-golongan-jenis-kelamin').innerHTML = this.responseText;
								}
							};

							xhttpPendidikan.open("GET", "tahun_bkdPendidikan.php?year=" + selectedYear, true);
							xhttpPendidikan.send();

							xhttpGolonganUmur.open("GET", "tahun-golongan-umur.php?year=" + selectedYear, true);
							xhttpGolonganUmur.send();

							xhttpUmur.open("GET", "tahun_bkdUmur.php?year=" + selectedYear, true);
							xhttpUmur.send();

							xhttpGolonganJenisKelamin.open("GET", "tahun_golongan_jenis_kelamin.php?year=" + selectedYear, true);
							xhttpGolonganJenisKelamin.send();


							localStorage.setItem('selectedYear', selectedYear);
						}


						var lastSelectedYear = localStorage.getItem('selectedYear');
						var selectedYearInput = document.getElementById('selected-year');

						if (lastSelectedYear) {
							selectedYearInput.value = lastSelectedYear;
							getDataByYear();
						} else {
							selectedYearInput.value = new Date().getFullYear();
						}
					</script>



					<div class="footer-wrap pd-20 mb-20 card-box mt-5">
						Copyright © 2023 SATU DATA KOTA BANDAR LAMPUNG. All Rights Reserved
					</div>
				</div>
			</div>

			<!-- js -->
			<script src="vendors/scripts/core.js"></script>
			<script src="vendors/scripts/script.min.js"></script>
			<script src="vendors/scripts/process.js"></script>
			<script src="vendors/scripts/layout-settings.js"></script>
			<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->
	</body>

	</html>