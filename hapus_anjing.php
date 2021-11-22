
<?php
	include "koneksi.php";
 
	$kd = $_GET["id"];
 
	// query sql
	$sql = "DELETE FROM anjing WHERE nama='$kd'";
	$query = mysqli_query($conn, $sql) or die (mysqli_error());
 
	if($query){
		header('location:anjing.php');
	} else {
		echo "Error :".$sql."<br>".mysqli_error($db);
	}
 
	mysqli_close($db);
?>