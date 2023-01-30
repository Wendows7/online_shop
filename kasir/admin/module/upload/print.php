<?php
include 'functions.php';
$id = $_GET["id"];
$print = query("SELECT * FROM barang WHERE id = $id")[0];
?>
<tr><img src="temp/kode<?= $print["id"]?>.png"><?= $print["id"]?></tr>

                          
                        <script>
		window.print();
	</script>