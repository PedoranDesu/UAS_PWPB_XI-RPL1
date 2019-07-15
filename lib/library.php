<?php 
	session_start();

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = '02_alvarodwi_uaspwpb';

	$mysqli = mysqli_connect($host, $user, $pass, $db)
	or die('Tidak Dapat Koneksi Ke Database');
 ?>