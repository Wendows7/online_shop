<?php
include "../config.php";

$id = $_GET["id"];
$query = mysqli_query($con, "SELECT * FROM barang WHERE id = $id");
$hasil = mysqli_fetch_object($query);

if(isset($_SESSION["cart"][$id]))
{
	// $_SESSION["cart"][$id]+=1;
	$_SESSION["cart"][$id]['jumlah']+=1;
}
else
{
	if($hasil->is_diskon == true) {
		$hargaDiskon = $hasil->harga_jual * $hasil->diskon / 100;
		$harga = $hasil->harga_jual - $hargaDiskon;
	}else{
		$harga = $hasil->harga_jual;
	}

	$_SESSION["cart"][$id] = [
		"id_barang" => $hasil->id_barang,
		"nama_barang" => $hasil->nama_barang,
		"harga_jual"	=> $harga,
		"merk"	=> $hasil->merk,
		"gambar" => $hasil->gambar,
		"jumlah" => 1,
	];
}

echo "<script>alert('produk telah masuk ke keranjang');</script>";
echo "<script>location='../keranjang.php';</script>";

// $_SESSION["cart"][$id] = [
// 	"id_barang" => $hasil->id_barang,
// 	"nama_barang" => $hasil->nama_barang,
// 	"harga_jual"	=> $hasil->harga_jual,
// 	"merk"	=> $hasil->merk,
// 	"gambar" => $hasil->gambar,
// 	"jumlah" => 1,
// ];
// header("location:../keranjang.php");
// 