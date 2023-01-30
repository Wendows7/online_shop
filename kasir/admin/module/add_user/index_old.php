<?php
 include '../upload/functions.php';
 
  
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
            <td><input type="text" name="pass" ></td>
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
            <td><input type="text" name="email"  ></td>
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
            <option value="user">User</option>
            </td>
        </tr>
    
        <tr>
            <td><button type="submit" name="submit" id="tombol-simpan" class="btn btn-primary"><i class="fa fa-plus"></i> Add </button></td>
    </table>
</form>


						<br/>
                      	<div class="clearfix" style="padding-top:16%;"></div>
				  </div>
              </div>
          </section>
      </section>