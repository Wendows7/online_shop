      <?php
 include 'functions.php'; 
$barang = query("SELECT * FROM barang ORDER BY id DESC");


if(isset($_POST["cari"])) {
    $upload = cari($_POST["keyword"]);

    }  
      
?>
<style>table {
  border-collapse:separate; 
  border-spacing: 0 1em;
}</style>
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
                  <h3>Silahkan Upload Gambar Dan Deskripsi Yang Anda Inginkan  </h3>
            <hr/>
            <form action="admin/module/upload/tambah.php" method="post" enctype="multipart/form-data">
        <table>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td>:</td>
            <td><input type="text" name="harga" ></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="file" name="gambar"  ></td>
        </tr>
        <tr>
            <td>Deskripsi Barang </td>
            <td>:</td>
            <td ><textarea type="text" name="deskripsi" rows="6" cols="130" >
</textarea>
            </td>
        </tr>
        <tr>
            <td><button type="submit" name="submit" id="tombol-simpan" class="btn btn-primary"><i class="fa fa-plus"></i> Upload </button></td>
    </table>
</form>

						<br/>
						<table class="table table-bordered" id="example1">
							<thead>
								<tr style="background:#DFF0D8;color:#333;">
                                <th>id</th>
                                <th>Nama Barang</th>
                                <th>Harga Barang</th>
                                <th>Gambar</th>
                                <th>QR Code</th>
                                <th>aksi</th>
								</tr>
							</thead>
							<tbody>
							<?php $i = 1; 
                             ?>
            <?php
            foreach( $barang as $row) : ?>
           
								<tr>
                                <td><?= $i++;
                                 $penyimpanan = "admin/module/upload/temp/";
                                 if (!file_exists($penyimpanan))
                              mkdir($penyimpanan);
                                $kode = "keranjang/tambah.php?id=".$row["id"]."";
                                require_once('assets/phpqrcode/qrlib.php');
                                QRcode::png("$kode",$penyimpanan."/kode".$row["id"].".png","H", 5,5);     
                                ?></td>
                    <td><?= $row["nama_barang"];?></td>
                    <td><?= $row["harga_jual"];?></td>
                    <td><img src="admin/module/upload/img/<?= $row["gambar"]; ?>" width="100"></td>
                    <td><center>
                      <img src="admin/module/upload/temp/kode<?= $row["id"]?>.png" width="100" alt=""><br><a href= "admin/module/upload/print.php?id=<?=$row['id']; ?>" target="_blank"><button class="btn btn-info">Print</button></a><br><a href= "admin/module/upload/print_all.php?id=<?=$row['id']; ?>" target="_blank"><button class="btn btn-success"> Print All</button></a></center>
                    </td>
                    <td>
                          <a href = "admin/module/upload/edit.php?id=<?= $row["id"]; ?>"><button class="btn btn-warning">Edit</button></a> 
                        <a href = "admin/module/upload/hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"><button class="btn btn-danger">Hapus</button></a>
                    </td>
                    </tr>
                   
                    <?php endforeach; ?>      
							</tbody>
						</table>
						<div class="clearfix" style="padding-top:16%;"></div>
				  </div>
              </div>
          </section>
      </section>
	
