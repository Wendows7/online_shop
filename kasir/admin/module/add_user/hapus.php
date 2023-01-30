<?php
include '../upload/functions.php';
$id = $_GET["id_member"];
if( hapus($id) > 0 ){
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