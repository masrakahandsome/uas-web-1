
<?php
	include "koneksi.php";
 
	$kd = $_GET["id"];
 
	// query sql
	$sql = "DELETE FROM kucing WHERE nama='$kd'";
	$query = mysqli_query($conn, $sql) or die (mysqli_error());
 
	if($query){
		header('location:kucing.php');
	} else {
		echo "Error :".$sql."<br>".mysqli_error($db);
	}
 
	mysqli_close($db);
?>