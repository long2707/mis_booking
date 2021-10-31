<!DOCTYPE html>
<html lang="zxx">
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <title>MIS Booking | 12 Chùa Bộc</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- favicon -->
    <link href="img/favicon1.png" rel="icon" sizes="32x32" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- date picker CSS -->
    <link href="css/datepicker.min.css" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
    <!-- on3step CSS -->
    <link href="css/animated-on3step.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/on3step-style.css" rel="stylesheet">
    <link href="css/queries-on3step.css" media="all" rel="stylesheet">
  </head>
  
  <body>
  
    <!-- preloader -->
    <div class="bg-preloader-white"></div>
    <div class="preloader-white">
      <div class="mainpreloader">
        <span></span>
      </div>
    </div>
    <!-- preloader end -->
    
    <!-- content wraper -->
   <div class="content-wrapper">
    
   <header class="init">
    
    <!-- subnav -->
    <div class="container-fluid m-5-hor">
    <div class="row">
        <div class="subnav">

         <div class="col-md-6">
          <div class="left">
            <div class="social-icons-subnav hidden-sm hidden-xs">
                <div>Liên hệ : 024.3852.6419</div>
            </div>
          </div>
         </div>
         
         <div class="col-md-6">
          <div class="right">
            <div id="sub-icon" class="social-icons-subnav">
                <a href="#"><span class="ti-facebook"></span></a>
                <a href="#"><span class="ti-dribbble"></span></a>
                <a href="#"><span class="ti-twitter"></span></a>
                <a href="#"><span class="ti-instagram"></span></a>
                <a href="#"><span class="ti-linkedin"></span></a>
            </div>
            
          </div>
         </div>
        
        </div>
    </div>
    </div>
    <!-- subnav end -->
    
      <!-- nav -->
      <div class="navbar-default-white navbar-fixed-top">
        <div class="container-fluid m-5-hor">
        <div class="row">
        
           <!-- menu mobile display -->
           <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
           <span class="icon icon-bar"></span> 
           <span class="icon icon-bar"></span> 
           <span class="icon icon-bar"></span></button> 
          
          <!-- logo --> 
          <a class="navbar-brand white" href="index.php">
          <img class="white" alt="logo" src="img/logo.png">
          <img class="black" alt="logo" src="img/logo-white.png">
          </a> 
          <!-- logo end -->
          
          <!-- mainmenu start -->
          <div class="white menu-init" id="main-menu">
            <nav id="menu-center">
              <ul>
                
                <li>
                 <a href="index.php">Trang chủ </a>
                </li>

                <li>
                  <a href="about.php">Giới thiệu</a> 
                </li>

                <li>
                  <a href="works.php">Thư viện </a> 
                </li>
                <li>
                  <a  href="destination.php" class="actived">Điểm đến </a>
                </li>
                <li>
                  <a  href="contact.php">Liên hệ</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- mainmenu end -->
          
        </div>
        </div>
        <!-- container -->
      </div>
      <!-- nav end -->
      </header>
      
      <?php
        $ket_noi = mysqli_connect("localhost","root","","mis_booking");
        $id=$_GET["id"];
        $sql = "SELECT * FROM `tbl_tour` WHERE `id_tour` = '".$id."' " ;

        $noi_dung_tour = mysqli_query($ket_noi,$sql);
        while ($row = mysqli_fetch_array($noi_dung_tour))
        {    
      ;?>
      <!-- subheader -->
      <section id="subheader">
        <div class="container-fluid m-5-hor">
          <div class="row">
            <div class="col-md-12">
              <h1 class="big-heading">
                Thông tin địa điểm
              </h1>
              <p>Đúng - Chính xác - Cập nhật liên tục</p>
            </div>
        </div>
       </div>
      </section>
      <!-- subheader end -->
      
      
      <!-- section -->
      <section aria-label="section-blog" id="content">
        <div class="container-fluid">
          <div class="row">
          
      <div class="v-align">
      <div class="col-md-11 col-xs-12">
      <div class="row">
          
        <!-- left content -->
        <div class="col-md-8">
           
        <!-- detail img -->
        
         <div id="projectsBig" class="owl-carousel">
          <div class="item"><img alt="#" src="img/tour/<?php echo $row["anh_1"] ;?>"></div>
          <div class="item"><img alt="#" src="img/tour/<?php echo $row["anh_2"] ;?>"></div>
          
         </div>
        <!-- detail img end -->
          
          <div class="grid-item">
          <!-- text detail -->
           <h3 class="big-heading"><?php echo $row["diem_den"] ;?></h3>
           <p class="intro">Mô tả thông tin chi tiết  </p>
           <p class="content"> <?php echo $row["gioi_thieu_tour"] ;?> </p>
          <!-- text detail end -->
          </div>
          
          <div class="grid-item">
            <img alt="#" class="img-responsive" src="img/tour/<?php echo $row["anh_2"] ;?>">
          </div>
          
          </div>
          <!-- left content end -->
            
            <!-- right content -->
            <div class="col-md-4">
              <aside>
                
                <!-- widget -->
                <div class="widget">
                <div class="service-hotel onStep animated fadeInUp" data-animation="fadeInUp" data-time="1200">
                  <div class="price"><?php echo $row["gia"];?>$<sub>/ <?php echo $row["khoang_thoi_gian"];?></sub></div>
                  <p>Giới thiệu</p>

                  <!-- spacer --> 
                  <div class="space-half"></div> 

                  <h3 class="big-heading">Dịch vụ tiện nghi</h3>
                  <div class="devider-rooms-detail"></div>
                  <span><i class="ti-check-box"></i> <?php echo $row["dich_vu_1"] ;?></span>
                  
                  <span><i class="ti-check-box"></i> <?php echo $row["dich_vu_2"] ;?></span>
                  
                  <span><i class="ti-check-box"></i><?php echo $row["dich_vu_3"] ;?></span>
                  <span><i class="ti-check-box"></i><?php echo $row["dich_vu_4"] ;?></span>
                  <span><i class="ti-check-box"></i><?php echo $row["dich_vu_5"] ;?></span>
                  
                </div>
                <a class="btn-book" href="ecommerce-form.php?id=<?php echo $row["id_tour"] ;?>">ĐẶT NGAY</a> 
                </div>
                <!-- widget end -->
                

                <!-- widget -->
                <div class="widget">
                  <h4 class="big-heading">
                    Slogan
                  </h4>

                  <div class="devider-widget">
                  </div>

                  <div class="tags">
                    <div>
                      <a href="works.php">Ảnh đẹp</a>
                    </div>

                    <div>
                      <a href="about.php">Trends</a>
                    </div>

                    <div>
                      <a href="contact.php">Tương Tác</a>
                    </div>

                    <div>
                      <a href="destination.php">Sáng tạo</a>
                    </div>

                  </div>
                </div>
                <!-- widget end -->

              </aside>
            </div>
            <!-- right content end -->
            
        <!-- spacer -->  
        <div class="space-double"></div>
            
        
        
           </div>
           </div>
           </div>
               
          </div>
        </div>
      </section>
      <!-- section end -->
      <?php
            }
            mysqli_close($ket_noi);
          ;?> 
      <!-- footer -->
      <footer class="main text-center">
        <div class="container-fluid m-5-hor">
          <div class="row">
          
          <div class="onStep" data-animation="fadeInUp" data-time="300">
          <div class="col-md-4 text-left">
          <span><a href="#">Email: htttql@gmail.com</a></span>
          <span>Copyright - 2021 Khoa hệ thống thông tin quản lí - BAV</span>
          </div>
          
          <div class="col-md-4">
                
            </div>
            
            <div class="col-md-4 text-right">
              <span>12 Chùa Bộc, Đống Đa, Hà Nội</span>
              <span>Phone: 024.3852.6419</span>
            </div>
            </div>

            
          </div>
        </div>
      </footer>
      <!-- footer end -->
      
      
      <!-- ScrolltoTop -->
      <div id="totop" class="init">
        <span class="ti-angle-up"></span>
      </div>  

              
    </div>
    <!-- content wraper end --> 
    
    <!-- plugin JS -->
    <script src="plugin/pluginson3step.js"></script> 
    <script src="plugin/bootstrap.min.js"></script>
    <script src='plugin/bootstrap-datepicker.min.js'></script>
    <script src="plugin/sticky.js"></script> 
    <!-- slider revolution  -->
    <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- on3step JS -->
    <script src="js/on3step.js"></script>
    <script src="js/plugin-set.js"></script>
  </body>
</html>