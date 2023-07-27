<!DOCTYPE html>
	<html>
		<head>
			<!-- Basic Page Info -->
			<meta charset="utf-8" />
			<title>Data Dinas Perhubungan</title>

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
		<body>
			<!-- x` -->

			<?php require_once("../layouts/sidebar.layout.php") ?>

			<div class="main-container">
				<div class="pd-ltr-20 xs-pd-20-10">
					<div class="min-height-200px">
						<div class="page-header">
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="title">
										<h4>Dinas Dinas Kesahatan</h4>
									</div>
									<nav aria-label="breadcrumb" role="navigation">
										<ol class="breadcrumb">
											<li class="breadcrumb-item">
												<a href="index.php">Home</a>
											</li>
											<li class="breadcrumb-item active" aria-current="page">
												Dinas Kesehatan
											</li>
										</ol>
									</nav>
								</div>
								<div class="col-md-6 col-sm-12 text-right">
									<div class="row justify-content-end">
										<label for="selected-year" class="mt-2">Pilih Tahun:</label>
										<input type="number" class="form-control ml-2" id="selected-year" min="2022" style="width: 80px;" />
										<button class="btn btn-primary ml-2" onclick="getDataByYear()">Tampilkan</button>
									</div>
								</div>
							</div>
						</div>
																				 						
						<div class="card-box pb-10 mt-5">
							<div class="d-flex align-items-center">
								<h2 class="h4 pd-20">Puskesmas Kota Bandar Lampung</h2>
								<div class="justify-content-between float-right">
									<a href="input-data-puskesmas.php" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Impor Data</a>
									<a href="tambah-data-puskesmas.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
									<a href="hapus-data-puskesmas.php" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Data</a>
								</div>
							</div>

							<?php include 'database.php'; ?>
							<?php
						
							if ($puskesmas->num_rows > 0) {
								echo "<table class='data-table table nowrap' id='data-table-puskesmas'>
										<thead>
											<tr>
											<th>Sarana</th>
											<th>Rawat Inap</th>
											<th>Non Rawat Inap</th>
											<th>Tindakan</th>
											</tr>
										</thead>
										<tbody>";
								while ($row = $puskesmas->fetch_assoc()) {
									echo "<tr>
										<td>" . $row["sarana"] . "</td>
										<td>" . $row["rawat_inap"] . "</td>
										<td>" . $row["non_rawat_inap"] . "</td>
										<td>
											<div class='table-actions'>
											<a href='edit-data-puskesmas.php?id=" . $row["id_sarana"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
											<a href='hapus-baris-data-puskesmas.php?id=" . $row["id_sarana"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
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
						<div class="d-flex align-items-center">
							<h2 class="h4 pd-20">Rumah Sakit Kota Bandar Lampung</h2>
							<div class="justify-content-between float-right">
								<a href="input-data-rumah-sakit.php" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Impor Data</a>
								<a href="tambah-data-rumah-sakit.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
								<a href="hapus-data-rumah-sakit.php" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Data</a>
							</div>
						</div>

						<?php include 'database.php'; ?>
						<?php
						if ($rumah_sakit->num_rows > 0) {
							echo "<table class='data-table table nowrap' id='data-table-rumah-sakit'>
									<thead>
										<tr>
										<th>Nama Rumah Sakit</th>
										<th>Rumah Sakit Umum</th>
										<th>Rumah Sakit Khusus</th>
										<th>Tindakan</th>
										</tr>
									</thead>
									<tbody>";
							while ($row = $rumah_sakit->fetch_assoc()) {
								echo "<tr>
									<td>" . $row["nama_rs"] . "</td>
									<td>" . $row["rs_umum"] . "</td>
									<td>" . $row["rs_kusus"] . "</td>
									<td>
										<div class='table-actions'>
										<a href='edit-data-rumah-sakit.php?id=" . $row["id_rs"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
										<a href='hapus-baris-data-rumah-sakit.php?id=" . $row["id_rs"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
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
							<div class="d-flex align-items-center">
								<h2 class="h4 pd-20">Data Tenaga Kerja Medis Kota Bandar Lampung</h2>
								<div class="justify-content-between float-right">
									<a href="input-data-tenaga-kerja.php" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Impor Data</a>
									<a href="tambah-data-tenaga-kerja.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
									<a href="hapus-data-tenaga-kerja.php" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Data</a>
								</div>
							</div>

							<?php include 'database.php'; ?>
							<?php
							if ($tenaga_kerja->num_rows > 0) {
								echo "<table class='data-table table nowrap' id='data-table-tenaga-kerja'>
										<thead>
											<tr>
											<th>Tenaga Kerja</th>
											<th>Jumlah</th>
											<th>Tindakan</th>
											</tr>
										</thead>
										<tbody>";
								while ($row = $tenaga_kerja->fetch_assoc()) {
									echo "<tr>
										<td>" . $row["tenaga_kerja"] . "</td>
										<td>" . $row["jumlah"] . "</td>
										<td>
											<div class='table-actions'>
											<a href='edit-data-tenaga-kerja.php?id=" . $row["id_tenaga"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
											<a href='hapus-baris-data-tenaga-kerja.php?id=" . $row["id_tenaga"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
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
							<div class="d-flex align-items-center">
								<h2 class="h4 pd-20">Data Posyandu Kota Bandar lampung</h2>
								<div class="justify-content-between float-right">
									<a href="input-data-posyandu.php" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Impor Data</a>
									<a href="tambah-data-posyandu.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
									<a href="hapus-data-posyandu.php" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Data</a>
								</div>
							</div>

							<?php include 'database.php'; ?>
							<?php
							if ($posyandu->num_rows > 0) {
								echo "<table class='data-table table nowrap' id='data-table-posyandu'>
										<thead>
											<tr>
											<th>Kecamatan</th>
											<th>Puskesmas</th>
											<th>Pratama</th>
											<th>Madya</th>
											<th>Purnama</th>
											<th>Mandiri</th>
											<th>Jumlah</th>
											<th>Aktif</th>
											<th>Puskeskel</th>
											<th>Tindakan</th>
											</tr>
										</thead>
										<tbody>";
								while ($row = $posyandu->fetch_assoc()) {
									echo "<tr>
											<td>" . $row["kecamatan"] . "</td>
											<td>" . $row["puskesmas"] . "</td>
											<td>" . $row["pratama"] . "</td>
											<td>" . $row["madya"] . "</td>
											<td>" . $row["purnama"] . "</td>
											<td>" . $row["mandiri"] . "</td>
											<td>" . $row["jumlah"] . "</td>
											<td>" . $row["aktif"] . "</td>
											<td>" . $row["puskeskel"] . "</td>
											<td>
											<div class='table-actions'>
												<a href='edit-data-posyandu.php?id=" . $row["id_posyandu"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
												<a href='hapus-baris-data-posyandu.php?id=" . $row["id_posyandu"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
											</div>
											</td>
										</tr>";
								}
								echo "</tbody></table>";
							} else {
								echo "Tidak ada data posyandu yang ditemukan.";
							}
							?>
						</div>


                             

					
											
						<script>
							function getDataByYear() {
								var selectedYear = document.getElementById('selected-year').value;
								var xhttppuskesmas = new XMLHttpRequest();
								var xhttpRs = new XMLHttpRequest();
								var xhttpTenagaKerja = new XMLHttpRequest();
								var xhttpPosyandu = new XMLHttpRequest();
								

								xhttppuskesmas.onreadystatechange = function() {
									if (this.readyState == 4 && this.status == 200) {
										document.getElementById('data-table-puskesmas').innerHTML = this.responseText;
									}
								};

								xhttpRs.onreadystatechange = function() {
									if (this.readyState == 4 && this.status == 200) {
										document.getElementById('data-table-rumah-sakit').innerHTML = this.responseText;
									}
								};

								xhttpTenagaKerja.onreadystatechange = function() {
									if (this.readyState == 4 && this.status == 200) {
										document.getElementById('data-table-tenaga-kerja').innerHTML = this.responseText;
									}
								};

								xhttpPosyandu.onreadystatechange = function() {
									if (this.readyState == 4 && this.status == 200) {
										document.getElementById('data-table-posyandu').innerHTML = this.responseText;
									}
								};

											
							
								xhttppuskesmas.open("GET", "tahun_diskes_puskesmas.php?year=" + selectedYear, true);
								xhttppuskesmas.send();

								xhttpRs.open("GET", "tahun_diskes_rumah_sakit.php?year=" + selectedYear, true);
        							xhttpRs.send();

								xhttpTenagaKerja.open("GET", "tahun_diskes_tenaga_kerja.php?year=" + selectedYear, true);
        							xhttpTenagaKerja.send();

								xhttpPosyandu.open("GET", "tahun_diskes_posyandu.php?year=" + selectedYear, true);
        							xhttpPosyandu.send();

							

							
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
