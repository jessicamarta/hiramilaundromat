<?php 
include '../koneksi.php';
$keperluan = $_POST['keperluan'];
mysqli_query($koneksi, "INSERT INTO operasional (keperluan, status) VALUES ('$keperluan', 0)");
header("location:catatan_operasional.php");
?>
