<?php
include_once "config.php";
if(!empty($_POST['submit'])) {

    $unik = $_POST['unik'];
    $sql = mysqli_query($con, "SELECT * FROM keranjang WHERE kode = '$unik'");
    
    $data = [];

    while($r = mysqli_fetch_assoc($sql)) {
        $data = $r;
    }

    $result = $data;

}else{
    echo "DD";
}
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
    <form method="POST" action="">
        <input type="text" name="unik" placeholder="kode unik">
        <input type="submit" name="submit">
    </form>
    
    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <?php foreach($result as $keranjang): ?>
            
        <tr>
            <td><?= $result['detail_keranjang']; ?></td>
            <td></td>
            <td>Germany</td>
        </tr>
    </table>
        <?php endforeach; ?>
</body>
</html>