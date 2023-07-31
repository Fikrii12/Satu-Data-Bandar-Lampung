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

  <!-- <section>
  <form action ="" method="GET">
  <div class="container1">
    <div class="pencarian">
      <div class="row justify-content-center"> 
        <div class="col-lg-4">
          <label for="opd">Organisasi Perangkat Daerah</label>
          <select class="form-select select2" name="opd" id="opd" required>
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
          <label for="year">Tahun</label>
          <input type="number" class="form-control" name="year" min="1900" max="2099" step="1" value="2019" required>
        </div>

        <div>
          <button type="submit" class="tombol-tampilkan" onclick="loadChartData()">Tampilkan</button>
        </div>
      </div>
    </div>
  </div>
</form>
</section> -->

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
              <span data-purecounter-start="0" data-purecounter-end="591" data-purecounter-duration="1" class="purecounter"></span>
              <p>DATA</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->
  </main><!-- End #main -->

<hr style="margin-top: 10px; margin-bottom: 20px;">
<!-- Tempat untuk menampilkan grafik -->
<div id="chartContainer" style="height: 25px; width: 100%;"></div>


<section id="counter-grafik" class="stats-counter pt-0">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-6 text-center">
        <h2>Grafik BKD</h2>
        <div class="bg-white pd-20 card-box mb-30">
          <div id="pendidikan"></div>
        </div>
      </div>
      <div class="col-lg-6 text-center">
        <h2>Grafik BKD</h2>
        <div class="bg-white pd-20 card-box mb-30">
          <div id="golongan-jenis-kelamin"></div>
        </div>
      </div>
    </div>
    <hr style="margin-top: 20px; margin-bottom: 20px;">
    <div class="row">
      <div class="col-lg-6 text-center">
        <h2>Grafik BKD</h2>
        <div class="bg-white pd-20 card-box mb-30">
          <div id="golongan-umur"></div>
        </div>
      </div> 
      <div class="col-lg-6 text-center">
        <h2>Grafik BKD</h2>
        <div class="bg-white pd-20 card-box mb-30">
          <div id="umur"></div>
        </div>
      </div>
    </div>
    <hr style="margin-top: 20px; margin-bottom: 20px;">
    <p style="font-style: italic;">Satu Data Kota Bandar Lampung</p>
  </div>
</section><!-- End Stats Counter Section -->

<hr style="margin-top: 10px; margin-bottom: 20px;">
<!-- Tempat untuk menampilkan grafik -->
<div id="chartContainer" style="height: 25px; width: 100%;"></div>

<!-- DINSOS -->
<section id="counter-grafik-dishub" class="stats-counter pt-0">
  <div class="container" data-aos="fade-up">
    <div class="row">

      <div class="col-lg-6 text-center">
        <h2>Grafik DINSOS</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="kecamatan"></div>
        </div>
      </div>  
    </div>
    <hr style="margin-top: 20px; margin-bottom: 20px;">
    <p style="font-style: italic;">DATA DINSOS 2022</p>
  </div>
</section><!-- End Stats Counter Section -->

<hr style="margin-top: 10px; margin-bottom: 20px;">
<!-- Tempat untuk menampilkan grafik -->
<div id="chartContainer" style="height: 25px; width: 100%;"></div>

<!-- DINSOS -->

<!-- DISHUB -->
<section id="counter-grafik-dishub" class="stats-counter pt-0">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-6 text-center">
        <h2>Grafik DISHUB</h2>
        <div class="bg-white pd-20 card-box mb-30">
          <div id="bulan"></div>
        </div>
      </div>
      <div class="col-lg-6 text-center">
        <h2>Grafik DISHUB</h2>
        <div class="bg-white pd-20 card-box mb-30">
          <div id="jenis-kendaraan"></div>
        </div>
      </div>
    </div>
    <hr style="margin-top: 20px; margin-bottom: 20px;">
    <div class="row">
      <div class="col-lg-6 text-center">
        <h2>Grafik DISHUB</h2>
        <div class="bg-white pd-20 card-box mb-30">
          <div id="jenis-mobil"></div>
        </div>
      </div>
      <!-- <div class="col-lg-6 text-center">
        <h2>Grafik BKD</h2>
        <div class="bg-white pd-20 card-box mb-30">
          <div id="chart4"></div>
        </div>
      </div> -->
    </div>
    <hr style="margin-top: 20px; margin-bottom: 20px;">
    <p style="font-style: italic;">DATA DISHUB 2022</p>
  </div>
</section><!-- End Stats Counter Section -->
<!-- DISHUB -->

<hr style="margin-top: 10px; margin-bottom: 20px;">
<!-- Tempat untuk menampilkan grafik -->
<div id="chartContainer" style="height: 25px; width: 100%;"></div>


<!-- DINS -->
<section id="counter-grafik-dis" class="stats-counter pt-0">
  <div class="container" data-aos="fade-up">
    <div class="row">

      <div class="col-lg-6 text-center">
        <h2>Grafik DISPETANI</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="nama-tanaman"></div>
        </div>
      </div>  
      <div class="col-lg-6 text-center">
        <h2>Grafik DISPAN</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="komoditas"></div>
        </div>
      </div> 
    </div>
    <hr style="margin-top: 20px; margin-bottom: 20px;">
    <p style="font-style: italic;">DATA 2022</p>
  </div>
