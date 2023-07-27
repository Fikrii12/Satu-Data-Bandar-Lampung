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
							echo "<table class='data-table table nowrap' id='data-dukcapil-agama'>
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
							echo "<table class='data-table table nowrap' id='data-dukcapil-pendidikan'>
									<thead>
										<tr>
										<th>Kecamatan</th>
										<th>Tidak Sekolah</th>
										<th>Belum SD</th>
										<th>Tamat SD</th>
										<th>SLTP</th>
										<th>SLTA</th>
										<th>D1/2</th>
										<th>D3</th>
										<th>D4/S1</th>
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


                         <script>
						function getDataByYear() {
							var selectedYear = document.getElementById('selected-year').value;
							var xhttpDukcapilUmur = new XMLHttpRequest();
							var xhttpDukcapilAgama = new XMLHttpRequest();
							var xhttpDukcapilPendidikan = new XMLHttpRequest();

							xhttpDukcapilUmurs.onreadystatechange = function() {
								if (this.readyState == 4 && this.status == 200) {
									document.querySelector('data-dukcapil-umur').innerHTML = this.responseText;
								}
							};

							xhttpDukcapilPendidikan.onreadystatechange = function() {
								if (this.readyState == 4 && this.status == 200) {
									document.querySelector('data-dukcapil-pendidikan').innerHTML = this.responseText;
								}
							};

							xhttpDukcapilAgama.onreadystatechange = function() {
								if (this.readyState == 4 && this.status == 200) {
									document.querySelector('data-dukcapil-agama').innerHTML = this.responseText;
								}
							};

							xhttpDukcapilUmur.open("GET", "tahun-dukcapil-umur.php?year=" + selectedYear, true);
							xhttpDukcapilUmur.send();

							xhttpDukcapilAgama.open("GET", "tahun-dukcapil-agama.php?year=" + selectedYear, true);
							xhttpDukcapilAgama.send();

							xhttpDukcapilPendidikan.open("GET", "tahun-dukcapil-pendidikan.php?year=" + selectedYear, true);
							xhttpDukcapilPendidikan.send();

							
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