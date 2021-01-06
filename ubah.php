<?php
require 'function.php';

//ambil data dari url
$id = $_GET["id"];

//query data bedasarkan id
$data_produk = query( "SELECT * FROM produk WHERE id = $id")[0];


//cek apakah tombol submit sudah di tekan atau belum
if ( isset($_POST["submit"]) ){
	
	if(ubah($_POST) > 0 ){
			echo "<script>
			alert('Data Behasil Dirubah');
			document.location.href='index.php';
			</script>";
	}else{
		echo "<script>
			alert('Data Gagal Dirubah');
			document.location.href='index.php';
			</script>";
	}
	
	
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Ubah data produk</title>
</head>
<body>
	<h1> Ubah Data Produk</h1>
	<!--Dikosongkan action agar terkrim di page itu sendiri--->
	<form action="" method="POST">
		<input type="hidden" name="id" value= "<?= $data_produk["id"] ?>"
		<ul>
			<li>
			<label for="nama_produk">Nama Produk: </label>
			<input type="text" name="nama_produk" required value="<?= $data_produk["nama_produk"] ?>"/>
			</li>
			
			<li>
			<label for="keterangan">Keterangan: </label>
			<input type="text" name="keterangan" required value= "<?= $data_produk["keterangan"] ?>"/>
			</li>
			
			<li>
			<label for="haraga">Harga: </label>
			<input type="text" name="harga" required value = "<?= $data_produk["harga"] ?>"/>
			</li>
			
			<li>
			<label for="jumlah">Jumlah: </label>
			<input type="text" name="jumlah" required value="<?= $data_produk["jumlah"] ?>"//>
			</li>
			
			<li>
			<button type="submit" name="submit">Ubah</button>
			</li>
			
		</ul>
	</form>


</body>
</html>