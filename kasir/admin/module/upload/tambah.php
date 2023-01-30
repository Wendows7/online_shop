<?php
include 'functions.php';
if( isset($_POST["submit"]) ){
    if( tambah($_POST) > 0 ){
        echo  "<script>
        alert('data berhasil ditambahkan');
        document.location.href = '../../../index.php?page=upload';
        </script>";
    }
        else {
            echo "<script>
            alert('data gagal ditambahkan');
            document.location.href = '../../../index.php?page=upload';
            </script>";
        }

}
?>