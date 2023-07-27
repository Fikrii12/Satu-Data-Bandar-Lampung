<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Satu Data Bandar Lampung</title>
	<?php require_once("./layouts/links.layout.php") ?>
</head>

<body>
	<?php require_once("./layouts/header.layout.php") ?>

     <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/cta-bgr.png');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Visualisasi Data</h2>
              <p>Visualisai Data adalah proses pengumpulan, analisis, dan interpretasi data statistik yang berkaitan dengan sektor-sektor ekonomi atau industri tertentu. Dengan menggunakan data ini, kita dapat memahami kinerja, struktur, dan tren dalam sektor-sektor seperti pertanian, manufaktur, perdagangan, keuangan, transportasi, pariwisata, dan lainnya. Statistik sektoral membantu pemangku kepentingan dalam pengambilan keputusan, perencanaan ekonomi, pembuatan kebijakan, dan evaluasi kinerja sektor-sektor tersebut.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Visualisasi Data</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

  <section>
  <div class="container1">
    <div class="pencarian">
      <div class="row justify-content-center"> <!-- Menggunakan class "justify-content-center" untuk membuat kota berada di tengah -->
        <div class="col-lg-4">
          <label for="str_pd">Organisasi Perangkat Daerah</label>
          <select class="form-select select2" name="str_pd" id="str_pd" required>
            <option value="" selected>- Pilih -</option>
            <option value="BKD">Dinas BKD</option>
            <option value="Pangan">Dinas Pangan</option>
            <option value="Sosial">Dinas Sosial</option>
            <option value="Kesehatan">Dinas Kesehatan</option>
            <option value="Pertanian">Dinas Pertanian</option>
            <option value="Pekerjaan Umum">Dinas Pekerjaan Umum</option>
          </select>
        </div>

        <div class="col-lg-4">
          <label for="bottom_year">Tahun</label>
          <input type="number" class="form-control" name="bottom_year" min="1900" max="2099" step="1" value="2019" required>
        </div>

        <div>
          <button type="button" class="tombol-tampilkan" name="btnFilter" onclick="loadChartData()">Tampilkan</button>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Tempat untuk menampilkan grafik -->
<div id="chartContainer" style="height: 300px; width: 100%;"></div>

    
    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p>BADAN</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p>BAGIAN</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>DINAS</p>
            </div>
          </div><!-- End Stats Item -->


          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="2570" data-purecounter-duration="1" class="purecounter"></span>
              <p>DATA</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->
  </main><!-- End #main -->

<div class="row">
    <div class="col-lg-6 text-center">
        <h2>Grafik</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="chart1"></div>
        </div>
    </div>

     <div class="col-lg-6 text-center">
        <h2>Grafik</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="chart2"></div>
        </div>
    </div>
</div>

<!-- <div class="row">
    <div class="col-lg-6 text-center">
        <h2>Grafik</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="chart3"></div>
        </div>
    </div>

    <div class="col-lg-6 text-center">
        <h2>Grafik</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="chart4"></div>
        </div>
    </div>
</div> -->

<div class="row">
    <div class="col-lg-6 text-center">
        <h2>Grafik</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="chart5"></div>
        </div>
    </div>

     <div class="col-lg-6 text-center">
        <h2>Grafik</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="chart6"></div>
        </div>
    </div>
</div>

<!-- <div class="col-lg-6 text-center">
        <h2>Grafik</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="chart7"></div>
        </div>
    </div>
</div> -->

<div class="col-lg-6 text-center">
        <h2>Grafik</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="chart8"></div>
        </div>
    </div>
</div>

<div class="col-lg-6 text-center">
        <h2>Grafik</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="chart9"></div>
        </div>
    </div>
</div>

<!-- <div class="col-lg-6 text-center">
        <h2>Grafik</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="chart10"></div>
        </div>
    </div>
</div> -->

		<?php require_once("./layouts/footer.layout.php") ?>

	</div>

	<?php require_once("./layouts/scripts.layout.php") ?>

</body>

</html>
