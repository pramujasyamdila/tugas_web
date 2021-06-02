<?php
include_once("koneksi.php");
$id_berita = $_GET['id_berita'];
$result = mysqli_query($db, "DELETE FROM trx_berita WHERE id_berita=$id_berita");
header("Location:berita.php");
