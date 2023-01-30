<?php
 include 'admin/module/upload/functions.php'; 
$member = query("SELECT * FROM member INNER JOIN login on member.id_member=login.id_member");
?>
<style>table {
  border-collapse:separate; 
  border-spacing: 0 1em;
}</style>
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
                  <h3>Silahkan Tambah User  </h3>
            <hr/>
            <form action="admin/module/add_user/tambah.php" method="post" enctype="multipart/form-data">
        <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="user"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nm_member"  ></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat_member"  ></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input type="text" name="telepon"  ></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email"  ></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>:</td>
            <td><input type="file" name="gambar"  ></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><input type="text" name="NIK"  ></td>
        </tr>
        <tr>
            <td>Level</td>
            <td>:</td>
            <td><select name="level"  >
            <option value="admin">Admin</option>
            <option value="user">Kasir</option>
            </td>
        </tr>
    
        <tr>
            <td><button type="submit" name="submit" id="tombol-simpan" class="btn btn-primary"><i class="fa fa-plus"></i> Add </button></td>
    </table>
</form>


						<br/>
                        <table class="table table-bordered" id="example1">
							<thead>
								<tr style="background:#DFF0D8;color:#333;">
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>NIK</th>
                                <th>Level</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
								</tr>
							</thead>
							<tbody>	
                
            <?php
            foreach( $member as $row) : ?>
            <tr>	 
                    <td><?= $row["user"];?></td>
                    <td><?= $row["nm_member"];?></td>
                    <td><?= $row["alamat_member"];?></td>
                    <td><?= $row["telepon"];?></td>
                    <td><?= $row["email"];?></td>
                    <td><?= $row["NIK"];?></td>
                    <td><?= $row["level"];?></td>
                    <td><img src="admin/module/add_user/img/<?= $row["gambar"]; ?>" width="100"></td>
                    <td>
                    <a href="admin/module/add_user/edit.php?id_member=<?= $row['id_member'];?>"><button class="btn btn-warning btn-xs">Edit</button></a>
                        <a href = "admin/module/add_user/hapus.php?id_member=<?= $row["id_member"]; ?>" onclick="javascript:return confirm('Hapus Data barang ?');"><button class="btn btn-danger btn-xs">Hapus</button></a>
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
	

                      