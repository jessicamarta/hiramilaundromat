<?php 
$koneksi = mysqli_connect("localhost:3307","root","","laundry");
if (mysqli_connect_errno()){
echo "Koneksi database gagal : " . mysqli_connect_error(); 
}
?> 