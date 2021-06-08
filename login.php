<!DOCTYPE html>
<html>

<head>
   <title>Login</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body style="background-color:whitesmoke;">
   <div class="container">

      <br />
      <!-- cek pesan notifikasi -->
      <?php
      if (isset($_GET['pesan'])) {
         if ($_GET['pesan'] == "gagal") {
            echo '<div class="alert alert-danger" role="alert">
            <i class="fas fa fa-sign-out"></i> Login gagal! username dan password salah!
          </div>';
         } else if ($_GET['pesan'] == "logout") {
            echo '<div class="alert alert-danger" role="alert">
            <i class="fas fa fa-sign-out"></i> Anda Berhasil Keluar!
          </div>';
         } else if ($_GET['pesan'] == "belum_login") {
            header("location:error_page.php");
         }
      }
      ?>
      <br />
      <br />
      <div class="position-relative">
         <div class="col-md-3"></div>
         <div class="card shadow-lg p-3 mb-5 bg-body rounded col-md-6">
            <div class="card-header">
               <h2 class="text-center"><b> HALAMAN LOGIN </b></h2>
            </div>
            <div class="card-body">
               <form method="post" action="cek_login.php">
                  <div class="form-group">
                     <label for="">Username <i class="fas fa fa-user"></i></label>
                     <input type="text" name="username" class="form-control" placeholder="Masukkan username">
                  </div>
                  <div class="form-group">
                     <label for="">Password <i class="fas fa fa-key"></i></label>
                     <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                  </div>
                  <input type="submit" class="btn btn-primary btn-block" value="LOGIN">
                  <a href="home.php" class="btn btn-danger btn-block">Cancel</a>
               </form>
               <br>
               <h4 class="text-center text-primary" for="">Erlangga Pramuja : 181011400336</h4>
            </div>
         </div>
      </div>
   </div>
</body>

</html>