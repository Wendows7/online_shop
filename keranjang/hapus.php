<?php 
include "../config.php";

$id = $_GET["id"];

unset($_SESSION["cart"][$id]);

header("location:../keranjang.php");
 ?>