<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Tambah Warga</title>
</head>
<body>
	<h2>Form Tambah Warga</h2>
	<p>
		<button type="button" onclick="window.location='<?php echo site_url('warga/index') ?>'">
			Kembali
		</button>
	</p>
	<p>
		<?= form_open('warga/simpandata') ?>
		<table>
			<tr>
				<td>ID :</td>
				<td>
					<input type="text" name="id" maxlength="17" autofocus>
				</td>
			</tr>
			<tr>
				<td>Nik :</td>
				<td>
					<input type="text" name="nik" maxlength="17" autofocus>
				</td>
			</tr>
			<tr>
				<td>Nama :</td>
				<td>
					<input type="text" name="nama" size="50">
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin :</td>
				<td>
					<input type="radio" name="kelamin" value="L"> Laki-Laki
					<input type="radio" name="kelamin" value="P"> Perempuan
				</td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td>
					<textarea name="alamat" cols="50" rows="5"></textarea>
				</td>
			</tr>
			<tr>
				<td>No rumah :</td>
				<td>
					<input type="text" name="no_rumah">
				</td>
			</tr>
			<tr>
				<td>Status :</td>
				<td>
					<input type="text" name="status">
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