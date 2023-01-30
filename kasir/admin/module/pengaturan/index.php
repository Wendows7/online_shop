 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
						<h3>Pengaturan Toko</h3>
						<br>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Ubah Data Berhasil !</p>
						</div>
						<?php }?>
						<table class="table table-stripped">
							<thead>
							<form method="post" action="fungsi/edit/edit.php?pengaturan=ubah" enctype="multipart/form-data">	
								
									<tr>
										<td>Nama Toko</td>
										<td><input class="form-control" name="namatoko" value="<?php echo $toko['nama_toko'];?>" placeholder="Nama Toko"></td>
									</tr>
									<tr>
										<td>Alamat Toko</td>
										<td><input class="form-control" name="alamat" value="<?php echo $toko['alamat_toko'];?>" placeholder="Alamat Toko"></td>
									</tr>
									<tr>
										<td>Kontak (Hp)</td>
										<td><input class="form-control" name="kontak" value="<?php echo $toko['tlp'];?>" placeholder="Kontak (Hp)"></td>
									</tr>
									<tr>
										<td>Nama Pemilik Toko</td>
										<td><input class="form-control" name="pemilik" value="<?php echo $toko['nama_pemilik'];?>" placeholder="Nama Pemilik Toko"></td>
									</tr>
									<tr>
										<td>Email</td>
										<td><input class="form-control" name="email" value="<?php echo $toko['email'];?>" placeholder="Email"></td>
									</tr>
									<tr>
										<td>Instagram</td>
										<td><input class="form-control" name="instagram" value="<?php echo $toko['ig'];?>" placeholder="Username Instagram"></td>
									</tr>
									<tr>
										<td>Facebook</td>
										<td><input class="form-control" name="facebook" value="<?php echo $toko['fb'];?>" placeholder="Username Facebook"></td>
									</tr>
									<tr>
										<td>Link Maps Address</td>
										<td><input class="form-control" name="link_maps" value="<?php echo $toko['link_maps'];?>" placeholder="Link Maps"></td>
									</tr>
									<tr>
										<td>Iframe Maps</td>
										<td><textarea class="form-control" name="iframe_maps"  placeholder="Iframe Maps" rows="5" cols="40"><?php echo $toko["maps"];?></textarea></td>
									</tr>
									<tr>
										<td>Deskripsi</td>
										<td><textarea class="form-control" name="deskripsi" placeholder="Deskripsi Toko" rows="5" cols="40"><?php echo $toko['deskripsi'];?></textarea></td>
									</tr>
									<tr>
										<td>Logo</td>
										<td><input type="file" name="logo" ><img src="admin/module/pengaturan/img/<?= $toko['logo']; ?>" width="100" >
									<input type="hidden" name="logolama" value="<?= $toko["logo"];?>">
									<button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-pencil"></i> Update Data</button></td>
								</tr>
								

								
								</form>
							</thead>
						</table>
						<div class="clearfix" style="padding-top:41%;"></div>
				  </div>
              </div>
          </section>
      </section>
	
