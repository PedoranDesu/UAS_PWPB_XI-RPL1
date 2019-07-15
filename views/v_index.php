<!DOCTYPE html>
<html>
<head>
	<title>Data Inventaris Aset</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/main.css?v=1.1">
<body>
<table width="100%">
	<tr>
		<td width="15%"><a href="tambah.php">Tambah Data</a></td>
		<td align="center"><h1>DATA INVENTARIS ASET</h1></td>
		<td width="20%"><b>Cari Data</b>
			<form method="post" action="search.php">
				<input class="cari" type="text" name="term" placeholder="Ketik lalu ENTER...">
			</form>
		</td>
	</tr>
</table>



<hr>
	<table border="1">
		<thead>
			<tr>
				<th>#</th>
				<th>ID Aset</th>
				<th width="400px">Nama Aset</th>
				<th>Warna</th>
				<th>Banyaknya</th>
				<th>Status Kelayakan</th>
				<th>Tempat Penyimpanan</th>
				<th colspan="2">Aksi</th>
			</tr>
		</thead>

		<tbody>
			<?php 
				$i = 1;
				while($aset = $listAset->fetch_array()){
			?>
			<tr>
				<td><?= $i++ ?></td>
				<td><?= $aset['id_aset'] ?></td>
				<td><?= $aset['nama_aset'] ?></td>
				<td><?= $aset['warna'] ?></td>
				<td><?= $aset['banyaknya'] ?></td>
				<td><?= $aset['status_kelayakan'] ?></td>
				<td><?= $aset['tempat_penyimpanan'] ?></td>
				<td><a href="update.php?id_aset=<?= $aset['id_aset']?>">Edit</a></td>
				<td><a href="hapus.php?id_aset=<?= $aset['id_aset']?>">Hapus</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>