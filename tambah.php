<?php 
	include 'lib/library.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$idAset = $_POST['id_aset'];
		$namaAset = $_POST['nama_aset'];
		$warna = $_POST['warna'];
		$banyaknya = $_POST['banyaknya'];
		$statusLayak = $_POST['status_kelayakan'];
		$penyimpanan = $_POST['tempat_penyimpanan'];

		$sql = "INSERT INTO aset(id_aset,nama_aset,warna,banyaknya,status_kelayakan,tempat_penyimpanan) values
			('$idAset','$namaAset','$warna','$banyaknya','$statusLayak','$penyimpanan')";

		$mysqli->query($sql) or die($mysqli->error);

		header('location: index.php');
	}

	include 'views/v_tambah.php';
 ?>