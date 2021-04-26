<?php 

$DBNAME = "ukk_lsp";
$DBHOST = "localhost";
$DBUSER = "root";
$DBPASS = "";

	$connect = mysqli_connect($DBHOST, $DBUSER, $DBPASS, $DBNAME);

	if ($connect) {
		// echo " terhubung";
	}else{
		die(mysqli_error($connect));
	}


?>