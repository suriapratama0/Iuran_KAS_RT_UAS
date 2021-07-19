<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Edit Data Iuran</title>
</head>
<body>
	<h2>Form Edit Data Iuran</h2>
	<p>
		<button type="button" onclick="window.location='<?php echo site_url('warga/index') ?>'">
			Kembali
		</button>
	</p>
	<p>
		<?= form_open('iuran/updatedata') ?>
		<table>
			<tr>
				<td>Keterangan :</td>
				<td>
					<input type="text" name="keterangan" maxlength="17"  value="<?= $keterangan; ?>">
				</td>
			</tr>
			<tr>
				<td>Tanggal :</td>
				<td>
					<input type="date" name="tanggal"  value="<?= $tanggal; ?>">
				</td>
			</tr>
			<tr>
				<td>Bulan :</td>
				<td>
					<input type="text" name="bulan" maxlength="17"  value="<?= $bulan; ?>">
				</td>
			</tr>
			<tr>
				<td>Tahun :</td>
				<td>
					<input type="text" name="tahun" maxlength="17"  value="<?= $tahun; ?>">
				</td>
			</tr>
			<tr>
				<td>Jumlah :</td>
				<td>
					<input type="text" name="jumlah" value="<?= $jumlah; ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Ubah Data">
				</td>
			</tr>	
		</table>
		<?= form_close(); ?>
	</p>
</body>
</html>