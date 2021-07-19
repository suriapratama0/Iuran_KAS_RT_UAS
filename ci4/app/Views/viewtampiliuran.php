<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Iuran Warga</title>
	<style>
		table{
			width: 100%;
			border-collapse: collapse;
		}
		td{
			text-align: center;
		}
		button{
			margin: 10px 10px;
		}
		thead{
			background-color: lightblue;
			height: 50px;
			border-color: black;
		}
		table{
			background-color: lightgray;
			border-color: black;
		}
		button{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<h2>Data Iuran Warga</h2>
	<button type="button" onclick="window.location='<?php echo site_url('warga/index') ?>'">
		Kembali
	</button>
	<button type="button" onclick="window.location='<?php echo site_url('Iuran/formtambah') ?>'">
		Tambah Data Iuran
	</button>
	<br>
	<br>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Nik</th>
				<th>Keterangan</th>
				<th>Tanggal</th>
				<th>Bulan</th>
				<th>Tahun</th>
				<th>Jumlah</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$nomor = 0;
			foreach ($tampildata as $row):
				$nomor++;
				?>
				<tr>
					<th><?= $nomor; ?></th>
					<td><?= $row->nama ?></td>
					<td><?= $row->nik ?></td>
					<td><?= $row->keterangan ?></td>
					<td><?= $row->tanggal ?></td>
					<td><?= $row->bulan ?></td>
					<td><?= $row->tahun ?></td>
					<td><?= $row->jumlah ?></td>
					<td>
						<button type="button" onclick="hapus('<?= $row->warga_id ?>')">
							Hapus
						</button>
						
					</td>
				</tr>
				<?php  
			endforeach;
			?>
		</tbody>
	</table>
	<script>
		function hapus(warga_id){
			pesan= confirm('Yakin hapus data iuran warga ?');

			if (pesan) {
				window.location.href=("<?= site_url('iuran/hapus/')  ?>") + warga_id;
			}else return false;
		}
	</script>
</body>
</html>