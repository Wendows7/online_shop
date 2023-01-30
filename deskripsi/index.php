<?php
 include '../config.php'; 
 $id = $_GET['id'];
 $upload = mysqli_query($con, "SELECT * FROM barang WHERE id = '$id'");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->

    <link rel="stylesheet" href="css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <script defer src="script.js"></script>
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <!-- Site Metas -->
     <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="../images/ajeng.jpeg" type="">
      <title>Ajeng Tia Fashion</title>
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="../css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="../css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="../css/responsive.css" rel="stylesheet" />
    <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  </head>
  <body>
  <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="../index.php"><img width="100" src="../images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="../product.php">Products</a>
                        </li>
                        
                        <li class="nav-item">
                           <a class="nav-link" href="../scan.php">Scanner</a>
                        </li>
   
                        <li class="nav-item">
                           <a class="nav-link" href="../kasir/login.php">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="../keranjang.php">
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
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg>
                           </a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
    
    <div class="body-wrapper"></div>

    <!-- Overlay image Modal -->
    <div class="overlay-container">
      <div class="item-overlay">
        <button class="item-overlay__btn">
          <img
            src="images/icon-close.svg"
            alt="close image"
            class="item-overlay__btn-img"
          />
        </button>
        <div class="item-overlay__mainImg">
          <img
            src="images/image-product-1.jpg"
            alt=""
            class="item-overlay__img"
          />
          <button class="item-overlay__btnlft overlay-btn">
            <img
              src="images/icon-next.svg"
              alt="next symbol image"
              class="item-overlay__btnlft-img overlay-btn__img"
            />
          </button>
          <button class="item-overlay__btnrgt overlay-btn">
            <img
              src="images/icon-next.svg"
              alt="next symbol image"
              class="item-overlay__btnrgt-img overlay-btn__img"
            />
          </button>
        </div>
        <div class="overlay-img__btns">
          <button class="overlay-img__btn" data-img="0">
            <img
              src="images/image-product-1-thumbnail.jpg"
              alt="shoe product image"
              class="overlay-img__btn-img"
            />
          </button>
          <button class="overlay-img__btn" data-img="1">
            <img
              src="images/image-product-2-thumbnail.jpg"
              alt="shoe product image"
              class="overlay-img__btn-img"
            />
          </button>
          <button class="overlay-img__btn" data-img="2">
            <img
              src="images/image-product-3-thumbnail.jpg"
              alt="shoe product image"
              class="overlay-img__btn-img"
            />
          </button>
          <button class="overlay-img__btn" data-img="3">
            <img
              src="images/image-product-4-thumbnail.jpg"
              alt="shoe product image"
              class="overlay-img__btn-img"
            />
          </button>
        </div>
      </div>
    </div>

    <!-- Cart -->
    <div class="head-cart">
      <h3 class="head-cart__heading">Cart</h3>
      <div class="head-cart__txt">Your cart is empty.</div>
      <div class="head-cart__item">
        <div class="head-cart__item-wrapper">
          <img
            src="images/image-product-1-thumbnail.jpg"
            alt="cart product image"
            class="head-cart__item-img"
          />
          <div class="head-cart__des">
            <p class="head-cart__des-txt">Fall Limited Edition Sneakers</p>
            <div class="head-cart__price">
              <span class="head-cart__price-single">$125.00*3</span>
              <span class="head-cart__price-total">$375.00</span>
            </div>
          </div>
          <button class="head-cart__item-btn">
            <img
              src="images/icon-delete.svg"
              alt="delete image"
              class="head-cart__btn-img"
            />
          </button>
        </div>

        <button class="head-cart__btn btn--orange">Checkout</button>
      </div>
    </div>

    <!-- Header -->

      <div class="head-lft">
        <button class="head-lft__btn">
          <img
            src="images/icon-menu.svg"
            alt="menu image"
            class="head-lft__btn-img"
          />
        </button>
      </div>

      <div class="head-rgt">
        <button class="head-rgt__btn">
        </button>
      </div>


      <?php foreach ($upload as $row) : ?>
    <!-- Main item container -->
    <main class="item">
      <section class="img">
        <button class="img-main__btnlft img-main__btn">
          <img
            src="images/icon-next.svg"
            alt="next symbol image"
            class="img-main__btnlft-img img-main__btn-img"
          />
        </button>
        <button class="img-main__btnrgt img-main__btn">
          <img
            src="images/icon-next.svg"
            alt="next symbol image"
            class="img-main__btnrgt-img img-main__btn-img"
          />
        </button>
        <img src="../kasir/admin/module/barang/img/<?= $row["gambar"]; ?>" alt="" class="img-main" />
        <div class="img-btns">
          <button class="img-btn">
            <img
              src="../kasir/admin/module/barang/img/<?= $row["gambar"]; ?>"
              alt="shoe product image"
              class="img-btn__img"
            />
          </button>
          <button class="img-btn">
            <img
              src="images/image-product-2-thumbnail.jpg"
              alt="shoe product image"
              class="img-btn__img"
            />
          </button>
          <button class="img-btn">
            <img
              src="images/image-product-3-thumbnail.jpg"
              alt="shoe product image"
              class="img-btn__img"
            />
          </button>
          <button class="img-btn">
            <img
              src="images/image-product-4-thumbnail.jpg"
              alt="shoe product image"
              class="img-btn__img"
            />
          </button>
        </div>
      </section>
      

      <section class="price">
        <h1 class="price-main__heading"><?= $row["nama_barang"];?></h1>
        <p class="price-txt">
        <?= $row["deskripsi"];?>
        </p>
        <div class="price-box">
          <div class="price-box__main">
            <span class="price-box__main-new">Rp. <?php echo number_format ($row["harga_jual"]);?></span>
          </div>
        </div>

        <div class="price-btnbox">
          <div class="price-btns">
            <button class="price-btn__add price-btn">
              <img 
                src="images/icon-minus.svg"
                alt="plus sign"
                class="price-btn__add-img price-btn__img"
              />
            </button>
            <span class="price-btn__txt">0</span>
            <button class="price-btn__remove price-btn">
              <img
                src="images/icon-plus.svg"
                alt="minus sign"
                class="price-btn__remove-img price-btn__img"
              />
            </button>
          </div><a href="../keranjang/tambah.php?id=<?= $row["id"]; ?>" 
          button class="price-cart__btn btn--orange">
            <img
              src="images/icon-cart.svg"
              alt="cart image"
              class="price-cart__btn-img"
            /> 
            Add to cart</a> 
          </button>
        </div>
      </section>
    </main>
  <?php endforeach; ?>
  <br>
     <!-- footer start -->
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
                        <a href="https://goo.gl/maps/dMXLTzimQSYoyfu66">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                        Location
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                        Call 088262832413
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                        AjengTiaFashion@gmail.com
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="footer_detail">
                     <a href="../index.php" class="footer-logo">
                     Ajeng Tia Fashion
                     </a>
                     <p>
                        Ajeng Tia Fashion Adalah Sebuah Toko Baju Muslim Wanita Yang Memiliki Produk Produk Yang Pastinya Berkualitas
                     </p>
                     <div class="footer_social">
                        <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/ajengtia_fashionable/">
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
            
         </div>
         <div class="footer-info">
               <div class="col-lg-7 mx-auto px-0">
                  <p>
                     &copy; <span id="displayYear"></span> All Rights Reserved By<a href = "https://www.instagram.com/arswendosryhd/?hl=id" target="_blank"> TicTac </a>                    
                  </p>
               </div>
            </div>
      </footer>
      <!-- footer section -->
         <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
      <!-- jQery -->
      <script src="../js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="../js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="../js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="../js/custom.js"></script>
   </body>
</html>