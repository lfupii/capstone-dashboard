<?php

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'bangkit01';

	$conn = mysqli_connect($host, $user, $pass, $db);
	
	if($conn){
		echo "Koneksi Berhasil";
	}
	
?>