<!DOCTYPE html>
<html>

<head>
     <!-- Basic Page Info -->
     <meta charset="utf-8" />
     <title>Tambah Data</title>

     <!-- Site favicon -->
     <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
     <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/logo_bdl.png" />
     <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/logo_bdl.png" />

     <!-- Mobile Specific Metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

     <!-- Google Font -->
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
     <!-- CSS -->
     <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
     <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
     <link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

     <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
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
          (function(w, d, s, l, i) {
               w[l] = w[l] || [];
               w[l].push({
                    "gtm.start": new Date().getTime(),
                    event: "gtm.js"
               });
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


<?php require_once("../layouts/sidebar.layout.php") ?>

<div class="main-container">
     <div class="pd-ltr-20 xs-pd-20-10">
          <div class="min-height-200px">
               <div class="page-header">
                    <div class="row">
                         <div class="col-md-6 col-sm-12">
                              <div class="title">
                                   <h4>Form</h4>
                              </div>
                              <nav aria-label="breadcrumb" role="navigation">
                                   <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                             <a href="publikasi.php">Dokumen</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                             Tambah Data
                                        </li>
                                   </ol>
                              </nav>
                         </div>
                    </div>
               </div>
               <!-- Default Basic Forms Start -->
               <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                         <div class="pull-left">
                              <h4 class="text-blue h4">Tambah Data </h4>
                         </div>

                    </div>


                    <?php

                    require_once 'database.php';


                    $connection = new mysqli($servername, $username, $password, $dbname);

            
                    if ($connection->connect_error) {
                         die("Koneksi database gagal: " . $connection->connect_error);
                    }


                    if (isset($_POST['submit'])) {

                         $id_dok = uniqid();
                         $nama_dokumen = $_POST['nama_dokumen'];


                         $target_directory = "../path/uploads/documents/";
                         $target_file = $target_directory . basename($_FILES["file_dokumen"]["name"]);
                         $uploadOk = 1;
                         $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                         $allowedExtensions = array("pdf", "doc", "docx", "xlsx");
                         if (!in_array($fileType, $allowedExtensions)) {
                              echo "Sorry, only PDF, DOC, DOCX, and XLSX files are allowed.";
                              $uploadOk = 0;
                         }


                         if ($_FILES["file_dokumen"]["size"] > 10000000) {
                              echo "Sorry, your file is too large. Maximum file size is 10MB.";
                              $uploadOk = 0;
                         }


                         if ($uploadOk == 0) {
                              echo "Sorry, your file was not uploaded.";
                         } else {
                              if (move_uploaded_file($_FILES["file_dokumen"]["tmp_name"], $target_file)) {

                                   $insert_query = "INSERT INTO documents (id_dok, nama_dokumen, download_link) VALUES (?, ?, ?)";
                                   $stmt = $connection->prepare($insert_query);
                                   $stmt->bind_param("sss", $id_dok, $nama_dokumen, $target_file);

                                   if ($stmt->execute()) {

                                        echo "<script>
                                                  window.location.href='publikasi.php';
                                             </script>";
                                        exit();
                                   } else {

                                        echo "Terjadi kesalahan saat menambahkan data: " . $stmt->error;
                                   }
                              } else {

                                   header("Location: /publikasi.php?status=error_upload");
                                   exit();
                              }
                         }
                    }


                    $connection->close();
                    ?>

                    <!-- Form untuk menambahkan data -->
                    <form method="POST" action="" enctype="multipart/form-data">
                         <div class="form-group row">
                              <label class="col-sm-12 col-md-2 col-form-label">Nama File Dokumen</label>
                              <div class="col-sm-12 col-md-10">
                                   <input type="text" class="form-control" name="nama_dokumen" id="nama_dokumen">
                              </div>
                         </div>
                         <div class="form-group row">
                              <label class="col-sm-12 col-md-2 col-form-label">Upload File</label>
                              <div class="col-sm-12 col-md-10">
                                   <input type="file" class="form-control" name="file_dokumen" id="file_dokumen">
                              </div>
                         </div>

                         <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" onclick="window.location.href='publikasi.php'">Close</button>
                              <button type="submit" name="submit" class="btn btn-primary">Save</button>
                         </div>
                    </form>




               </div>

          </div>
          <div class="footer-wrap pd-20 mb-20 card-box mt-5">
               Copyright © 2023 SATU DATA KOTA BANDAR LAMPUNG. All Rights Reserved
          </div>
     </div>
</div>
<!-- welcome modal start -->

<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>