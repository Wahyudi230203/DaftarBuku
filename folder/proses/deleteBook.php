<?php
include_once "../connection/connect.php"; 

$idBook 	=$_GET['id'];

if (!empty($idBook)) {
	
	$queryDelete="DELETE FROM buku WHERE id_buku='$idBook'";
	$ExecDelete =mysqli_query($connect, $queryDelete);
	header("location:../../index.php");

}else{
	echo "<script>alert('ID BUKU TIDAK ADA');window.location='../../index.php';</script>";
}

?>