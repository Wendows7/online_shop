<?php
require "config.php";
 include 'kasir/admin/module/barang/functions.php'; 

 $jumlahDataPerHalaman = 9;
 $jumlahData = count(query("SELECT * FROM barang"));
 $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
 $halamanAktif = ( isset($_GET["page"]) ) ? $_GET["page"] : 1;
 $awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

 $upload = query("SELECT * FROM barang ORDER BY id ASC LIMIT $awalData, $jumlahDataPerHalaman");
 $toko = query("SELECT * FROM toko");


?>
<?php foreach ($toko as $tokos):?>
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
                     <h3>Product Grid</h3>
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
               <h2>Our <span>Products</span></h2>
            </div>
            <div class="row">
                  <?php foreach( $upload as $row) : ?>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                        <a href="keranjang/tambah.php?id=<?= $row["id"];?>" class ="option1">
                           Add To Cart
                           </a>
                           <a href="buy/tambah_buy.php?id=<?= $row["id"];?>" class="option2">
                           Buy Now
                           </a>
                           <br>
                           <a href="deskripsi/deskripsi.php?id=<?= $row['id'];?>" target="_blank"> <button type="button" class="btn btn-outline-success btn-sm">
                           Deskripsi</button>
                           </a>
                        </div>
                     </div>
                     
                     <div class="img-box">
                     <img src="kasir/admin/module/barang/img/<?= $row["gambar"]; ?>">
                     </div>
                     <div class="detail-box">
                        <h5>
                        <?= $row["nama_barang"];?>
                        </h5>&nbsp;
                        <?php
                           $hargaDiskon = ""; 
                           if($row['is_diskon'] == true) {
                              $hargaDiskon = $row['harga_jual'] * $row['diskon'] / 100;
                              $harga = $row['harga_jual'] - $hargaDiskon;
                           }else{
                              $harga = $row['harga_jual'];
                           }
                        ?>
                        <h5><?php if($row['is_diskon'] == true): ?>
                        <strike class="text-muted"><h6 class="text-muted">Rp.<?php echo number_format ($row['harga_jual']);?></h6></strike>
                        
                         <div ><h6 style="color:red;"><i>Disc <?=$row['diskon'];?>%</i></h6></div><?php endif; ?>Rp.&nbsp;<?php echo number_format ($harga);?><br/> 
                        
                        </h5>
                       </div>
                  </div>
               </div>   
               <?php endforeach; ?> 
            </div>
            <div class="btn-box">
            <?php if( $halamanAktif > 1) : ?>   
            <a href ="?page=<?= $halamanAktif - 1; ?>">&laquo;</a>
            <?php endif; ?>

               <?php for( $i = 1; $i <= $jumlahHalaman; $i++) : ?>
               <?php if( $i == $halamanAktif) : ?>
                  <a href="?page=<?= $i; ?>" style="font-weight: bold; color: black;"><?= $i; ?>
               </a>
               <?php else : ?>
                  <a href="?page=<?= $i; ?>"><?= $i; ?>
                  <?php endif; ?>
               <?php endfor; ?>

               <?php if( $halamanAktif < $jumlahHalaman) : ?>   
            <a href ="?page=<?= $halamanAktif + 1; ?>">&raquo;</a>
            <?php endif; ?>
            </div>
         </div>
      </section>
      <!-- end product section -->
  <!-- footer section -->
  <footer class="footer_section">
      <div class="container">
         <div class="row">
            <div class="col-md-4 footer-col">
               <div class="footer_contact">
                  <h4>
                     Reach at..
                  </h4>
                  <div class="contact_link_box">
                     <a href="<?= $tokos["link_maps"];?>">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Address
                           </span>
                         
                       <?=htmlspecialchars_decode($tokos["maps"]);?>
                       
                      
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
                     <?= $tokos["deskripsi"];?>
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
                  &copy; <span id="displayYear"></span> All Rights Reserved By<a href="https://www.instagram.com/<?=$tokos["ig"];?>" target="_blank"> <?= $tokos["nama_pemilik"]; ?> </a>
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