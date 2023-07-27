<!DOCTYPE html>
	<html>
		<head>
			<!-- Basic Page Info -->
			<meta charset="utf-8" />
			<title>Dinas Pangan</title>

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

			
			<?php require_once("../layouts/sidebar.layout.php") ?>

			<div class="main-container">
				<div class="pd-ltr-20 xs-pd-20-10">
					<div class="min-height-200px">
						<div class="page-header">
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="title">
										<h4>Dinas Pangan</h4>
									</div>
									<nav aria-label="breadcrumb" role="navigation">
										<ol class="breadcrumb">
											<li class="breadcrumb-item">
												<a href="index.php">Home</a>
											</li>
											<li class="breadcrumb-item active" aria-current="page">
												Dinas Pangan
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
								<h2 class="h4 pd-20">Ketersediaan Bahan Poko Menjelang Ramadhan</h2>
								<div class="justify-content-between float-right">
									<a href="input-data-dispan.php" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Impor Data</a>
									<a href="tambah-dinas-pangan.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
									<a href="hapus-tahun-dispan.php" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Data</a>
								</div>
								</button>
								
							</div>
							
							<?php include 'database.php'; ?>
							<?php
							if ($dinas_pangan->num_rows > 0) {
								echo "<table class='data-table table nowrap'>
										<thead>
											<tr>
											<th>Komoditas</th>
											<th>Total Ketersediaan</th>
											<th>Kebutuhan Ramadhan</th>
											<th>Stok Akhir</th>
											<th>Tindakan</th>
											</tr>
										</thead>
										<tbody>";
								// Menampilkan data pada tabel
								while ($row = $dinas_pangan->fetch_assoc()) {
									echo "<tr>
										<td>" . $row["komoditas"] . "</td>
										<td>" . $row["total"] . "</td>
										<td>" . $row["kebutuhan"] . "</td>
										<td>" . $row["stok_akhir"] . "</td>
										<td>
											<div class='table-actions'>
											<a href='edit-dispan.php?id=" . $row["id_komoditas"] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2'></i></a>
											<a href='hapus-baris-dinasPangan.php?id=" . $row["id_komoditas"] . "' data-color='#e95959' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='icon-copy dw dw-delete-3'></i></a>
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
									// Tambahkan permintaan AJAX di sini untuk mengambil data berdasarkan tahun yang dipilih dari server
									// dan perbarui tabel dengan data baru sesuai dengan tahun yang dipilih.
									var xhttp = new XMLHttpRequest();
									xhttp.onreadystatechange = function() {
										if (this.readyState == 4 && this.status == 200) {
											document.querySelector('.data-table tbody').innerHTML = this.responseText;
										}
									};
									xhttp.open("GET", "tahun_dispan.php?year=" + selectedYear, true);
									xhttp.send();

									// Simpan tahun yang dipilih ke dalam localStorage
									localStorage.setItem('selectedYear', selectedYear);
								}

								// Ambil tahun terakhir yang dipilih dari localStorage dan panggil fungsi getDataByYear
								var lastSelectedYear = localStorage.getItem('selectedYear');
								var selectedYearInput = document.getElementById('selected-year');

								if (lastSelectedYear) {
									selectedYearInput.value = lastSelectedYear;
									getDataByYear(); // Panggil fungsi untuk menampilkan data sesuai dengan tahun terakhir yang dipilih
								} else {
									selectedYearInput.value = new Date().getFullYear(); // Gunakan tahun saat ini sebagai nilai default
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