</section><!-- End Stats Counter Section -->

<hr style="margin-top: 10px; margin-bottom: 20px;">
<!-- Tempat untuk menampilkan grafik -->
<div id="chartContainer" style="height: 25px; width: 100%;"></div>

<!-- DINS -->


<!-- DISPU -->
<section id="counter-grafik-dispu" class="stats-counter pt-0">
  <div class="container" data-aos="fade-up">
    <div class="row">

      <div class="col-lg-6 text-center">
        <h2>Grafik DINAS PU</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="dispu-flyover-underpass"></div>
        </div>
      </div>  
      <div class="col-lg-6 text-center">
        <h2>Grafik DINAS PU</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="dispu-jenis-permukaan-jalan"></div>
        </div>
      </div>
      <div class="col-lg-6 text-center">
        <h2>Grafik DINAS PU</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="dispu-panjang-jalan"></div>
        </div>
      </div> 
    </div>
    <hr style="margin-top: 20px; margin-bottom: 20px;">
    <p style="font-style: italic;">DATA 2022</p>
  </div>
</section><!-- End Stats Counter Section -->

<hr style="margin-top: 10px; margin-bottom: 20px;">
<!-- Tempat untuk menampilkan grafik -->
<div id="chartContainer" style="height: 25px; width: 100%;"></div>

<!-- DISPU -->

<!-- DUKCAPIL -->
<section id="counter-grafik-dukcapil" class="stats-counter pt-0">
  <div class="container" data-aos="fade-up">
    <div class="row">

      <div class="col-lg-6 text-center">
        <h2>Grafik DUKCAPIL</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="dukcapil-umur"></div>
        </div>
      </div>  
      <div class="col-lg-6 text-center">
        <h2>Grafik DUKCAPIL</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="dukcapil-agama"></div>
        </div>
      </div>
      <hr style="margin-top: 20px; margin-bottom: 20px;">
      <div class="col-lg-6 text-center">
        <h2>Grafik DUKCAPIL</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="dukcapil-jenis-kelamin"></div>
        </div>
      </div>
      <div class="col-lg-6 text-center">
        <h2>Grafik DUKCAPIL</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="dukcapil-pendidikan"></div>
        </div>
      </div>
    </div>
    <hr style="margin-top: 20px; margin-bottom: 20px;">
    <p style="font-style: italic;">DATA 2022</p>
  </div>
</section><!-- End Stats Counter Section -->

<hr style="margin-top: 10px; margin-bottom: 20px;">
<!-- Tempat untuk menampilkan grafik -->
<div id="chartContainer" style="height: 25px; width: 100%;"></div>

<!-- DUKCAPIL -->

<!-- Industri Jumlah -->
<section id="counter-grafik-industri" class="stats-counter pt-0">
  <div class="container" data-aos="fade-up">
    <div class="row">

      <div class="col-lg-6 text-center">
        <h2>Grafik INDUSTRI</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="industri-jumlah"></div>
        </div>
      </div>  
      <!-- <div class="col-lg-6 text-center">
        <h2>Grafik DUKCAPIL</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="dukcapil-agama"></div>
        </div>
      </div> -->
    </div>
    <hr style="margin-top: 20px; margin-bottom: 20px;">
    <p style="font-style: italic;">DATA 2022</p>
  </div>
</section><!-- End Stats Counter Section -->

<hr style="margin-top: 10px; margin-bottom: 20px;">
<!-- Tempat untuk menampilkan grafik -->
<div id="chartContainer" style="height: 25px; width: 100%;"></div>

<!-- Industri Jumlah -->


<!-- Posyandu -->
<section id="counter-grafik-industri" class="stats-counter pt-0">
  <div class="container" data-aos="fade-up">
    <div class="row">

      <div class="col-lg-6 text-center">
        <h2>Grafik POSYANDU</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="posyandu"></div>
        </div>
      </div>  
      <div class="col-lg-6 text-center">
        <h2>Grafik PUSKESMAS</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="puskesmas"></div>
        </div>
      </div>
      <div class="col-lg-6 text-center">
        <h2>Grafik RUMAH SAKIT</h2>
        <div class="bg-white pd-20 card-box mb-30">
            <div id="rumah-sakit"></div>
        </div>
      </div>  
    </div>
    <hr style="margin-top: 20px; margin-bottom: 20px;">
    <p style="font-style: italic;">DATA 2022</p>
  </div>
</section><!-- End Stats Counter Section -->

<hr style="margin-top: 10px; margin-bottom: 20px;">
<!-- Tempat untuk menampilkan grafik -->
<div id="chartContainer" style="height: 25px; width: 100%;"></div>

<!-- Posyandu -->

		<?php require_once("./layouts/footer.layout.php") ?>

	</div>

	<?php require_once("./layouts/scripts.layout.php") ?>

</body>

</html>
