<?php 
session_start();
	$host 	= 'localhost'; // host server
	$user 	= 'root';  // username server
	$pass 	= ''; // password server, kalau pakai xampp kosongin saja
	$dbname = 'kasir'; // nama database anda

	$con = mysqli_connect("localhost", "root", "", "kasir");
	 ?>