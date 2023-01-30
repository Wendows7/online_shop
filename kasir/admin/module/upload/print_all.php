<?php
 include 'functions.php'; 
$upload = query("SELECT * FROM upload ORDER BY id DESC");
      
?>
       <?php
            foreach( $upload as $row) : ?>
		
                        <tr><img src="temp/kode<?= $row["id"]?>.png"><?= $row["id"]?></tr>
                        
                        <?php endforeach; ?> 
                  
                          
                        <script>
		window.print();
	</script>