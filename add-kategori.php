<?php
include_once("koneksi.php");
?>
<html>

<head>
   <title>Erlangga Pramuja : 181011400336</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="home.php">Berita</a>>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Master Berita
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="berita.php">Master Berita</a>
                  <a class="dropdown-item" href="kategori.php">Master Kategori</a>
               </div>
            </li>
         </ul>
         <form action="berita.php" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Pencarian Berita" name="cari" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Cari">Search</button>
         </form>
      </div>
   </nav>
   <div class="container">
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="kategori.php">Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Kategori</li>
         </ol>
      </nav>
      <form action="add-kategori.php" method="post">
         <div class="form-group">
            <label for="">Nama Kategori</label>
            <input type="text" name="nama_kategori" class=" form-control">
         </div>
         <div class="row">
            <div class="col-md-6">
               <a href="kategori.php" class="btn btn-danger btn-sm btn-block">Cancel</a>
            </div>
            <div class="col-md-6">
               <input class="btn-success btn-sm btn-block" type="submit" name="Submit" value="Add"></input>
            </div>
         </div>
      </form>
   </div>
   <?php

   // Check If form submitted, insert form data into users table.
   if (isset($_POST['Submit'])) {
      $nama_kategori = $_POST['nama_kategori'];

      // Insert user data into table
      $sql = mysqli_query($db, "INSERT INTO mst_kategori(nama_kategori) VALUES('$nama_kategori')");

      // Show message when user added
      header("Location:kategori.php");
   }
   ?>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
      $('#example').DataTable({
         "oLanguage": {
            "sSearch": "Pencarian Berita : ",
            "sEmptyTable": "Data Tidak Tersedia",
            "sLoadingRecords": "Silahkan Tunggu - loading...",
            "sLengthMenu": "Menampilkan Berita &nbsp;  _MENU_  &nbsp;   Data",
            "sZeroRecords": "Tidak Ada Data Berita Yang Di Cari",
            "sProcessing": "Memuat Data...."
         }
      });

   });
</script>

</html>