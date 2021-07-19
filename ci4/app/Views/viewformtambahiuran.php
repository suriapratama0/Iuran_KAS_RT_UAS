<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Tambah Iuran</title>
</head>
<body>
	<h2>Form Tambah Iuran</h2>
	<p>
		<button type="button" onclick="window.location='<?php echo site_url('Iuran') ?>'">
			Kembali
		</button>
	</p>
	<p>
		<?= form_open('iuran/simpandata') ?>
		<table>
			<tr>
				<td>ID Warga :</td>
				<td>
					<input type="text" name="warga_id">
				</td>
			</tr>
			<tr>
				<td>Keterangan :</td>
				<td>
					<input type="text" name="keterangan" maxlength="17" autofocus>
				</td>
			</tr>
			<tr>
				<td>Tanggal :</td>
				<td>
					<input type="date" name="tanggal" size="50">
				</td>
			</tr>
			<tr>
				<td>Bulan :</td>
				<td>
					<input type="text" name="bulan" maxlength="17" autofocus>
				</td>
			</tr>
			<tr>
				<td>Tahun :</td>
				<td>
					<input name="tahun" type="text"></input>
				</td>
			</tr>
			<tr>
				<td>Jumlah :</td>
				<td>
					<input type="text" name="jumlah">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Simpan Data">
				</td>
			</tr>	
		</table>
		<?= form_close(); ?>
	</p>
</body>
</html>