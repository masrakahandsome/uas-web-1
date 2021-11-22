<?php
include 'koneksi.php';
if(isset($_POST["submit"])){


$sql = "INSERT INTO `burung`(`nama`, `jenis`, `jk`, `pemilik`)
VALUES ('".$_POST["nama"]."','".$_POST["jenis"]."','".$_POST["jk"]."','".$_POST["pemilik"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('Data Pemilik Burung Berhasil Di Simpan')</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}


$conn->close();
}
?>
