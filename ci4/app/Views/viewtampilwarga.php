<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Warga</title>
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
	<h2>Data Warga</h2>

	<p>
		<button type="button" onclick="window.location='<?php echo site_url('warga/formtambah') ?>'">
			Tambah Data Warga
		</button>
		<button type="button" onclick="window.location='<?php echo site_url('warga/iuran') ?>'">
			Daftar Kas Warga
		</button>
	</p>
	<p>
		Peringatan! Bila ingin Menghapus data warga, anda harus menghapus data kas warga dahulu!!!
	</p>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>ID</th>
				<th>Nik</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>No Rumah</th>
				<th>Status</th>
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
					<th><?= $row->id ?></th>
					<td><?= $row->nik ?></td>
					<td><?= $row->nama ?></td>
					<td><?= $row->kelamin ?></td>
					<td><?= $row->alamat ?></td>
					<td><?= $row->no_rumah ?></td>
					<td><?= $row->status ?></td>
					<td>
						<button type="button" onclick="hapus('<?= $row->id ?>')">
							Hapus
						</button>
						<button type="button" onclick="window.location='<?php echo site_url('warga/formedit/'.$row->nik) ?>'">
							Ubah
						</button>
					</td>
				</tr>

				<?php  
			endforeach;
			?>
		</tbody>
	</table>
	<script>
		function hapus(id){
			pesan= confirm('Yakin hapus data warga ?');

			if (pesan) {
				window.location.href=("<?= site_url('warga/hapus/')  ?>") + id;
			}else return false;
		}
	</script>
</body>
</html>
