<?php
 include 'config.php'; 
 $id = $_GET['id'];
 $upload = mysqli_query($con, "SELECT * FROM upload WHERE id = '$id'");
 $judul = mysqli_fetch_assoc($upload);
 include 'kasir/admin/module/barang/functions.php'; 
$toko = query("SELECT * FROM toko ");
 

?>
<?php foreach($toko as $tokos):?>
<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="kasir/admin/module/pengaturan/img/<?= $tokos["logo"];?>" type="">
      <title><?=$tokos["nama_toko"];?></title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.php"><img width="100" src="kasir/admin/module/pengaturan/img/<?= $tokos["logo"];?>" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="product.php">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="scan.php">Scanner</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="kasir/login.php" target="_blank">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="keranjang.php">
                              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                    </g>
                                 </g>
                               
                                 
                     
                              </svg>
                           </a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>

         <!-- end header section -->
     
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Deskripsi Produk</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2><span><?php echo $judul['nama']; ?> </span></h2>
            </div><?php foreach( $upload as $row) : ?>
               <td><img src="kasir/admin/module/upload/img/<?= $row["gambar"]; ?> " width="250"></td>
               <td><b><?= $row["nama"];?></b></td>
               <td><b><?= $row["harga"];?></b></td>
               
               <td><?php echo $row['deskripsi'];?></td>
           
           
           
               
               <?php endforeach; ?>
            
      </section>
      <!-- end product section -->
      <!-- footer start -->
   <footer class="footer_section">
      <div class="container">
         <div class="row">
            <div class="col-md-4 footer-col">
               <div class="footer_contact">
                  <h4>
                     Reach at..
                  </h4>
                  <div class="contact_link_box">
                     <a href="https://goo.gl/maps/dMXLTzimQSYoyfu66">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                           Location
                        </span>
                     </a>
                     <a href="https://wa.me/<?=$tokos["tlp"];?>" target="_blank">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                           Call  <?= $tokos["tlp"]; ?>
                        </span>
                     </a>
                     <a href="mailto:<?= $tokos["email"];?>" target="_blank">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                           <?= $tokos["email"];?>
                        </span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-4 footer-col">
               <div class="footer_detail">
                  <a href="index.php" class="footer-logo">
                     <?= $tokos["nama_toko"]; ?>
                  </a>
                  <p>
                     Ajeng Tia Fashion Adalah Sebuah Toko Baju Muslim Wanita Yang Memiliki Produk Produk Yang Pastinya Berkualitas
                  </p>
                  <div class="footer_social">
                     <a href="https://www.facebook.com/<?=$tokos["fb"];?>">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                     </a>
                     <a href="https://www.instagram.com/<?= $tokos["ig"]; ?>/">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-4 footer-col">
               <div class="map_container">
                  <div class="map">
                     <div id="googleMap"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-info">
            <div class="col-lg-7 mx-auto px-0">
               <p>
                  &copy; <span id="displayYear"></span> All Rights Reserved By<a href="https://www.instagram.com/arswendosryhd/?hl=id" target="_blank"> <?= $tokos["nama_pemilik"]; ?> </a>
               </p>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer section -->
   <!-- jQery -->
   <script src="js/jquery-3.4.1.min.js"></script>
   <!-- popper js -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="js/bootstrap.js"></script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
</body>

</html>
<?php endforeach; ?>