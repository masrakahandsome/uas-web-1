<?php
	include "koneksi.php";
	$nama = $_POST['nama'];
	$jenis=$_POST['jenis'];
	$jk=$_POST['jk'];
	$pemilik=$_POST['pemilik'];

	
	$sql2 = "UPDATE burung SET nama = '$_POST[nama]', jenis = '$_POST[jenis]',jk = '$_POST[jk]',pemilik = '$_POST[pemilik]' WHERE nama = '$nama';";
	$query = mysqli_query($conn,$sql2);
	if($query)
	{
	header('location:burung.php');
	}
	else
	{
	echo "Edit Pemilik Burung gagal";
	}
?>