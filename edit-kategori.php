<?php

include_once("koneksi.php");

if (isset($_POST['update'])) {
   $id_kategori = $_POST['id_kategori'];
   $nama_kategori = $_POST['nama_kategori'];
   $result = mysqli_query($db, "UPDATE mst_kategori SET nama_kategori='$nama_kategori' WHERE id_kategori=$id_kategori");
   header("Location: kategori.php");
}
?>
<?php

$id_kategori = $_GET['id_kategori'];
$result = mysqli_query($db, "SELECT * FROM mst_kategori  WHERE id_kategori=$id_kategori ORDER BY id_kategori DESC");
while ($user_data = mysqli_fetch_array($result)) {
   $nama_kategori = $user_data['nama_kategori'];
}
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
                  <a class="dropdown-item" href="kategori.php">Master Kategori</a>
                  <a class="dropdown-item" href="#">Other Master</a>
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
            <a class="dropdown-item" href="berita.php">Master Berita</a>
            <a class="dropdown-item" href="kategori.php">Master Kategori</a>
         </ol>
      </nav>
      <form name="update_user" method="post" action="edit-kategori.php">
         <div class="form-group">
            <label for="">Nama Kategori</label>
            <input type="text" name="nama_kategori" value="<?php echo $nama_kategori; ?>" class=" form-control">
         </div>
         <div class="row">
            <div class="col-md-6">
               <a href="kategori.php" class="btn btn-danger btn-sm btn-block">Cancel</a>
            </div>
            <div class="col-md-6">
               <input type="hidden" name="id_kategori" value=<?php echo $_GET['id_kategori']; ?>>
               <input class="btn btn-success btn-sm btn-block" type="submit" name="update" value="Update">
            </div>
         </div>
      </form>
   </div>
</body>

</html>