<?php
include '../barang/functions.php';
$id = $_GET["id_member"];
$gambarLama = $_GET["gambar"];
if( hapus($id, $gambarLama) > 0 ){
    echo "
    <script>
    alert('data berhasil dihapus');
    document.location.href = '../../../index.php?page=add_user';
    </script>

    ";

} else {
    echo "
    <script>
    alert('data gagal dihapus');
    document.location.href = '../../../index.php?page=add_user';
    </script>

    ";
}
?>