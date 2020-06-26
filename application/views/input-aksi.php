<?php
include 'koneksi.php';
$no = $_POST['no'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$jabatan = $_POST['jabatan'];
 
mysql_query("INSERT INTO anggota VALUES('$no','$nama','$email','$jabatan')");
 
//header("location:index.php?pesan=input");
?>