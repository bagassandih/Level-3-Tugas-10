<?php
//koneksi ke databse
$konek = mysqli_connect("localhost", "root", "", "arkademy");

function query($query){
	global $konek;
	$result = mysqli_query($konek, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $konek;
	//ambil data tiap elemen
	//htmlspecialchars agar fungsi html tidak dijalankan
	$nama_produk = htmlspecialchars($data["nama_produk"]);
	$keterangan = htmlspecialchars($data["keterangan"]);
	$harga = htmlspecialchars($data["harga"]);
	$jumlah = htmlspecialchars($data["jumlah"]);
	
	//query insert data
	$query = "INSERT INTO produk
				VALUES
				('', '$nama_produk ', '$keterangan', '$harga', '$jumlah')	
			";
	mysqli_query($konek,$query);
	
	return mysqli_affected_rows($konek);
	
}


function hapus($id){
	global $konek;
	mysqli_query($konek, "DELETE FROM produk where id = $id");
	return mysqli_affected_rows($konek);
	
}



function ubah($data){
	global $konek;
	//ambil data tiap elemen
	//htmlspecialchars agar fungsi html tidak dijalankan
	$id = $data["id"];
	$nama_produk = htmlspecialchars($data["nama_produk"]);
	$keterangan = htmlspecialchars($data["keterangan"]);
	$harga = htmlspecialchars($data["harga"]);
	$jumlah = htmlspecialchars($data["jumlah"]);
	
	//query update data
	$query = "UPDATE produk SET
				nama_produk = '$nama_produk',
				keterangan = '$keterangan',
				harga = '$harga',
				jumlah = '$jumlah'
			 WHERE id = $id
				
			";
	mysqli_query($konek,$query);
	
	return mysqli_affected_rows($konek);
	
}







?>