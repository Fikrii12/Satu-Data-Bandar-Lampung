$.ajax({
  url: "data-sql/data.php",
  type: "GET",
  dataType: "json",
  success: function (data) {
    // document.getElementById("counter-grafik").style.display='block'
    // Set data yang didapatkan dari AJAX ke dalam variabel chartDataPendidikan
    var chartDataPendidikan = data.pendidikan;

    // Set data yang didapatkan dari AJAX ke dalam variabel chartDataGolongan
    var chartDataGolongan = data.golongan;

    // Set data yang didapatkan dari AJAX ke dalam variabel chartDataDinsos
    var chartDataDinsos = data.dinsos;

    // Set data yang didapatkan dari AJAX ke dalam variabel chartDataDishub
    var chartDataDishub = data.dishub;

    // Set data yang didapatkan dari AJAX ke dalam variabel chartDataDispentani
    var chartDataDispentani = data.dispentani;

    // Set data yang didapatkan dari AJAX ke dalam variabel chartDataDispan
    var chartDataDispan = data.dispan;

    // Set data yang didapatkan dari AJAX ke dalam variabel chartDataGolUmur
    var chartDataGolUmur = data.gol_umur;

    // Set data yang didapatkan dari AJAX ke dalam variabel chartDataUmur
    var chartDataUmur = data.umur;

    // Set data yang didapatkan dari AJAX ke dalam variabel chartDataDishubWajibNoUmum
    var chartDataDishubWajibNoUmum = data.dishub_wajib_noumum;

    // Set data yang didapatkan dari AJAX ke dalam variabel chartDataDishubWajibUmum
    var chartDataDishubWajibUmum = data.dishub_wajib_umum;

    // Set data yang didapatkan dari AJAX ke dalam variabel Dispu Flyover Underpass
    var chartDataDispuFlyoverUnderpass = data.dispu_flyover_underpass;

    // Set data yang didapatkan dari AJAX ke dalam variabel Dukcapil Umur
    var chartDataDucapilUmur = data.ducapil_umur;

    // Set data yang didapatkan dari AJAX ke dalam variabel Dukcapil Agama
    var chartDataDukcapilAgama = data.dukcapil_agama;

    // Set data yang didapatkan dari AJAX ke dalam variabel Dukcapil Jenis Kelamin
    var chartDataDukcapilJenisKelamin = data.dukcapil_jenis_kelamin;

    // Set data yang didapatkan dari AJAX ke dalam variabel Dukcapil Pendidikan
    var chartDataDukcapilPendidikan = data.dukcapil_pendidikan;

    // Set data yang didapatkan dari AJAX ke dalam variabel Industri Jumlah
    var chartDataIndustriJumlah = data.industri_jumlah;

    // Set data yang didapatkan dari AJAX ke dalam variabel Posyandu
    var chartDataPosyandu = data.posyandu;

    // Set data yang didapatkan dari AJAX ke dalam variabel Puskesmas
    var chartDataPuskesmas = data.puskesmas;

    // Set data yang didapatkan dari AJAX ke dalam variabel Rumah Sakit
    var chartDataRumahSakit = data.rumah_sakit;
    // Membuat chart pertama menggunakan Highcharts untuk data pendidikan
    Highcharts.chart("pendidikan", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual BKD - Pendidikan",
      },
      subtitle: {
        text: "Source: BKD Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataPendidikan.map((item) => item.pendidikan),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Pria",
          data: chartDataPendidikan.map((item) => item.pria),
        },
        {
          name: "Wanita",
          data: chartDataPendidikan.map((item) => item.wanita),
        },
        {
          name: "Jumlah",
          data: chartDataPendidikan.map((item) => item.jumlah),
        },
      ],
    });
    // Membuat chart kedua menggunakan Highcharts untuk data Jenis Kelamin
    Highcharts.chart("golongan-jenis-kelamin", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual BKD - Golongan Jenis Kelamin",
      },
      subtitle: {
        text: "Source: BKD Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataGolongan.map((item) => item.golongan),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Pria",
          data: chartDataGolongan.map((item) => item.pria),
        },
        {
          name: "Wanita",
          data: chartDataGolongan.map((item) => item.wanita),
        },
        {
          name: "Jumlah",
          data: chartDataGolongan.map((item) => item.jumlah),
        },
      ],
    });
    // Membua chart pertama menggunakan Highcharts untuk Golongan Umur
    Highcharts.chart("golongan-umur", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual BKD - Golongan Umur",
      },
      subtitle: {
        text: "Source: BKD Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataGolUmur.map((item) => item.golmur),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Umur 1",
          data: chartDataGolUmur.map((item) => item.umur1),
        },
        {
          name: "Umur 2",
          data: chartDataGolUmur.map((item) => item.umur2),
        },
        {
          name: "Umur 3",
          data: chartDataGolUmur.map((item) => item.umur3),
        },
        {
          name: "Umur 4",
          data: chartDataGolUmur.map((item) => item.umur4),
        },
        {
          name: "Umur 5",
          data: chartDataGolUmur.map((item) => item.umur5),
        },
        {
          name: "Umur 6",
          data: chartDataGolUmur.map((item) => item.umur6),
        },
        {
          name: "Umur 7",
          data: chartDataGolUmur.map((item) => item.umur7),
        },
        {
          name: "Umur 8",
          data: chartDataGolUmur.map((item) => item.umur8),
        },
        {
          name: "Umur 9",
          data: chartDataGolUmur.map((item) => item.umur9),
        },
        {
          name: "Umur 10",
          data: chartDataGolUmur.map((item) => item.umur10),
        },
      ],
    });
    // Membua chart pertama menggunakan Highcharts untuk Umur
    Highcharts.chart("umur", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual BKD - Umur",
      },
      subtitle: {
        text: "Source: BKD Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataUmur.map((item) => item.umur),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Pria",
          data: chartDataUmur.map((item) => item.pria),
        },
        {
          name: "Wanita",
          data: chartDataUmur.map((item) => item.wanita),
        },
        {
          name: "Jumlah",
          data: chartDataUmur.map((item) => item.jumlah),
        },
      ],
    });
    // Membuat chart kelima menggunakan Highcharts untuk data Dinsos-Kecamatan
    Highcharts.chart("kecamatan", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual Dinsos - Kecamatan",
      },
      subtitle: {
        text: "Source: Dinsos Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataDinsos.map((item) => item.kecamatan),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Jumlah Individu",
          data: chartDataDinsos.map((item) => item.jumlah_individu),
        },
        {
          name: "Jumlah Keluarga",
          data: chartDataDinsos.map((item) => item.jumlah_keluarga),
        },
      ],
    });
    // Membuat chart menggunakan Highcharts untuk data Dishub-Bulan
    Highcharts.chart("bulan", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual Dishub - Bulan",
      },
      subtitle: {
        text: "Source: Dishub Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataDishub.map((item) => item.bulan),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Truck Pick Up",
          data: chartDataDishub.map((item) => item.truck_pick_up),
        },
        {
          name: "Bus",
          data: chartDataDishub.map((item) => item.bus),
        },
        {
          name: "Oplet",
          data: chartDataDishub.map((item) => item.oplet),
        },
      ],
    });
    // Membuat chart menggunakan Highcharts untuk data Jenis Kendaraan (Wajib No Umum)
    Highcharts.chart("jenis-kendaraan", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual Dishub - Jenis Kendaraan (Wajib No Umum)",
      },
      subtitle: {
        text: "Source: Dishub Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataDishubWajibNoUmum.map((item) => item.jenis),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Jumlah",
          data: chartDataDishubWajibNoUmum.map((item) => item.jumlah),
        },
      ],
    });
    // Membuat chart menggunakan Highcharts untuk data Jenis Mobil
    Highcharts.chart("jenis-mobil", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual Dishub Wajib Umum - Jenis Mobil",
      },
      subtitle: {
        text: "Source: Dishub Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataDishubWajibUmum.map((item) => item.jenis_mobil),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Jumlah Mobil",
          data: chartDataDishubWajibUmum.map((item) => item.jumlah_mobil),
        },
      ],
    });
    // Membuat chart menggunakan Highcharts untuk data dispentani Nama Tanaman
    Highcharts.chart("nama-tanaman", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual Dispetani - Nama Tanaman",
      },
      subtitle: {
        text: "Source: Dispetani Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataDispentani.map((item) => item.nama_tanaman),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Luas Tanaman",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Luas Tanaman",
          data: chartDataDispentani.map((item) => item.luas_tanaman),
        },
        {
          name: "Luas Rusak",
          data: chartDataDispentani.map((item) => item.luas_rusak),
        },
        {
          name: "Luas Penanaman",
          data: chartDataDispentani.map((item) => item.luas_penanaman),
        },
      ],
    });
    // Membuat chart menggunakan Highcharts untuk data dispan Komoditas
    Highcharts.chart("komoditas", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual Dispan - Komoditas",
      },
      subtitle: {
        text: "Source: Dispan Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataDispan.map((item) => item.komoditas),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Total",
          data: chartDataDispan.map((item) => item.total),
        },
        {
          name: "Kebutuhan",
          data: chartDataDispan.map((item) => item.kebutuhan),
        },
        {
          name: "Stok Akhir",
          data: chartDataDispan.map((item) => item.stok_akhir),
        },
      ],
    });
    // Membuat chart menggunakan Highcharts untuk data Dispu Flyover Underpass
    Highcharts.chart("dispu-flyover-underpass", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual Dispu Flyover Underpass - Nama Flyover",
      },
      subtitle: {
        text: "Source: Dispu Flyover Underpass",
      },
      xAxis: {
        categories: chartDataDispuFlyoverUnderpass.map(
          (item) => item.nama_flyover
        ),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Ukuran Flyover",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Ukuran Flyover",
          data: chartDataDispuFlyoverUnderpass.map(
            (item) => item.ukuran_flyover
          ),
        },
      ],
    });
    // Membuat chart menggunakan Highcharts untuk data Dukcapil Umur
    Highcharts.chart("dukcapil-umur", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual Dukcapil Umur - Kecamatan",
      },
      subtitle: {
        text: "Source: Dukcapil Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataDucapilUmur.map((item) => item.kecamatan),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Umur 1",
          data: chartDataDucapilUmur.map((item) => item.umur1),
        },
        {
          name: "Umur 2",
          data: chartDataDucapilUmur.map((item) => item.umur2),
        },
        {
          name: "Umur 3",
          data: chartDataDucapilUmur.map((item) => item.umur3),
        },
        {
          name: "Umur 4",
          data: chartDataDucapilUmur.map((item) => item.umur4),
        },
        {
          name: "Umur 5",
          data: chartDataDucapilUmur.map((item) => item.umur5),
        },
        {
          name: "Umur 6",
          data: chartDataDucapilUmur.map((item) => item.umur6),
        },
        {
          name: "Umur 7",
          data: chartDataDucapilUmur.map((item) => item.umur7),
        },
        {
          name: "Umur 8",
          data: chartDataDucapilUmur.map((item) => item.umur8),
        },
      ],
    });
    // Membuat chart menggunakan Highcharts untuk Dukcapil Agama
    Highcharts.chart("dukcapil-agama", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual Dukcapil Agama - Kecamatan",
      },
      subtitle: {
        text: "Source: Dukcapil Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataDukcapilAgama.map((item) => item.kecamatan),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Islam",
          data: chartDataDukcapilAgama.map((item) => item.islam),
        },
        {
          name: "Kristen",
          data: chartDataDukcapilAgama.map((item) => item.kristen),
        },
        {
          name: "Katolik",
          data: chartDataDukcapilAgama.map((item) => item.katolik),
        },
        {
          name: "Hindu",
          data: chartDataDukcapilAgama.map((item) => item.hindu),
        },
        {
          name: "Budha",
          data: chartDataDukcapilAgama.map((item) => item.budha),
        },
        {
          name: "Khonghucu",
          data: chartDataDukcapilAgama.map((item) => item.khonghucu),
        },
        {
          name: "Kepercayaan",
          data: chartDataDukcapilAgama.map((item) => item.kepercayaan),
        },
      ],
    });
    // Membuat chart menggunakan Highcharts untuk Dukcapil Jenis Kelamin
    Highcharts.chart("dukcapil-jenis-kelamin", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual Dukcapil Jenis Kelamin - Kecamatan",
      },
      subtitle: {
        text: "Source: Dukcapil Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataDukcapilJenisKelamin.map((item) => item.kecamatan),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Pria",
          data: chartDataDukcapilJenisKelamin.map((item) => item.pria),
        },
        {
          name: "Wanita",
          data: chartDataDukcapilJenisKelamin.map((item) => item.wanita),
        },
      ],
    });
    // Membuat chart menggunakan Highcharts untuk Dukcapil Pendidikan
    Highcharts.chart("dukcapil-pendidikan", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual Dukcapil - Pendidikan",
      },
      subtitle: {
        text: "Source: Dukcapil Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataDukcapilPendidikan.map((item) => item.kecamatan),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Tidak Sekolah",
          data: chartDataDukcapilPendidikan.map((item) => item.tidak_sekolah),
        },
        {
          name: "Belum SD",
          data: chartDataDukcapilPendidikan.map((item) => item.belum_sd),
        },
        {
          name: "Tamat SD",
          data: chartDataDukcapilPendidikan.map((item) => item.tamat_sd),
        },
        {
          name: "SLTP",
          data: chartDataDukcapilPendidikan.map((item) => item.sltp),
        },
        {
          name: "SLTA",
          data: chartDataDukcapilPendidikan.map((item) => item.slta),
        },
        {
          name: "D1-D2",
          data: chartDataDukcapilPendidikan.map((item) => item.d1_2),
        },
        {
          name: "D3",
          data: chartDataDukcapilPendidikan.map((item) => item.d3),
        },
        {
          name: "D4-S1",
          data: chartDataDukcapilPendidikan.map((item) => item.d4_s1),
        },
        {
          name: "S2",
          data: chartDataDukcapilPendidikan.map((item) => item.s2),
        },
        {
          name: "S3",
          data: chartDataDukcapilPendidikan.map((item) => item.s3),
        },
      ],
    });
    // Membuat chart menggunakan Highcharts untuk Industri Jumlah
    Highcharts.chart("industri-jumlah", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual Industri - Jumlah",
      },
      subtitle: {
        text: "Source: Industri Kota Bandar Lampung",
      },
      xAxis: {
        categories: chartDataIndustriJumlah.map((item) => item.industri),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Jumlah",
          data: chartDataIndustriJumlah.map((item) => item.jumlah),
        },
        {
          name: "IKAAHH",
          data: chartDataIndustriJumlah.map((item) => item.ikahh),
        },
        {
          name: "ILMEA",
          data: chartDataIndustriJumlah.map((item) => item.ilmea),
        },
      ],
    });
    //  Membuat chart menggunakan Highcharts untuk Posyandu
    Highcharts.chart("posyandu", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual Posyandu",
      },
      subtitle: {
        text: "Source: Posyandu Data",
      },
      xAxis: {
        categories: chartDataPosyandu.map((item) => item.kecamatan),
        crosshair: true,
      },
      yAxis: {
        min: 0,
        title: {
          text: "Jumlah",
        },
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
          '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0,
        },
      },
      series: [
        {
          name: "Pratama",
          data: chartDataPosyandu.map((item) => item.pratama),
        },
        {
          name: "Madya",
          data: chartDataPosyandu.map((item) => item.madya),
        },
        {
          name: "Purnama",
          data: chartDataPosyandu.map((item) => item.purnama),
        },
        {
          name: "Mandiri",
          data: chartDataPosyandu.map((item) => item.mandiri),
        },
        {
          name: "Jumlah",
          data: chartDataPosyandu.map((item) => item.jumlah),
        },
        {
          name: "Aktif",
          data: chartDataPosyandu.map((item) => item.aktif),
        },
        {
          name: "Puskeskel",
          data: chartDataPosyandu.map((item) => item.puskeskel),
        },
      ],
    });
    //  Membuat chart menggunakan Highcharts untuk Puskesmas
    Highcharts.chart("puskesmas", {
      chart: {
        type: "bar",
      },
      title: {
        text: "Data Puskesmas - Jumlah Rawat Inap dan Non Rawat Inap",
      },
      xAxis: {
        categories: chartDataPuskesmas.map((item) => item.sarana),
      },
      yAxis: {
        title: {
          text: "Jumlah",
        },
      },
      series: [
        {
          name: "Rawat Inap",
          data: chartDataPuskesmas.map((item) => item.jumlah_rawat_inap),
        },
        {
          name: "Non Rawat Inap",
          data: chartDataPuskesmas.map((item) => item.jumlah_non_rawat_inap),
        },
      ],
    });
    //  Membuat chart menggunakan Highcharts untuk Rumah Sakit
    Highcharts.chart("rumah-sakit", {
      chart: {
        type: "bar",
      },
      title: {
        text: "Data Rumah Sakit - RS Umum dan RS Khusus",
      },
      xAxis: {
        categories: chartDataRumahSakit.map((item) => item.nama_rs),
      },
      yAxis: {
        title: {
          text: "Jumlah",
        },
      },
      series: [
        {
          name: "RS Umum",
          data: chartDataRumahSakit.map((item) => item.jumlah_rawat_inap),
          color: "#66b2b2", // Warna untuk RS Umum
        },
        {
          name: "RS Khusus",
          data: chartDataRumahSakit.map((item) => item.jumlah_non_rawat_inap),
          color: "#ff9999", // Warna untuk RS Khusus
        },
      ],
    });
  },
  error: function (xhr, status, error) {
    // Handle error if there is a problem fetching data
    console.error("Error: ", status, error);
  },
});

//   },
//   error: function (xhr, status, error) {
//     // Tangani error jika terjadi masalah dalam mengambil data
//     console.error("Error: ", status, error);
//   },
// });
