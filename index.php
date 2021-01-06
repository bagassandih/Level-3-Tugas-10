<?php
require 'function.php';
$siswa = query("SELECT * FROM produk")

?>


<!DOCTYPE html>
<html>
<head>
<style>
.tengah {
	text-align:center;
}
</style>
<title>Administrator</title>
</head>
<body>

<h1> Daftar Produk </h1>
<a href="tambah.php">Tambah data produk</a>
</br>

<table border="1" cellpadding="10" cellspacing="5" >
	<tr>
		<th>No.</th>
		<th>Aksi</th>	
		<th>Nama Produk</th>
		<th>Keterangan</th>
		<th>Harga</th>
		<th>Jumlah</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach( $siswa as $row) : ?>
	<tr>
		<td class="tengah" ><?= $i; ?></td>
		<td><a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a> | 
		<a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm ('Ingin Hapus?')"> Hapus </a>
		</td>
		<td>	<?= $row['nama_produk']; ?>	</td>
		<td> 	<?= $row['keterangan']; ?>		</td>
		<td> Rp.<?= number_format($row['harga'],2,',','.'); ?> 	</td>
		<td class="tengah" >	<?= $row['jumlah']; ?>	</td>
		
	</tr>
	<?php $i++ ?>
	<?php endforeach; ?>
	

</body>
</html>