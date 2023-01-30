<?php 
 include '../config.php';
if(isset($_POST['submit'])) {
	$id = $_POST['idsession'];
	$quantity = $_POST['quantity'];

    $query = mysqli_query($con, "SELECT * FROM barang WHERE id = $id");
    $hasil = mysqli_fetch_object($query);

	$_SESSION["cart"][$id]['jumlah'] = $quantity;

    echo "<script>alert('jumlah telah di update');</script>";
    echo "<script>location='../keranjang.php';</script>";
}else{
    echo "<script>alert('jumlah gagal di update');</script>";
    echo "<script>location='../keranjang.php';</script>";
}
?>