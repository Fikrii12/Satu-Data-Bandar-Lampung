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
              <h2>Statistik Sektoral</h2>
              <p>Statistik sektoral adalah proses pengumpulan, analisis, dan interpretasi data statistik yang berkaitan dengan sektor-sektor ekonomi atau industri tertentu. Dengan menggunakan data ini, kita dapat memahami kinerja, struktur, dan tren dalam sektor-sektor seperti pertanian, manufaktur, perdagangan, keuangan, transportasi, pariwisata, dan lainnya. Statistik sektoral membantu pemangku kepentingan dalam pengambilan keputusan, perencanaan ekonomi, pembuatan kebijakan, dan evaluasi kinerja sektor-sektor tersebut.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Statistik Sektoral</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <div class="container mt-5">
      <div class="pencarian">
        <form method="POST">
          <div class="row">
            <div class="col-lg-4">
              <label for="str_pd">Pilih OPD</label>
              <select class="form-select select2" name="str_pd" id="str_pd" required>
                <option value="" selected>- pilih -</option>
                <option value="bkd">BKD</option>
                <option value="dukcapil">Dinas Dukcapil</option>
                <option value="pangan">Dinas Pangan</option>
                <option value="perhubungan">Dinas Perhubungan</option>
                <option value="pertanian">Dinas Pertanian</option>
                <option value="pu">Dinas Pekerjaan Umum</option>
                <option value="sosial">Dinas Sosial</option>
                <option value="kesehatan">Dinas Kesehatan</option>
                <option value="perindustrian">Dinas Perindustrian</option>
              </select>
            </div>
            <div class="col-lg-4">
              <label for="str_ub">Kategori Data</label>
              <select class="select2 form-control select2-multiple kategori" name="str_ub" id="str_ub">
                <option value="" selected>- pilih -</option>
              </select>
            </div>
            <div class="col-lg-2">
              <label for="top_year" class="pilih_tahun">Pilih Tahun</label>
              <input type="number" class="form-control pilih_tahun" name="top_year" min="1900" max="2099" step="1" value="2023" required>
            </div>


            <div class="col-lg-2 mb-5">
              <label for="btnFilter"></label>
              <button type="submit" class="tombol-tampilkan" name="btnFilter" id="btnFilter">Tampilkan</button>
            </div>
          </div>
        </form>
      </div>
    </div>


    <script>
      const kategoriDataPerOPD = {
        bkd: [{
            label: "Jumlah ASN Menurut Tingkat Pendidikan dan Jenis Kelamin",
            value: "bkd_pendidikan"
          },
          {
            label: "Jumlah ASN Menurut Kelompok Umur dan Jenis Kelamin",
            value: "bkd_umur"
          },
          {
            label: "Jumlah ASN Menurut Golongan dan Kelompok Umur",
            value: "bkd_golongan_umur"
          },
          {
            label: "Jumlah ASN Menurut Golongan dan Jenis Kelamin",
            value: "bkd_golongan_jenis_kelamin"
          },
        ],
        pangan: [{
          label: "Ketersediaan Bahan Poko Menjelang Ramadhan",
          value: "dispan"
        }, ],
        perhubungan: [{
            label: "Jumlah Kendaraan Menurut Jenis Kendaraan",
            value: "dishub"
          },
          {
            label: "Jumlah Kendaraan Bermotor Wajib Uji Menurut Jenis Kendaraan Umum",
            value: "dishub_wajib_umum"
          },
          {
            label: "Jumlah Kendaraan Bermotor Wajib Uji Menurut Jenis Kendaraan Biasa",
            value: "dishub_wajib_noumum"
          },
          {
            label: "Jumlah Kendaraan Bermotor Wajib Uji dan Biaya Uji",
            value: "dishub_wajib_biaya"
          },
        ],
        pertanian: [{
          label: "Tanaman Sayuran dan Buah-buahan Semusim",
          value: "dispentani"
        }, ],
        pu: [{
          label: "Jumlah Pembangunan Fly Over dan Under Pass",
          value: "dispu_flyover_underpass"
        }, ],
        sosial: [{
          label: "Jumlah Data Terpadu Kesejahteraan Sosial",
          value: "dinsos"
        }, ],
        kesehatan: [{
            label: "Puskesmas Kota Bandar Lampung",
            value: "puskesmas"
          },
          {
            label: "Rumah Sakit Kota Bandar Lampung",
            value: "rumah_sakit"
          },
          {
            label: "Data Tenaga Kerja Medis Kota Bandar Lampung",
            value: "tenaga_kerja"
          },
          {
            label: "Data Posyandu Kota Bandar lampung",
            value: "posyandu"
          },
        ],
        dukcapil: [{
            label: "Data PenduduK Berdasarkan Umur",
            value: "ducapil_umur"
          },
          {
            label: "Data Penduduk Berdasarkan Agama",
            value: "dukcapil_agama"
          },
          {
            label: "Data Penduduk Berdasarkan Pendidikan",
            value: "dukcapil_pendidikan"
          },
          {
            label: "Data Penduduk Berdasarkan Jenis Kelamin",
            value: "dukcapil_jenis_kelamin"
          },
        ],
        perindustrian: [{
          label: "Jumlah Usaha Industri",
          value: "industri_jumlah"
        }, ],

      };


      document.getElementById("str_pd").addEventListener("change", function() {
        const kategoriDataDropdown = document.getElementById("str_ub");
        const selectedOPD = this.value;

        kategoriDataDropdown.innerHTML = ""; // Reset pilihan kategori

        if (selectedOPD) {
          kategoriDataDropdown.disabled = false;
          const kategoriDataOptions = kategoriDataPerOPD[selectedOPD];
          for (const kategori of kategoriDataOptions) {
            const option = new Option(kategori.label, kategori.value);
            kategoriDataDropdown.add(option);
          }
        } else {
          kategoriDataDropdown.disabled = true;
          kategoriDataDropdown.add(new Option("- pilih -", ""));
        }
      });

      // Function untuk menampilkan data berdasarkan OPD, Kategori, dan Tahun yang dipilih
      document.getElementById("btnFilter").addEventListener("click", function() {
        const selectedOPD = document.getElementById("str_pd").value;
        const selectedCategory = document.getElementById("str_ub").value;
        const selectedYear = document.getElementById("top_year").value;

        // Membuat objek FormData untuk mengirim data melalui AJAX
        const formData = new FormData();
        formData.append('opd', selectedOPD);
        formData.append('kategori', selectedCategory);
        formData.append('tahun', selectedYear);

        // Mengirim data melalui AJAX menggunakan fetch
        fetch('data_handler.php', {
            method: 'POST',
            body: formData
          })
          .then(response => response.text())
          .then(data => {
            // Memasukkan data yang diterima dari server ke dalam elemen dengan ID 'data-table'
            document.getElementById('data-table').innerHTML = data;
          })
          .catch(error => console.error('Error:', error));
      });
    </script>
    <?php require_once 'data_handler.php'; ?>



    
    <section id="stats-counter" class="stats-counter pt-0">
      <!-- <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div>

        </div>

      </div> -->
    </section>
  </main><!-- End #main -->


  <?php require_once("./layouts/footer.layout.php") ?>

  </div>

  <?php require_once("./layouts/scripts.layout.php") ?>


</body>

</html>