<?php
session_start();
include '../../admin/module/barang/functions.php';
if (!empty($_SESSION['admin'])) {
	require '../../config.php';
	if (!empty($_GET['pengaturan'])) {
		$nama = htmlentities($_POST['namatoko']);
		$alamat = htmlentities($_POST['alamat']);
		$kontak = htmlentities($_POST['kontak']);
		$pemilik = htmlentities($_POST['pemilik']);
		$email = htmlentities($_POST['email']);
		$ig = htmlentities($_POST['instagram']);
		$fb = htmlentities($_POST['facebook']);
		$iframe_maps = htmlentities($_POST['iframe_maps']);
		$desc = htmlentities($_POST['deskripsi']);
		$link_maps = htmlentities($_POST['link_maps']);
		$logolama = htmlentities($_POST['logolama']);
		$id = '1';

		$data[] = $nama;
		$data[] = $alamat;
		$data[] = $kontak;
		$data[] = $pemilik;
		$data[] = $email;
		$data[] = $ig;
		$data[] = $fb;
		$logo = $logolama;
		if( $_FILES['logo']['error'] == 4){
			$data[]=$logo;
		}else{
			$data[]=$logo = upload_edit_toko();
			$target = "../../admin/module/pengaturan/img/$logolama";
			unlink($target);
		}
		$data[] = $iframe_maps;
		$data[] = $desc;
		$data[] = $link_maps;
		$data[] = $id;
		

		$sql = 'UPDATE toko SET nama_toko=?, alamat_toko=?, tlp=?, nama_pemilik=?, email=?, ig=?, fb=?, logo=?, maps=?, deskripsi=?, link_maps=? WHERE id_toko = ?';
		$row = $config->prepare($sql);
		$row->execute($data);
		echo '<script>window.location="../../index.php?page=pengaturan&success=edit-data"</script>';
	}

	if (!empty($_GET['kategori'])) {
		$nama = htmlentities($_POST['kategori']);
		$id = htmlentities($_POST['id']);
		$data[] = $nama;
		$data[] = $id;
		$sql = 'UPDATE kategori SET  nama_kategori=? WHERE id_kategori=?';
		$row = $config->prepare($sql);
		$row->execute($data);
		echo '<script>window.location="../../index.php?page=kategori&uid=' . $id . '&success-edit=edit-data"</script>';
	}

	if (!empty($_GET['stok'])) {
		$restok = htmlentities($_POST['restok']);
		$id = htmlentities($_POST['id']);
		$dataS[] = $id;
		$sqlS = 'select*from barang WHERE id_barang=?';
		$rowS = $config->prepare($sqlS);
		$rowS->execute($dataS);
		$hasil = $rowS->fetch();

		$stok = $restok + $hasil['stok'];

		$data[] = $stok;
		$data[] = $id;
		$sql = 'UPDATE barang SET stok=? WHERE id_barang=?';
		$row = $config->prepare($sql);
		$row->execute($data);
		echo '<script>window.location="../../index.php?page=barang&success-stok=stok-data"</script>';
	}

	if (!empty($_GET['barang'])) {
		$id = htmlentities($_POST['id']);
		$kategori = htmlentities($_POST['kategori']);
		$nama = htmlentities($_POST['nama']);
		$merk = htmlentities($_POST['merk']);
		$beli = htmlentities($_POST['beli']);
		$jual = htmlentities($_POST['jual']);
		$diskon = htmlentities($_POST['diskon']);
		$is_diskon = htmlentities($_POST['is_diskon']);
		$satuan = htmlentities($_POST['satuan']);
		$stok = htmlentities($_POST['stok']);
		$gambarLama1 = htmlspecialchars($_POST["gambarLama1"]);
		$gambarLama2 = htmlspecialchars($_POST["gambarLama2"]);
		$gambarLama3 = htmlspecialchars($_POST["gambarLama3"]);
		$deskripsi = htmlentities($_POST['deskripsi']);
		$tgl = htmlentities($_POST['tgl']);

		$data[] = $kategori;
		$data[] = $nama;
		$data[] = $merk;
		$data[] = $beli;
		$data[] = $jual;
		$data[] = $diskon;
		$data[] = $is_diskon;
		$data[] = $satuan;
		$data[] = $stok;
		$gambar = $gambarLama1;
		$gambar2 = $gambarLama2;
		$gambar3 = $gambarLama3;
		if( $_FILES['gambar']['error'] == 4){
			$data[]=$gambar;
		}else{
			$data[]=$gambar = upload_edit();
			$target="../../admin/module/barang/img/$gambarLama1";
			unlink($target);
		}

		if( $_FILES['gambar2']['error'] == 4){
			
			$data[]=$gambar2;
		}else{
			$data[]=$gambar2 = upload_edit2();
			$target="../../admin/module/barang/img/$gambarLama2";
			unlink($target);
		}

		if( $_FILES['gambar3']['error'] == 4){
			$data[] = $gambar3;
		}else{
			$data[]= $gambar3 = upload_edit3();
			$target="../../admin/module/barang/img/$gambarLama3";
			unlink($target);
		}
		
		// $data[] = $gambar = upload_edit();
		// if(!$gambar){
		// 	return false;
		// };
		// $data[] = $gambar2 = upload_edit2();
		// if(!$gambar2){
		// 	return false;
		// };
		// $data[] = $gambar3 = upload_edit3();
		// if(!$gambar3){
		// 	return false;
		// };
		$data[] = $deskripsi;
		$data[] = $tgl;
		$data[] = $id;
		$sql = 'UPDATE barang SET id_kategori=?, nama_barang=?, merk=?, 
				harga_beli=?, harga_jual=?, diskon=?, is_diskon=?, satuan_barang=?, stok=?, gambar=?, gambar2=?, gambar3=?, deskripsi=?, tgl_update=?  WHERE id_barang=?';
		$row = $config->prepare($sql);
		$row->execute($data);
		echo '<script>window.location="../../index.php?page=barang/edit&barang=' . $id . '&success=edit-data"</script>';
	}

	if (!empty($_GET['gambar'])) {
		$id = htmlentities($_POST['id']);
		set_time_limit(0);
		$allowedImageType = array("image/gif",   "image/JPG",   "image/jpeg",   "image/pjpeg",   "image/png",   "image/x-png");

		if ($_FILES['foto']["error"] > 0) {
			$output['error'] = "Error in File";
		} elseif (!in_array($_FILES['foto']["type"], $allowedImageType)) {
			// echo "You can only upload JPG, PNG and GIF file";
			// echo "<font face='Verdana' size='2' ><BR><BR><BR>
			// 		<a href='../../index.php?page=user'>Back to upform</a><BR>";
			echo '<script>alert("You can only upload JPG, PNG and GIF file");window.location="../../index.php?page=user"</script>';
		} elseif (round($_FILES['foto']["size"] / 1024) > 4096) {
			// echo "WARNING !!! Besar Gambar Tidak Boleh Lebih Dari 4 MB";
			// echo "<font face='Verdana' size='2' ><BR><BR><BR>
			// 		<a href='../../index.php?page=user'>Back to upform</a><BR>";
			echo '<script>alert("WARNING !!! Besar Gambar Tidak Boleh Lebih Dari 4 MB");window.location="../../index.php?page=user"</script>';
		} else {
			$dir = '../../admin/module/add_user/img/';
			$tmp_name = $_FILES['foto']['tmp_name'];
			$name = time() . basename($_FILES['foto']['name']);
			if (move_uploaded_file($tmp_name, $dir . $name)) {
				//post foto lama
				$foto2 = $_POST['foto2'];
				//remove foto di direktori
				unlink('../../admin/module/add_user/img/' . $foto2 . '');
				//input foto
				$id = $_POST['id'];
				$data[] = $name;
				$data[] = $id;
				$sql = 'UPDATE member SET gambar=?  WHERE member.id_member=?';
				$row = $config->prepare($sql);
				$row->execute($data);
				echo '<script>window.location="../../index.php?page=user&success=edit-data"</script>';
			} else {
				echo '<script>alert("Masukan Gambar !");window.location="../../index.php?page=user"</script>';
			}
		}
	}

	if (!empty($_GET['profil'])) {
		$id = htmlentities($_POST['id']);
		$nama = htmlentities($_POST['nama']);
		$alamat = htmlentities($_POST['alamat']);
		$tlp = htmlentities($_POST['tlp']);
		$email = htmlentities($_POST['email']);
		$nik = htmlentities($_POST['nik']);

		$data[] = $nama;
		$data[] = $alamat;
		$data[] = $tlp;
		$data[] = $email;
		$data[] = $nik;
		$data[] = $id;
		$sql = 'UPDATE member SET nm_member=?,alamat_member=?,telepon=?,email=?,NIK=? WHERE id_member=?';
		$row = $config->prepare($sql);
		$row->execute($data);
		echo '<script>window.location="../../index.php?page=user&success=edit-data"</script>';
	}
	if (!empty($_GET['pass'])) {
		$id = htmlentities($_POST['id']);
		$user = htmlentities($_POST['user']);
		$pass = htmlentities($_POST['pass']);

		$data[] = $user;
		$data[] = $pass;
		$data[] = $id;
		$sql = 'UPDATE login SET user=?,pass=md5(?) WHERE id_member=?';
		$row = $config->prepare($sql);
		$row->execute($data);
		echo '<script>window.location="../../index.php?page=user&success=edit-data"</script>';
	}

	if (!empty($_GET['jual'])) {
		$id = htmlentities($_POST['id']);
		$id_barang = htmlentities($_POST['id_barang']);
		$jumlah = htmlentities($_POST['jumlah']);

		$sql_tampil = "select *from barang where barang.id_barang=?";
		$row_tampil = $config->prepare($sql_tampil);
		$row_tampil->execute(array($id_barang));
		$hasil = $row_tampil->fetch();

		if ($hasil['stok'] > $jumlah) {
			$jual = $hasil['harga_jual'];
			$total = $jual * $jumlah;
			$data1[] = $jumlah;
			$data1[] = $total;
			$data1[] = $id;
			$sql1 = 'UPDATE penjualan SET jumlah=?,total=? WHERE id_penjualan=?';
			$row1 = $config->prepare($sql1);
			$row1->execute($data1);
			echo '<script>window.location="../../index.php?page=jual#keranjang"</script>';
		} else {
			echo '<script>alert("Keranjang Melebihi Stok Barang Anda !");
					window.location="../../index.php?page=jual#keranjang"</script>';
		}
	}

	if (!empty($_GET['cari_barang'])) {
		$cari = trim(strip_tags($_POST['keyword']));
		$explodeCari = explode("-", $cari);
		if (count($explodeCari) > 1) {
			$sql = "SELECT * FROM keranjang WHERE kode LIKE '%$cari%'";
			$row = $config->prepare($sql);
			$row->execute();
			$hasil = $row->fetchAll();
			$idsBarang = [];
?>
			<table class="table table-stripped" width="100%" id="example2">
				<tr>
					<th>ID Barang</th>
					<th>Nama Barang</th>
					<th>Merk</th>
					<th>Harga Jual</th>
					<th>Aksi</th>
				</tr>
				<?php foreach (json_decode($hasil[0]['detail_keranjang']) as $detail => $value) { ?>
					<tr>
						<td><?php echo $value->id_barang; ?></td>
						<td><?php echo $value->nama_barang; ?></td>
						<td><?php echo $value->merk; ?></td>
						<td><?php echo $value->harga_jual; ?></td>
						<td>
							<a href="fungsi/tambah/tambah.php?jual=jual&id=<?php echo $value->id_barang; ?>&id_kasir=<?php echo $_SESSION['admin']['id_member']; ?>" class="btn btn-success">
								<i class="fa fa-shopping-cart"></i></a>
						</td>
					</tr>
				<?php } ?>
			</table>
		<?php } else {
			$sql = "select barang.*, kategori.id_kategori, kategori.nama_kategori
			from barang inner join kategori on barang.id_kategori = kategori.id_kategori
			where barang.id_barang like '%$cari%' or barang.nama_barang like '%$cari%' or barang.merk like '%$cari%'";
			$row = $config->prepare($sql);
			$row->execute();
			$hasil1 = $row->fetchAll();
		?>
			<table class="table table-stripped" width="100%" id="example2">
				<tr>
					<th>ID Barang</th>
					<th>Nama Barang</th>
					<th>Merk</th>
					<th>Harga Jual</th>
					<th>Aksi</th>
				</tr>
				<?php foreach ($hasil1 as $hasil) { ?>
					<tr>
						<td><?php echo $hasil['id_barang']; ?></td>
						<td><?php echo $hasil['nama_barang']; ?></td>
						<td><?php echo $hasil['merk']; ?></td>
						<td><?php echo $hasil['harga_jual']; ?></td>
						<td>
							<a href="fungsi/tambah/tambah.php?jual=jual&id=<?php echo $hasil['id_barang']; ?>&id_kasir=<?php echo $_SESSION['admin']['id_member']; ?>" class="btn btn-success">
								<i class="fa fa-shopping-cart"></i></a>
						</td>
					</tr>
				<?php } ?>
			</table>
<?php
		}
	}
}
