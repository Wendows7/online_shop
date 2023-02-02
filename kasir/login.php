<?php

	@ob_start();
	session_start();
	if(isset($_POST['proses'])){
		require 'config.php';
		
	
			
		$user = strip_tags($_POST['user']);
		$pass = strip_tags($_POST['pass']);
		
		$sql = 'select member.*, login.user, login.pass
				from member inner join login on member.id_member = login.id_member
				where user =? and pass = md5(?)';
		$row = $config->prepare($sql);
		$row -> execute(array($user,$pass));
		$jum = $row -> rowCount();
		
		if($jum > 0){
			$hasil = $row -> fetch();
			if($hasil['level']=="admin"){
			$_SESSION['admin'] = $hasil;
			echo '<script>alert("Login Sukses");window.location="index.php"</script>';

			}else if($hasil['level']=="user"){
				$_SESSION['admin'] = $hasil;
				echo '<script>alert("Login Sukses");window.location="index_user.php"</script>';

		}else{
			echo '<script>alert("Login Gagal");history.go(-1);</script>';
		}
	
	}else{
			echo '<script>alert("Login Gagal");history.go(-1);</script>';
		}
	}
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword">

    <title>Login Kasir</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background:#FAEBD7;">

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
	  <?php 
	  require 'config.php';
	  require 'admin/module/barang/functions.php';
	  $toko = query("SELECT * FROM toko");?> 
	  <div id="login-page" style="padding-top:1pc;">
	  <?php foreach ($toko as $tokos)  : ?> 
	  <img width=150 height=150	src="admin/module/pengaturan/img/<?= $tokos["logo"];?>" style="display:block; margin:auto;">
	  	<div class="container">
		      <form class="form-login" method="POST">
		        <h2 class="form-login-heading">KASIR</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="user" placeholder="User ID" autofocus>
		            <br>
		            <input type="password" class="form-control" name="pass" placeholder="Password">
		            <br>
		            <button class="btn btn-primary btn-block" name="proses" type="submit"><i class="fa fa-lock"></i> LOGIN</button>
		        </div>
		      </form>	  	
			  <br>
			  <center><a href = "../index.php"><button class="btn btn-warning">Kembali	</button></a></center>
	  	
	  	</div>
	  </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
<?php endforeach;?>
