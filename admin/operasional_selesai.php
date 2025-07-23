<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "UPDATE operasional SET status=1 WHERE id='$id'");
header("location:catatan_operasional.php");
?>
