<?php 
include "../config.php";

$id = $_GET["id"];
$query = mysqli_query($con, "SELECT * FROM barang WHERE id = $id");
$hasil = mysqli_fetch_object($query);

$_SESSION["cart"][$id] = [
	
	"id_barang"	=> $hasil->id_barang,
	"nama_barang"	=> $hasil->nama_barang,
	"harga_jual"	=> $hasil->harga_jual,
	"is_diskon"	=> $hasil->is_diskon,
	"diskon"	=> $hasil->diskon,
	"gambar" => $hasil->gambar,
	"jumlah" => 1
];

header("location:../beli.php");
 ?>
 <!-- + random_int(1, 1000) -->