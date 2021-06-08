<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_berita";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$dbms) {
   die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
