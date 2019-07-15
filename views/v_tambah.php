<!DOCTYPE html>
<html>
<head>
	<title>Form Input Aset</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/main.css?v=1.0">
<fieldset> 
<?php 
	$action = 'tambah.php';
	if (empty($aset)) {
		$action = 'tambah.php';
		echo "<legend><h1>Form Tambah Data</h1></legend>";
	}else{
		$action = 'update.php';
		echo "<legend><h1>Form Edit Data</h1></legend>";
	}
 ?>
	<form action="<?= $action  ?>" method="POST">
	<table>
		<tr>
			<td>ID Aset</td>
			<?php 
				if (empty($aset)) {
					?>
					<td><input type="text" name="id_aset" value="<?= @$aset['id_aset']  ?>"></td>
			<?php
				}else{
					?>
					<td><input type="text" name="id_aset" value="<?= @$aset['id_aset']  ?>" readonly></td>
				<?php
				}
			 ?>
		</tr>
		<tr>
			<td>Nama Aset</td>
			<td><input type="text" name="nama_aset" value="<?= @$aset['nama_aset']  ?>"></td>
		</tr>
		<tr>
			<td>Warna</td>
			<td>
				<input type="text" name="warna" value="<?= @$aset['warna']?>">
			</td>
		</tr>
		<tr>
			<td>Banyaknya</td>
			<td>
				<input type="text" name="banyaknya" value="<?= @$aset['banyaknya']?>">
			</td>
		</tr>
		<tr>
			<td colspan="2"><hr></td>
		</tr>
		<tr>
			<td>Status Kelayakan</td>
			<td><select name="status_kelayakan">
					<option value="Layak"<?= @$aset['status_kelayakan'] == 'Layak' ? 'selected' : ''  ?>>Layak</option>
					<option value="Tidak Layak"<?= @$aset['status_kelayakan'] == 'Tidak Layak' ? 'selected' : ''  ?>>Tidak Layak</option>
				</select></td>
		</tr>
		<tr>
			<td>Tempat Penyimpanan</td>
			<td><input type="text" name="tempat_penyimpanan" value="<?= @$aset['tempat_penyimpanan']  ?>"></td>
		</tr>
		<tr>
			<td colspan="2"><hr></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="SIMPAN">
			</td>
		</tr>
	</table>
</form>
</fieldset>
</html>