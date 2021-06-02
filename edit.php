<?php

include_once("koneksi.php");

if (isset($_POST['update'])) {
   $id_berita = $_POST['id_berita'];
   $id_kategori = $_POST['id_kategori'];
   $judul_berita = $_POST['judul_berita'];
   $penulis = $_POST['penulis'];
   $isi_berita = $_POST['isi_berita'];
   $tgl_publis = $_POST['tgl_publis'];
   $result = mysqli_query($db, "UPDATE trx_berita SET id_kategori='$id_kategori',judul_berita='$judul_berita',penulis='$penulis',isi_berita='$isi_berita',tgl_publis='$tgl_publis' WHERE id_berita=$id_berita");
   header("Location: berita.php");
}
?>
<?php

$id_berita = $_GET['id_berita'];
$result = mysqli_query($db, "SELECT * FROM trx_berita LEFT JOIN mst_kategori ON trx_berita.id_kategori = mst_kategori.id_kategori WHERE id_berita=$id_berita ORDER BY id_berita DESC");
while ($user_data = mysqli_fetch_array($result)) {
   $id_kategori = $user_data['nama_kategori'];
   $judul_berita = $user_data['judul_berita'];
   $penulis = $user_data['penulis'];
   $isi_berita = $user_data['isi_berita'];
   $tgl_publis = $user_data['tgl_publis'];
}
?>
<html>

<head>
   <title>Cindy Putri Clarita : 181011400711</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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
            <li class="breadcrumb-item"><a href="berita.php">Berita</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Berita</li>
         </ol>
      </nav>
      <form name="update_user" method="post" action="edit.php">
         <div class="form-group">
            <label for="Judul">Judul Berita</label>
            <input type="text" class="form-control" name="judul_berita" value="<?= $judul_berita ?>">
         </div>
         <div class="form-group">
            <label for="Judul">Penulis</label>
            <input type="text" class="form-control" name="penulis" value="<?= $penulis ?>">
         </div>
         <div class="form-group">
            <label for="Judul">Isi Berita</label>
            <textarea id="summernote" name="isi_berita"><?= $isi_berita ?></textarea>
         </div>
         <div class="form-group">
            <label for="Judul">Kategori</label>
            <select name="id_kategori" class="form-control">
               <?php
               $q = mysqli_query($db, "SELECT * FROM mst_kategori");
               while ($d = mysqli_fetch_array($q)) {
                  echo "<option value='$d[id_kategori]'> $d[nama_kategori] </option>";
               }
               ?>
            </select>
         </div>
         <div class="form-group">
            <label for="Judul">Tanggal Publish</label>
            <input type="date" class="form-control" name="tgl_publis" value="<?= $tgl_publis ?>">
         </div>
         <div class="row">
            <div class="col-md-6">
               <a href="berita.php" class="btn btn-danger btn-sm btn-block">Cancel</a>
            </div>
            <div class="col-md-6">
               <input type="hidden" name="id_berita" value=<?php echo $_GET['id_berita']; ?>>
               <input class="btn btn-success btn-sm btn-block" type="submit" name="update" value="Update">
            </div>
         </div>
      </form>
   </div>
   <br><br><br>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
   $(document).ready(function() {
      $('#summernote').summernote();
   });
</script>

</html>