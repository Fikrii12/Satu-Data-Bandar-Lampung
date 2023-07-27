

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Satu Data Bandar Lampung</title>
	<?php require_once("./layouts/links.layout.php") ?>
</head>

<body>
	<?php require_once("./layouts/header.layout.php") ?>

    <!-- ======= Dokumen  ======= -->
     <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/cta-bgr.png');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Dokumen</h2>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Dokumen</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
   

    <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <h2>Dokumen</h2>
        <div class="table-responsive">

          <?php include 'admin/database.php'; ?>
          <?php
          if ($dokumen->num_rows > 0) {
            echo "<table class='table table-bordered table-striped'>
                  <thead>
                    <tr>
                      <th width='10px'>No.</th>
                      <th>Nama Dokumen</th>
                      <th align='center' width='80px'>Download</th>
                    </tr>
                  </thead>
                  <tbody>";
            $number = 0;
            while ($row = $dokumen->fetch_assoc()) {
              $download_link = $row["download_link"];
              $path_folder = "./path/uploads/documents/";
              $nama_file = basename($download_link);
              $tautan_unduhan = $path_folder . $nama_file;
              
              $number++;

              echo "<tr>
                  <td>$number</td>
                  <td>" . $row["nama_dokumen"] . "</td>
                  <td style='text-align: center;'>
                    <div class='table-actions'>
                      <a href='" . $tautan_unduhan . "' target='_blank' data-color='#265ed7'>
                      <i class='fa fa-download'></i>
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
    </div>
</section>



  </main><!-- End #main -->

    <!-- End Geospasial -->

    <!-- ======= Call To Action Section ======= -->
    <!-- <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Tentang Satu Data Kota Bandar Lampung</h3>
            <p>
              Satu Data Kota Bandar Lampung menyediakan basis data yang akurat, terbuka, terpusat, dan terintegrasi.
              Data yang disajikan dalam Satu Data Kota Bandar Lampung ini mudah dicari, diakses, dan dapat digunakan kembali. 
              Hal ini membantu publik/masyarakat pengguna Satu Data Kota Bandar Lampung dalam memanfaatkan data dengan lebih efektif. Dalam upaya memenuhi kebutuhan masyarakat, Satu Data Kota Bandar Lampung juga memastikan data dan informasi yang disediakan dalam format yang mudah dipahami.
            </p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Call To Action Section -->


		<?php require_once("./layouts/footer.layout.php") ?>

	</div>

	<?php require_once("./layouts/scripts.layout.php") ?>

</body>

</html>
