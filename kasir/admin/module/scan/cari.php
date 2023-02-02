<?php
include "../../../config.php";
$koneksi=mysqli_connect($host,$user,$pass,$dbname) or die();
$kode_barcode=trim($_POST['input_scanner']);
$cari=mysqli_query($koneksi,"select * from keranjang where kode='$kode_barcode' ");
$jml=mysqli_num_rows($cari);
if($jml>0){
   $data=mysqli_fetch_array($cari);
   echo "<center><p><b>Hasil Pencarian Barang</b><br> Kode Barcode : $data[kode]</p>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<table class="table table-bordered" id="example1">
<thead>
<tr style="background:#DFF0D8;color:#333;">
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">jumlah</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $total = 0;
   
  foreach(json_decode($data['detail_keranjang']) as $detail => $value):
   
   ?> 
   <?php
   $subtotal = $value->harga_jual*$value->jumlah; 
    ?>
    <tr>
      <th scope="row"><?= $value->id_barang ?></th>
      <td><?= $value->nama_barang ?></td>
      <td>Rp.<?php echo number_format( $value->harga_jual) ?></td>
      <td><?= $value->jumlah ?></td>
      <td>Rp.<?php echo number_format( $subtotal)?></td>
    </tr>
    <?php $total+=$subtotal;?>
<?php endforeach; ?>

<tr>
   <td colspan="3"></td>
   <th scope="row"><h5><b>Total Harga<b></h5></td>
   <td><h5><b>Rp.<?php echo number_format( $total)?></b></h5></td>
</tr>
    </tbody>
</table>
</body>
<?php } 
else{
   echo "<p class='error'>Data tidak ditemukan</p>";
 } ?>
</html>