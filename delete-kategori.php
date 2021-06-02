<?php
include_once("koneksi.php");
$id_kategori = $_GET['id_kategori'];
$result = mysqli_query($db, "DELETE FROM mst_kategori WHERE id_kategori=$id_kategori");
header("Location:kategori.php");
