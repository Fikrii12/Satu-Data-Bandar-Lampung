$.ajax({
  url: "data-sql/data.php",
  type: "GET",
  dataType: "json",
  success: function (data) {
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

    // // Set data yang didapatkan dari AJAX ke dalam variabel chartDataDispan
    // var chartDataGolonganUmur = data.golongan_umur; 

    // Membuat chart pertama menggunakan Highcharts untuk data pendidikan
    Highcharts.chart("chart1", {
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

    // Membuat chart kedua menggunakan Highcharts untuk data golongan
    Highcharts.chart("chart2", {
      chart: {
        type: "column",
      },
      title: {
        text: "Data Visual BKD - Golongan",
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

    // Membuat chart ketiga menggunakan Highcharts untuk data dinsos
    Highcharts.chart("chart5", {
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
    // Membuat chart keempat menggunakan Highcharts untuk data dishub
    Highcharts.chart("chart6", {
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
    // Membuat chart kelima menggunakan Highcharts untuk data dispentani
    Highcharts.chart("chart8", {
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
    Highcharts.chart("chart9", {
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
  },
  error: function (xhr, status, error) {
    // Tangani error jika terjadi masalah dalam mengambil data
    console.error("Error: ", status, error);
  },
});


//   },
//   error: function (xhr, status, error) {
//     // Tangani error jika terjadi masalah dalam mengambil data
//     console.error("Error: ", status, error);
//   },
// });
