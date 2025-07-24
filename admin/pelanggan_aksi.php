<?php
include '../koneksi.php';
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
mysqli_query($koneksi,"insert into pelanggan values('','$nama','$hp','$alamat')");
header("location:pelanggan.php");
?>

<?php
include '../koneksi.php';
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$query = "insert into pelanggan (pelanggan_nama, pelanggan_hp, pelanggan_alamat) values ('$nama','$hp','$alamat')";

if (!mysqli_query($koneksi, $query)) {
    die("Query error: " . mysqli_error($koneksi));
}

header("location:pelanggan.php");
?>