<?php
include "../../../config.php";
$conn=mysqli_connect($host,$user,$pass,$dbname) or die();

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    
    $gambar = upload();
    if( !$gambar){
        return false;
    }

    $query = "INSERT INTO upload VALUES ('', '$nama', '$harga', '$gambar', '$deskripsi')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah_user($data) {
    global $conn;
   

    $user = htmlspecialchars($data["user"]);
    $pass = htmlspecialchars(md5($data["pass"]));
    $namamember = htmlspecialchars($data["nm_member"]);
    $alamatmember = htmlspecialchars($data["alamat_member"]);
    $teleponmember = htmlspecialchars($data["telepon"]);
    $emailmember = htmlspecialchars($data["email"]);
    $nikmember = htmlspecialchars($data["NIK"]);
    $levelmember = htmlspecialchars($data["level"]);
    $gambar = upload_user();
    if( !$gambar){
        return false;
    }
    

    $random = random_int(00000,99999);
    $query_member = "INSERT INTO member VALUES ('$random', '$namamember', '$alamatmember', '$teleponmember',
    '$emailmember', '$gambar', '$nikmember', '$levelmember' )";  

     $query = "INSERT INTO login VALUES ('', '$user', '$pass','$random')";
    
    mysqli_query($conn, $query_member);
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload_user(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if($error === 4 ){
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }
    
    if($ukuranFile > 10000000)
 {
echo "<script>
alert('ukuran gambar terlalu besar!');
</script>";
return false;
 }
$namaFileBaru = uniqid();   
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;

move_uploaded_file($tmpName, '../add_user/img/' . $namaFileBaru);

 return $namaFileBaru;
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if($error === 4 ){
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }
    
    if($ukuranFile > 10000000)
 {
echo "<script>
alert('ukuran gambar terlalu besar!');
</script>";
return false;
 }
$namaFileBaru = uniqid();   
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;

move_uploaded_file($tmpName, '../../admin/module/barang/img/' . $namaFileBaru);

 return $namaFileBaru;
}
function upload2(){
    $namaFile2 = $_FILES['gambar2']['name'];
    $ukuranFile2 = $_FILES['gambar2']['size'];
    $error2 = $_FILES['gambar2']['error'];
    $tmpName2 = $_FILES['gambar2']['tmp_name'];

    if($error2 === 4 ){
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    $ekstensiGambarValid2 = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar2 = explode('.', $namaFile2);
    $ekstensiGambar2 = strtolower(end($ekstensiGambar2));
    if( !in_array($ekstensiGambar2, $ekstensiGambarValid2)){
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }
    
    if($ukuranFile2 > 10000000)
 {
echo "<script>
alert('ukuran gambar terlalu besar!');
</script>";
return false;
 }
$namaFileBaru2 = uniqid();
$namaFileBaru2 .= '.';
$namaFileBaru2 .= $ekstensiGambar2;

move_uploaded_file($tmpName2, '../../admin/module/barang/img/' . $namaFileBaru2);

 return $namaFileBaru2;
}
function upload3(){
    $namaFile3 = $_FILES['gambar3']['name'];
    $ukuranFile3 = $_FILES['gambar3']['size'];
    $error3 = $_FILES['gambar3']['error'];
    $tmpName3 = $_FILES['gambar3']['tmp_name'];

    if($error3 === 4 ){
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    $ekstensiGambarValid3 = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar3 = explode('.', $namaFile3);
    $ekstensiGambar3 = strtolower(end($ekstensiGambar3));
    if( !in_array($ekstensiGambar3, $ekstensiGambarValid3)){
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }
    
    if($ukuranFile3 > 10000000)
 {
echo "<script>
alert('ukuran gambar terlalu besar!');
</script>";
return false;
 }
$namaFileBaru3 = uniqid();
$namaFileBaru3 .= '.';
$namaFileBaru3 .= $ekstensiGambar3;

move_uploaded_file($tmpName3, '../../admin/module/barang/img/' . $namaFileBaru3);

 return $namaFileBaru3;
}

function upload_edit(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if($error === 4 ){
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }
    
    if($ukuranFile > 10000000)
 {
echo "<script>
alert('ukuran gambar terlalu besar!');
</script>";
return false;
 }
$namaFileBaru = uniqid();   
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;

move_uploaded_file($tmpName, '../../admin/module/barang/img/' . $namaFileBaru);

 return $namaFileBaru;
}
function upload_edit_toko(){
    $namaFile = $_FILES['logo']['name'];
    $ukuranFile = $_FILES['logo']['size'];
    $error = $_FILES['logo']['error'];
    $tmpName = $_FILES['logo']['tmp_name'];

    if($error === 4 ){
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }
    
    if($ukuranFile > 10000000)
 {
echo "<script>
alert('ukuran gambar terlalu besar!');
</script>";
return false;
 }
$namaFileBaru = uniqid();   
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;

move_uploaded_file($tmpName, '../../admin/module/pengaturan/img/' . $namaFileBaru);

 return $namaFileBaru;
}
function upload_edit2(){
    $namaFile2 = $_FILES['gambar2']['name'];
    $ukuranFile2 = $_FILES['gambar2']['size'];
    $error2 = $_FILES['gambar2']['error'];
    $tmpName2 = $_FILES['gambar2']['tmp_name'];

    if($error2 === 4 ){
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    $ekstensiGambarValid2 = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar2 = explode('.', $namaFile2);
    $ekstensiGambar2 = strtolower(end($ekstensiGambar2));
    if( !in_array($ekstensiGambar2, $ekstensiGambarValid2)){
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }
    
    if($ukuranFile2 > 10000000)
 {
echo "<script>
alert('ukuran gambar terlalu besar!');
</script>";
return false;
 }
$namaFileBaru2 = uniqid();
$namaFileBaru2 .= '.';
$namaFileBaru2 .= $ekstensiGambar2;

move_uploaded_file($tmpName2, '../../admin/module/barang/img/' . $namaFileBaru2);

 return $namaFileBaru2;
}
function upload_edit3(){
    $namaFile3 = $_FILES['gambar3']['name'];
    $ukuranFile3 = $_FILES['gambar3']['size'];
    $error3 = $_FILES['gambar3']['error'];
    $tmpName3 = $_FILES['gambar3']['tmp_name'];

    if($error3 === 4 ){
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    $ekstensiGambarValid3 = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar3 = explode('.', $namaFile3);
    $ekstensiGambar3 = strtolower(end($ekstensiGambar3));
    if( !in_array($ekstensiGambar3, $ekstensiGambarValid3)){
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }
    
    if($ukuranFile3 > 10000000)
 {
echo "<script>
alert('ukuran gambar terlalu besar!');
</script>";
return false;
 }
$namaFileBaru3 = uniqid();
$namaFileBaru3 .= '.';
$namaFileBaru3 .= $ekstensiGambar3;

move_uploaded_file($tmpName3, '../../admin/module/barang/img/' . $namaFileBaru3);

 return $namaFileBaru3;
}

function hapus($id, $gambarLama){
    global $conn;
    $target = "../add_user/img/$gambarLama";
    mysqli_query($conn, "DELETE FROM member WHERE id_member = $id");
    mysqli_query($conn, "DELETE FROM login WHERE id_member = $id");
    unlink($target);
    return mysqli_affected_rows($conn);
}

function edit($data) {
global $conn;

$id = $data["id"];
$nama = htmlspecialchars($data["nama"]);
$harga = htmlspecialchars($data["harga"]);
$gambarLama = htmlspecialchars($data["gambarLama"]);
$deskripsi = htmlspecialchars($data["deskripsi"]);
if( $_FILES['gambar']['error'] == 4){
    $gambar = $gambarLama;
}else{
    $gambar = upload();
}

$query = "UPDATE upload SET nama = '$nama', harga = '$harga', gambar = '$gambar', deskripsi = '$deskripsi' WHERE id = $id";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM upload WHERE
     nama LIKE '%$keyword%'";
     return query($query);
}
function edit_user($data) {
    global $conn;
   
    $id = $data["id_member"];
    $user = htmlspecialchars($data["user"]);
    $pass = htmlspecialchars($data["pass"]);
    $nama = htmlspecialchars($data["nm_member"]);
    $alamat = htmlspecialchars($data["alamat_member"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    $email = htmlspecialchars($data["email"]);
    $telepon = htmlspecialchars($data["telepon"]);
    $nik = htmlspecialchars($data["NIK"]);
    $level = htmlspecialchars($data["level"]);
    $target = "../add_user/img/$gambarLama";
    if( $_FILES['gambar']['error'] == 4){
        $gambar = $gambarLama;
    }else{
        $gambar = upload_user();
        unlink($target);
    }
    
    $query = "UPDATE member SET nm_member = '$nama', alamat_member = '$alamat', gambar = '$gambar', email = '$email', telepon = '$telepon'
    , NIK = '$nik', level = '$level' WHERE id_member = $id";
    $query1 = "UPDATE login SET user = '$user', pass = md5('$pass') WHERE id_member = '$id' ";
    mysqli_query($conn, $query);
    mysqli_query($conn, $query1);

    return mysqli_affected_rows($conn);
    
    }
function tambah_cart($data) {
global $conn;

$id = $data["id"];
$nama = htmlspecialchars($data["nama"]);
$harga = htmlspecialchars($data["harga"]);
$deskripsi = htmlspecialchars($data["deskripsi"]);
$gambarLama = htmlspecialchars($data["gambarLama"]);
if( $_FILES['gambar']['error'] == 4){
    $gambar = $gambarLama;
}else{
    $gambar = upload();
}

$query = "SELECT * FROM upload SET nama = '$nama', harga = '$harga', gambar = '$gambar', deskripsi = '$deskripsi' WHERE id = $id";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}


?>