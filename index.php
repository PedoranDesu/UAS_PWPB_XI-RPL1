<?php 
	include 'lib/library.php';

	$sql = 'SELECT * from aset';
	$listAset = $mysqli->query($sql);

	include 'views/v_index.php';
 ?>