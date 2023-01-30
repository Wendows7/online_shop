<?php
include '../upload/functions.php';
if( isset($_POST["submit"]) ){
    if( tambah_user($_POST) > 0 ){
        echo  "<script>
        alert('data berhasil ditambahkan');
        document.location.href = '../../../index.php?page=add_user';
        </script>";
    }
        else {
            echo "<script>
            alert('data gagal ditambahkan');
            document.location.href = '../../../index.php?page=add_user';
            </script>";
        }

}
?>