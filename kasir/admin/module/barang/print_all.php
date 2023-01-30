

<?php
include 'functions.php';
$id = $_GET["id"];
$barang = query("SELECT * FROM barang ORDER BY id ASC");
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="row">
     <?php foreach( $barang as $print) : ?>
	<div class="col-md-2">
          <img src="temp/kode<?= $print["id"]?>.png"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?= $print["id_barang"] ;?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $print["nama_barang"] ;?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $print["harga_jual"]?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $print["merk"]?>
	</div>
     <?php endforeach; ?> 
</div>
		
                          
                        <script>
		window.print();
	</script>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
