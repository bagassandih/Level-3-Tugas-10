<?php
require 'function.php';
//cek apakah tombol submit sudah di tekan atau belum
if ( isset($_POST["submit"]) ){
	
	if(tambah($_POST) > 0 ){
			echo "<script>
			alert('Data Behasil Ditambahkan');
			document.location.href='index.php';
			</script>";
	}else{
		echo "<script>
			alert('Data Gagal Ditambahkan');
			document.location.href='index.php';
			</script>";
	}
	
	
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah data siswa</title>
</head>
<body>
	<h1> Tambah Data Siswa</h1>
	<!--Dikosongkan action agar terkrim di page itu sendiri--->
	<form action="" method="POST">
		<ul>
			<li>
			<label for="nama_produk">Nama Produk: </label>
			<input type="text" name="nama_produk" required/>
			</li>
			
			<li>
			<label for="keterangan">Keterangan: </label>
			<input type="text" name="keterangan" required/>
			</li>
			
			<li>
			<label for="harga">Harga: </label>
			<input type="text" name="harga" required/>
			</li>
			
			<li>
			<label for="jumlah">Jumlah: </label>
			<input type="text" name="jumlah" required//>
			</li>
			
			<li>
			<button type="submit" name="submit">Tambahkan</button>
			</li>
			
		</ul>
	</form>


</body>
</html>