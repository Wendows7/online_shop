 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
<?php 
	$id = $_GET['barang'];
	$hasil = $lihat -> barang_edit($id);
?>
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
					  	<a href="index.php?page=barang"><button class="btn btn-primary"><i class="fa fa-angle-left"></i> Balik </button></a>
						<h3>Details Barang</h3>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Edit Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus Data Berhasil !</p>
						</div>
						<?php }?>
						<table class="table table-striped">
							<form action="fungsi/edit/edit.php?barang=edit" method="POST" enctype="multipart/form-data">
							
						

								<tr>
									<td>ID Barang</td>
									<td><input type="text" readonly="readonly" class="form-control" value="<?php echo $hasil['id_barang'];?>" name="id"></td>
								</tr>
								<tr>
									<td>Kategori</td>
									<td>
									<select name="kategori" class="form-control">
										<option value="<?php echo $hasil['id_kategori'];?>"><?php echo $hasil['nama_kategori'];?></option>
										<option value="#">Pilih Kategori</option>
										<?php  $kat = $lihat -> kategori(); foreach($kat as $isi){ 	?>
										<option value="<?php echo $isi['id_kategori'];?>"><?php echo $isi['nama_kategori'];?></option>
										<?php }?>
									</select>
									</td>
								</tr>
								<tr>
									<td>Nama Barang</td>
									<td><input type="text" class="form-control" value="<?php echo $hasil['nama_barang'];?>" name="nama"></td>
								</tr>
								<tr>
								<td>Gambar Utama</td>
								<td>: <input type="file" name="gambar" ><img src="admin/module/barang/img/<?= $hasil['gambar']; ?>" width="100">
								<input type="hidden" name="gambarLama1" value="<?= $hasil["gambar"];?>"></td>
								</tr>

								<tr>
								<td>Gambar 2</td>
								<td>: <input type="file" name="gambar2" ><img src="admin/module/barang/img/<?= $hasil['gambar2']; ?>" width="100">
								<input type="hidden" name="gambarLama2" value="<?= $hasil["gambar2"];?>"></td>
							
							
								</tr>
								<tr>
								<td>Gambar 3</td>
								<td>: <input type="file" name="gambar3" ><img src="admin/module/barang/img/<?= $hasil['gambar3']; ?>" width="100">
								<input type="hidden" name="gambarLama3" value="<?= $hasil["gambar3"];?>"></td>
							
							
								</tr>
								<tr>
									<td>Deskripsi</td>
									<td><textarea type="text"  name="deskripsi"  rows="5" cols="100"><?php echo $hasil['deskripsi'];?></textarea></td>
								</tr>
								<tr>
									<td>Merk Barang</td>
									<td><input type="text" class="form-control" value="<?php echo $hasil['merk'];?>" name="merk"></td>
								</tr>
								<tr>
									<td>Harga Beli</td>
									<td><input type="number" class="form-control" value="<?php echo $hasil['harga_beli'];?>" name="beli"></td>
								</tr>
								<tr>
									<td>Harga Jual</td>
									<td><input type="number" class="form-control" value="<?php echo $hasil['harga_jual'];?>" name="jual"></td>
								</tr>
								<tr>
									<td>Satuan Barang</td>
									<td>
										<select name="satuan" class="form-control">
											<option value="<?php echo $hasil['satuan_barang'];?>"><?php echo $hasil['satuan_barang'];?></option>
											<option value="#">Pilih Satuan</option>
											<option value="PCS">PCS</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Stok</td>
									<td><input type="number" class="form-control" value="<?php echo $hasil['stok'];?>" name="stok"></td>
								</tr>
								<tr>
									<td>Produk ini diskon</td>
									<!-- <td><input type="number" class="form-control" value="<?php echo $hasil['is_diskon'];?>" name="is_diskon"></td>
								 -->
								 <td>
									<select name="is_diskon" id="" class="form-control">
										<?php if($hasil['is_diskon'] == true) : ?>
										<option value="<?= $hasil['is_diskon'] ?>" selected>Iya</option>
										<option value="0">Tidak</option>
										<?php else : ?>
											<option value="0">Tidak</option>
											<option value="1">Ya</option>
										<?php endif; ?>
									</select>
								 </td>
								</tr>
								<tr>
									<td>Besaran Diskon</td>
									<td><input type="number" class="form-control" value="<?php echo $hasil['diskon'];?>" name="diskon"></td>
								</tr>
								<tr>
									<td>Tanggal Update</td>
									<td><input type="text" readonly="readonly" class="form-control" value="<?php echo  date("j F Y, G:i");?>" name="tgl"></td>
								</tr>
								<tr>
									<td></td>
									<td><button class="btn btn-primary"><i class="fa fa-edit"></i> Update Data</button></td>
								</tr>
							</form>
						</table>
						<div class="clearfix" style="padding-top:16%;"></div>
				  </div>
              </div>
          </section>
      </section>
