<?php
 include 'functions.php'; 
$upload = query("SELECT * FROM upload");

if(isset($_POST["cari"])) {
    $upload = cari($_POST["keyword"]);

    }
?>
<html>
    <head>
        <title>Upload Gambar</title>
        </head>
        <body>
            <center>
            <h3>Silahkan Upload Gambar  </h3>
            <hr/>
            <a href="admin/module/upload/tambah.php">Upload</a>
            <br><br>
<form action="" method="post">
            <input type="text" name="keyword" size="40" autofocus plcaeholder="masukan keyword pencarian" autocomplete="off">
            <button type="submit" name="cari">Search</button>
</form> 
        <table border="1">
            <tr>
                <th>id</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Gambar</th>
                <th>aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php
            foreach( $upload as $row) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row["nama"];?></td>
                    <td><?= $row["harga"];?></td>
                    <td><img src="admin/module/upload/img/<?= $row["gambar"]; ?>" width="100"></td>
                    <td>
                        <a href = "edit.php?id=<?= $row["id"]; ?>">edit | </a>
                        <a href = "hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                    </td>
                    </tr>
            <?php endforeach; ?>            
            </table>
        </body>
</html>