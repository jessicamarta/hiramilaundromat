<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM operasional WHERE id='$id'");
header("location:catatan_operasional.php");
?>
