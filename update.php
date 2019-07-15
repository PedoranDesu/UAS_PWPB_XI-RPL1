<?php 
	include 'lib/library.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$idAset = $_POST['id_aset'];
		$namaAset = $_POST['nama_aset'];
		$warna = $_POST['warna'];
		$banyaknya = $_POST['banyaknya'];
		$statusLayak = $_POST['status_kelayakan'];
		$penyimpanan = $_POST['tempat_penyimpanan'];

		$sql = "UPDATE aset set id_aset='$idAset', nama_aset='$namaAset', warna='$warna', banyaknya='$banyaknya', status_kelayakan='$statusLayak', tempat_penyimpanan='$penyimpanan' where id_aset='$idAset'";

		$mysqli->query($sql) or die($mysqli->error);

		header('location:index.php');
	}

	$idAset = $_GET['id_aset'];

	if (empty($idAset)) header('location: index.php');

	$sql = "select * from aset where id_aset = $idAset";
	$query = $mysqli->query($sql);
	$aset = $query->fetch_array();

	if (empty($aset)) header('location: index.php');

	include 'views/v_tambah.php';
 ?>