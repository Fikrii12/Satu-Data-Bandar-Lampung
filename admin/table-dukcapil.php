<!DOCTYPE html>
	<html>
		<head>
			<!-- Basic Page Info -->
			<meta charset="utf-8" />
			<title>Dinas Dukcapil</title>

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
										<h4>Dinas Dukcapil</h4>
									</div>
									<nav aria-label="breadcrumb" role="navigation">
										<ol class="breadcrumb">
											<li class="breadcrumb-item">
												<a href="index.php">Home</a>
											</li>
											<li class="breadcrumb-item active" aria-current="page">
												Dinas Dukcapil
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
						
                                                                                          
                         <div class="card-box pb-10">
                              <div class="d-flex align-items-center">
                                   <h2 class="h4 pd-20">Data PenduduK Berdasarkan Umur</h2>
                                   <div class="justify-content-between float-right">
								<a href="input-data-dukcapil-umur.php" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Impor Data</a>
								<a href="tambah-data-dukcapil-umur.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
								<a href="hapus-tahun-dukcapil-umur.php" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Data</a>
                                   </div>
                              </div>
                              <?php include 'database.php'; ?>
                              <?php
                              if ($ducapil_umur->num_rows > 0) {
                                   echo "<table class='data-table table nowrap' id='data-table-dukcapil-umur'>
                                             <thead>
                                                  <tr>
                                                  <th>Kecamatan</th>
                                                  <th>0-9</th>
                                                  <th>10-19</th>
                                                  <th>20-29</th>
                                                  <th>30-39</th>
                                                  <th>40-49</th>
                                                  <th>50-59</th>
                                                  <th>60-69</th>
                                                  <th>>70</th>
                                                  <th>Timdakan</th>
                                                  </tr>
                                             </thead>
                                             <tbody>";
                                   
                                   while ($row = $ducapil_umur->fetch_assoc()) {
                                        echo "<tr>
                                             <td>" . $row["kecamatan"] . "</td>
                                             <td>" . $row["umur1"] . "</td>
                                             <td>" . $row["umur2"] . "</td>
                                             <td>" . $row["umur3"] . "</td>
                                             <td>" . $row["umur4"] . "</td>
                                             <td>" . $row["umur5"] . "</td>
                                             <td>" . $row["umur6"] . "</td>
                                             <td>" . $row["umur7"] . "</td>
                                             <td>" . $row["umur8"] . "</td>
                                             <td>
                                                  <div class='table-actions'>
                                                  	<a href='edit-ducapil-umur.php?id=" . $row["id_kecamatan"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
                   				 				<a href='hapus-baris-ducapil-umur.php?id=" . $row["id_kecamatan"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
               
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
							<h2 class="h4 pd-20">Data Penduduk Berdasarkan Agama</h2>
							<div class="justify-content-between float-right">
								<a href="input-data-dukcapil-agama.php" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Impor Data</a>
								<a href="tambah-data-dukcapil-agama.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
								<a href="hapus-tahun-dukcapil-agama.php" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Data</a>
							</div>
						</div>
						<?php include 'database.php'; ?>
						<?php
						if ($ducapil_agama->num_rows > 0) {
							echo "<table class='data-table table nowrap' id='data-table-dukcapil-agama'>
									<thead>
										<tr>
											<th>Kecamatan</th>
											<th>Islam</th>
											<th>Kristen</th>
											<th>Katolik</th>
											<th>Hindu</th>
											<th>Budha</th>
											<th>Konghucu</th>
											<th>Kepercayaan</th>
											<th>Jumlah</th>
											<th>Tindakan</th>
										</tr>
									</thead>
									<tbody>";
							// Menampilkan data pada tabel
							while ($row = $ducapil_agama->fetch_assoc()) {
								echo "<tr>
										<td>" . $row["kecamatan"] . "</td>
										<td>" . $row["islam"] . "</td>
										<td>" . $row["kristen"] . "</td>
										<td>" . $row["katolik"] . "</td>
										<td>" . $row["hindu"] . "</td>
										<td>" . $row["budha"] . "</td>
										<td>" . $row["konghucu"] . "</td>
										<td>" . $row["kepercayaan"] . "</td>
										<td>" . $row["jumlah"] . "</td>
										<td>
											<div class='table-actions'>
											<a href='edit-ducapil-agama.php?id=" . $row["id_kecamatan"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
											<a href='hapus-baris-ducapil-agama.php?id=" . $row["id_kecamatan"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
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
							<h2 class="h4 pd-20">Data Penduduk Berdasarkan Pendidikan</h2>
							<div class="justify-content-between float-right">
								<a href="input-data-dukcapil-pendidikan.php" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Impor Data</a>
								<a href="tambah-data-dukcapil-pendidikan.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
								<a href="hapus-tahun-dukcapil-pendidikan.php" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Data</a>
							</div>
						</div>
						<?php include 'database.php'; ?>
						<?php
						if ($ducapil_pendidikan->num_rows > 0) {
							echo "<table class='data-table table nowrap' id='data-table-dukcapil-pendidikan'>
									<thead>
										<tr>
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
										<th>Tindakan</th>
										</tr>
									</thead>
									<tbody>";
							// Menampilkan data pada tabel
							while ($row = $ducapil_pendidikan->fetch_assoc()) {
								echo "<tr>
										<td>" . $row["kecamatan"] . "</td>
										<td>" . $row["tidak_sekolah"] . "</td>
										<td>" . $row["belum_sd"] . "</td>
										<td>" . $row["tamat_sd"] . "</td>
										<td>" . $row["sltp"] . "</td>
										<td>" . $row["slta"] . "</td>
										<td>" . $row["d1_2"] . "</td>
										<td>" . $row["d3"] . "</td>
										<td>" . $row["d4_s1"] . "</td>
										<td>" . $row["s2"] . "</td>
										<td>" . $row["s3"] . "</td>
										<td>" . $row["jumlah"] . "</td>
										<td>
										<div class='table-actions'>
											<a href='edit-ducapil-pendidikan.php?id=" . $row["id_kecamatan"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
											<a href='hapus-baris-ducapil-pendidikan.php?id=" . $row["id_kecamatan"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
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
							<h2 class="h4 pd-20">Data Penduduk Berdasarkan Jenis Kelamin</h2>
							<div class="justify-content-between float-right">
								<a href="input-data-dukcapil-jenis-kelamin.php" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Impor Data</a>
								<a href="tambah-data-dukcapil-jenis-kelamin.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
								<a href="hapus-tahun-dukcapil-jenis-kelamin.php" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Data</a>
							</div>
						</div>
						<?php include 'database.php'; ?>
						<?php
						if ($dukcapil_jenis_kelamin->num_rows > 0) {
							echo "<table class='data-table table nowrap' id='data-table-dukcapil-jenis-kelamin'>
									<thead>
										<tr>
										<th>Kecamatan</th>
										<th>Pria</th>
										<th>Wanita</th>
										<th>Jumlah</th>
										<th>Tindakan</th>
										</tr>
									</thead>
									<tbody>";
							// Menampilkan data pada tabel
							while ($row = $dukcapil_jenis_kelamin->fetch_assoc()) {
								echo "<tr>
										<td>" . $row["kecamatan"] . "</td>
										<td>" . $row["pria"] . "</td>
										<td>" . $row["wanita"] . "</td>
										<td>" . $row["jumlah"] . "</td>
										<td>
										<div class='table-actions'>
											<a href='edit-dukcapil-jenis-kelamin.php?id=" . $row["id_kecamatan"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
											<a href='hapus-baris-dukcapil-jenis-kelamin.php?id=" . $row["id_kecamatan"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
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
								var xhttppDukcapilUmur = new XMLHttpRequest();
								var xhttpDukcapilAgama = new XMLHttpRequest();
								var xhttpDukcapilPendidikan = new XMLHttpRequest();
								var xhttpDukcapilJenisKelamin = new XMLHttpRequest();
							
								

								xhttppDukcapilUmur.onreadystatechange = function() {
									if (this.readyState == 4 && this.status == 200) {
										document.getElementById('data-table-dukcapil-umur').innerHTML = this.responseText;
									}
								};

								xhttpDukcapilAgama.onreadystatechange = function() {
									if (this.readyState == 4 && this.status == 200) {
										document.getElementById('data-table-dukcapil-agama').innerHTML = this.responseText;
									}
								};

								xhttpDukcapilPendidikan.onreadystatechange = function() {
									if (this.readyState == 4 && this.status == 200) {
										document.getElementById('data-table-dukcapil-pendidikan').innerHTML = this.responseText;
									}
								};

								xhttpDukcapilJenisKelamin.onreadystatechange = function() {
									if (this.readyState == 4 && this.status == 200) {
										document.getElementById('data-table-dukcapil-jenis-kelamin').innerHTML = this.responseText;
									}
								};

					
											
							
								xhttppDukcapilUmur.open("GET", "tahun-dukcapil-umur.php?year=" + selectedYear, true);
								xhttppDukcapilUmur.send();
							
								xhttpDukcapilAgama.open("GET", "tahun-dukcapil-agama.php?year=" + selectedYear, true);
								xhttpDukcapilAgama.send();
							
								xhttpDukcapilPendidikan.open("GET", "tahun-dukcapil-pendidikan.php?year=" + selectedYear, true);
								xhttpDukcapilPendidikan.send();
							
								xhttpDukcapilJenisKelamin.open("GET", "tahun-dukcapil-jenis-kelamin.php?year=" + selectedYear, true);
								xhttpDukcapilJenisKelamin.send();

							
							

							
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
