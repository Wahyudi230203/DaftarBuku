<?php 
include_once "../connection/connect.php";

$judul 		=$_POST['judul'];
$pengarang 	=$_POST['pengarang'];
$penerbit 	=$_POST['penerbit'];
$lokasi_img =$_FILES['gambar']['tmp_name'];
$nama_img 	=$_FILES['gambar']['name'];

$tglUpload 	= date("Ymd");
$namaFix 	=$tglUpload."-".$nama_img;
$folder 	= "../../asset/image/$namaFix";

if (move_uploaded_file($lokasi_img, "$folder")) {
	$query ="INSERT INTO buku (judul, pengarang, penerbit, gambar, created_at) VALUES ('$judul', '$pengarang', '$penerbit', '$namaFix', '$tglUpload')";
	mysqli_query($connect, $query);
	header("location:../../index.php");
}
?>