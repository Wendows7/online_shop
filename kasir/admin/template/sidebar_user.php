   
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
<?php 
  $id = $_SESSION['admin']['id_member'];
  $hasil_profil = $lihat -> member_edit($id);
?>
      <aside>
          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a><img src="admin/module/add_user/img/<?php echo $hasil_profil['gambar'];?>" class="img-circle" width="100" height="100"></a></p>
              	  <h5 class="centered"><?php echo $hasil_profil['nm_member'];?></h5>
              	  <h5 class="centered">( <?php echo $hasil_profil['NIK'];?> )</h5>
              	  	
                  <li class="mt">
                      <a href="index_user.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a  href="index_user.php?page=scan">
                          <i class="fa fa-desktop"></i>
                          <span>Scan QR <span style="padding-left:2px;"></i></span>
                      </a>
                  </li>
              
                  <li class="sub-menu">
                      <a  href="index_user.php?page=jual">
                          <i class="fa fa-desktop"></i>
                          <span>Transaksi <span style="padding-left:2px;"></i></span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a  href="index_user.php?page=user">
                          <i class="fa fa-desktop"></i>
                          <span>Ganti Password <span style="padding-left:2px;"></i></span>
                      </a>
                  </li>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
