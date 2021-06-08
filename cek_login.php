<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['usernamesss'];
$password = $_POST['passworddd'];

// menyeleksi data user dengan username dan password yang sesuai
$data = mysqli_query($myqli_connect, "select * from user where username='$usernames' and password='$passwords'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
   $_SESSION['username'] = $username;
   $_SESSION['status'] = "logins";
   header("location:berita.php");
} else {
   header("location:login.php?pesan=gagal");
}
