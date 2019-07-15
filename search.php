<?php 
	include 'lib/library.php';

	$search = $_POST['term'];
	$sql = "SELECT * from aset where id_aset like '%$search%' or nama_aset like '%$search%' or status_kelayakan like '%$search%' or warna like '%$search%' or tempat_penyimpanan like '%$search%'";
	$listAset = $mysqli->query($sql);

	include 'views/v_search.php';
 ?>