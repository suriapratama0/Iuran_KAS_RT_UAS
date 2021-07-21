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
		.hapus button{
			margin: 10px 10px;
			border: 1px solid black;
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
		footer{
			width: 100%;
			height: 40px;
			display: flex;
			justify-content: center;
			align-items: center;
			background: #123;
			color: #ffffff;
			font-size: 1em;
			text-transform: uppercase;
			z-index: 1;
			bottom: 0px;	
		}
		ul{
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #123;
		}
		li{
			float: left;
		}
		li button {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-family: "Times New Roman", Times, serif;
			font-size: 20px;
		}
		li button:hover {
			background-color: lightblue;
		}
		.header{
			background-color: #123;
			border-color: lightgrey;
		}
	</style>
</head>
<body>
	<h2>Data Iuran Warga</h2>
	<nav>
		<ul>
		<li><button class="header" type="button" onclick="window.location='<?php echo site_url('warga/index') ?>'">
			Kembali
		</button></li>
		<li><button class="header" type="button" onclick="window.location='<?php echo site_url('Iuran/formtambah') ?>'">
			Tambah Data Iuran
		</button></li>
		<ul>
	</nav>
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
		<tbody class="hapus">
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
<footer>         
		<p>&copy; 2021 - Suria Pratama - 311910113 - TI.19.A.1 - Universita Pelita Bangsa.</p>     
</footer>
