<?php
include 'functions.php';
$id = $_GET["id"];
$edit = query("SELECT * FROM upload WHERE id = $id")[0];
if( isset($_POST["submit"]) ){
    if( edit($_POST) > 0 ) {
        echo  "<script>
        alert('data berhasil diubah');
        document.location.href = '../../../index.php?page=upload';
        </script>";
    }
        else {
            echo "<script>
            alert('data gagal diubah');
            document.location.href = '../../../index.php?page=upload';
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
                <input type="hidden" name="id" value="<?= $edit["id"];?>">
                <input type="hidden" name="gambarLama" value="<?= $edit["gambar"];?>">
        <table>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?= $edit["nama"]; ?>"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td>:</td>
            <td><input type="text" name="harga" value="<?= $edit["harga"];?>"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><textarea type="text" name="deskripsi" rows="6" cols="130"><?= $edit["deskripsi"];?></textarea></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="file" name="gambar"></td>
        </tr>
        <tr>
        <td><img src="img/<?= $edit['gambar']; ?>" width="100"></td>
</tr>
<tr>
            <td><button type="submit" name="submit" id="tombol-simpan" class="btn btn-primary">Edit</button></td>
        </tr>
    </table>
    <br><button> <a href = "../../../index.php?page=upload">Kembali</button></a>
</form>
</center>
</div>
</div>

          </section>
      </section>