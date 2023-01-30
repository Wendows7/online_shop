<?php 
$conn = mysqli_connect("localhost", "root", "", "kasir");

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
    $gambar = upload();
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

move_uploaded_file($tmpName, '../add_user/img/' . $namaFileBaru);

 return $namaFileBaru;
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM member WHERE id_member = $id");
    mysqli_query($conn, "DELETE FROM login WHERE id_member = $id");
    
    return mysqli_affected_rows($conn);
}

function edit($data) {
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
if( $_FILES['gambar']['error'] == 4){
    $gambar = $gambarLama;
}else{
    $gambar = upload();
}

$query = "UPDATE member SET nm_member = '$nama', alamat_member = '$alamat', gambar = '$gambar', email = '$email', telepon = '$telepon'
, NIK = '$nik', level = '$level' WHERE id_member = $id";
$query1 = "UPDATE login SET user = '$user', pass = '$pass', WHERE id_member = $id";
mysqli_query($conn, $query);
mysqli_query($conn, $query1);
return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM upload WHERE
     nama LIKE '%$keyword%'";
     return query($query);
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