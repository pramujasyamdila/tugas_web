<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>

<head>
   <title>Home</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="home.php">Berita</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">

         </ul>
         <div class="form-inline my-2 my-lg-0">
            <a href="login.php" class="btn btn-primary my-2 my-sm-0">Login</a>
         </div>
      </div>
   </nav>
   <div class="container">
      <header>
         <h3 class="text-center">ERLANGGA CNN NEWS</h3>
      </header>
      <hr>
      <br>
      <?php
      if (isset($_GET['cari'])) {
         $cari = $_GET['cari'];
         $sql = "SELECT * FROM trx_berita LEFT JOIN mst_kategori ON trx_berita.id_kategori = mst_kategori.id_kategori WHERE nama_kategori  LIKE '%" . $cari . "%' ORDER BY id_berita DESC";
      } else {
         $sql = "SELECT * FROM trx_berita LEFT JOIN mst_kategori ON trx_berita.id_kategori = mst_kategori.id_kategori ORDER BY id_berita DESC";
      }
      $query = mysqli_query($db, $sql);
      $no = 1;
      while ($berita = mysqli_fetch_array($query)) {
         echo "<tr>";
         echo "<td><h3>" . $berita['judul_berita'] . "</h3></td>";
         echo "<br>";
         echo "<td> Penulis : " . $berita['penulis'] . "</td>";
         echo "<td>" . $berita['isi_berita'] . "</td>";
         echo "<td> Publish : " . $berita['tgl_publis'] . "</td>";

         echo "</tr>";
      }
      ?>
      <br>
      <!-- 
   <p>Total: <?php echo mysqli_num_rows($query) ?></p> -->
   </div>
   <br><br><br><br>
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