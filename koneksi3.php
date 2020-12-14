<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "datapembeli";
	$koneksi = mysqli_connect($host,$user,$pass,$dbname);

	if(!$koneksi) {
		die("Koneksi dengan database gagal: ".mysqli_connect_error());
	}
	
?>