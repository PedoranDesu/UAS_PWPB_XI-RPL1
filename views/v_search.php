<!DOCTYPE html>
<html>
<head>
	<title>Hasil Pencarian</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/main.css?v=1.0">
<body>
<h1>Data Yang Relevan</h1>
<table width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<p>
				Dari Hasil Pencarian Anda : 
				<input type="text" value="<?= strtoupper($search) ?>" readonly>
			</p>
		</td>
		<td width="30%"><a href="index.php">Kembali Ke Index</a></td>
	</tr>
</table>
<hr>
	<table border="1">
		<thead>
			<tr>
				<th>#</th>
				<th>ID Aset</th>
				<th>Nama Aset</th>
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
	<p>P.S. Jika Anda Memencet Tombol Aksi, Otomatis Kembali Ke Index...</p>
</body>
</html>