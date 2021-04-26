<?php 
	include "koneksi.php";
	//menyimpan data kedalam variabel
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];
	$pesan=$_POST['pesan'];
	$query="INSERT INTO mahasiswa1 (NAMA,JKEL,EMAIL,ALAMAT,KOTA,PESAN) VALUES ('$nama','$jenis_kelamin','$email','$alamat','$kota','$pesan')";
	mysqli_query($koneksi,$query);
	header("location:index.php");
?>