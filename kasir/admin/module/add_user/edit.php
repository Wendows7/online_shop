<?php
include '../upload/functions.php';
$id = $_GET["id_member"];
$edit = query("SELECT * FROM member WHERE id_member = $id")[0];
$edit1 = query("SELECT * FROM login WHERE id_member = $id")[0];
if( isset($_POST["submit"]) ){
    if( edit($_POST) ) {
        echo  "<script>
        alert('data berhasil diubah');
        document.location.href = '../../../index.php?page=add_user';
        </script>";
    }
        else { 
            echo "<script>
            alert('data gagal diubah');
            document.location.href = '../../../index.php?page=add_user';
            </script>";
        }

}
?>
<style>
  body {
   background-color: #FAEBD7;
  }
</style>
 <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
                  <center>
            <h3>Silahkan Edit Data Yang Anda Inginkan  </h3>
            <hr/>
            <form action="" method="post" enctype = "multipart/form-data">
                <input type="hidden" name="id_member" value="<?= $edit["id_member"];?>">
                <input type="hidden" name="gambarLama" value="<?= $edit["gambar"];?>">
        <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="user" value="<?= $edit1["user"]; ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="pass" value="<?= $edit1["pass"];?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nm_member" value="<?= $edit["nm_member"];?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea type="text" name="alamat_member" ><?= $edit["alamat_member"];?></textarea></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input type="text" name="telepon" value="<?= $edit["telepon"];?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" value="<?= $edit["email"];?>"></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><input type="text" name="NIK" value="<?= $edit["NIK"];?>"></td>
        </tr>
        <tr>
            <td>Level</td>
            <td>:</td>
            <td><select name="level"  >
            <option value="admin">Admin</option>
            <option value="user">Kasir</option>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="file" name="gambar"></td>
        </tr>
        <tr>
        <td><img src="../add_user/img/<?= $edit['gambar']; ?>" width="100"></td>
</tr>
<tr>
            <td><button type="submit" name="submit" id="tombol-simpan" class="btn btn-primary">Edit</button></td>
        </tr>
    </table>
    <br><button> <a href = "../../../index.php?page=add_user">Kembali</button></a>
</form>
</center>
</div>
</div>

          </section>
      </section>