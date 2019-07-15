<?php 
	include 'lib/library.php';
	$idAset = $_GET['id_aset'];
	$sql = "DELETE from aset where id_aset='$idAset'";
	$mysqli->query($sql) or die($mysqli->error);

	header('location: index.php');
 ?>