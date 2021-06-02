<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>

<head>
   <title>Cindy Putri Clarita : 181011400711</title>
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
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="home.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Master Berita
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="berita.php">Master Berita</a>
                  <a class="dropdown-item" href="kategori.php">Master Kategori</a>
               </div>
            </li>
         </ul>
         <form action="kategori.php" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Pencarian Kategori" name="cari" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Cari">Cari</button>
         </form>
      </div>
   </nav>
   <div class="container">
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="kategori.php">Kategori</a></li>
         </ol>
      </nav>
      <a class="btn btn-success btn-sm float-right mb-4" href="add-kategori.php"> <i class="fa fa-plus"></i> Tambah Kategori</a>
      <br>

      <table id="example" class="table table-active" style="width:100%">
         <thead>
            <tr>
               <th>No</th>
               <th>Kategori</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <?php
            if (isset($_GET['cari'])) {
               $cari = $_GET['cari'];
               $sql = "SELECT * FROM mst_kategori  WHERE nama_kategori  LIKE '%" . $cari . "%' ORDER BY id_kategori DESC";
            } else {
               $sql = "SELECT * FROM mst_kategori  ORDER BY id_kategori DESC";
            }
            $query = mysqli_query($db, $sql);
            $no = 1;
            while ($berita = mysqli_fetch_array($query)) {
               echo "<tr>";
               echo "<td>" . $no++ . "</td>";
               echo "<td>" . $berita['nama_kategori'] . "</td>";
               echo "<td>";
               echo "<a class='btn btn-warning btn-sm' href='edit-kategori.php?id_kategori=" . $berita['id_kategori'] . "'> <i class='fa fa-edit'></i>  Edit</a> | ";
               echo "<a class='btn btn-danger btn-sm' href='delete-kategori.php?id_kategori=" . $berita['id_kategori'] . "'> <i class='fa fa-trash'></i> Hapus</a> | ";
               echo "</td>";
               echo "</tr>";
            }
            ?>
         </tbody>
      </table>
      <!-- 
   <p>Total: <?php echo mysqli_num_rows($query) ?></p> -->
   </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
      $('#example').DataTable({
         "oLanguage": {
            "sSearch": "Pencarian Kategori : ",
            "sEmptyTable": "Data Tidak Tersedia",
            "sLoadingRecords": "Silahkan Tunggu - loading...",
            "sLengthMenu": "Menampilkan Kategori &nbsp;  _MENU_  &nbsp;   Data",
            "sZeroRecords": "Tidak Ada Data Berita Yang Di Cari",
            "sProcessing": "Memuat Data...."
         }
      });

   });
</script>

</html>