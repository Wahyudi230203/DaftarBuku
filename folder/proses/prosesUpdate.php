<?php 
include_once "../connection/connect.php";

$id_buku 	=$_POST['id_buku'];
$judul 		=$_POST['judul'];
$pengarang 	=$_POST['pengarang'];
$penerbit 	=$_POST['penerbit'];
$lokasi_img =$_FILES['gambar']['tmp_name'];
$nama_img 	=$_FILES['gambar']['name'];

$tglUpload 	= date("Ymd");
$namaFix 	=$tglUpload."-".$nama_img;
$folder 	= "../../asset/image/$namaFix";

if (move_uploaded_file($lokasi_img, "$folder")) {
	$query ="UPDATE buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', gambar='$namaFix' WHERE id_buku='$id_buku'";
	mysqli_query($connect, $query);
	header("location:../../index.php");
}
?>