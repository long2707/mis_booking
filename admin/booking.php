<?php

$page = 'booking';
session_start();
if (!$_SESSION["da_dang_nhap"]) {
     header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="css/main.css" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark px-4" >
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 14px;">Xin chào, admin</a>
                    <ul class="dropdown-menu dropdown-menu-end drop-menu" aria-labelledby="navbarDropdown">
                        <li class="border-bt"><a class="dropdown-item" href="#!">
                            <i class='bx bxs-user' ></i>
                            Tài khoản</a></li>
                            <li><a class="dropdown-item" href="./logout.php">
                            <i class='bx bx-power-off icon-box'></i>
                            Thoát</a></li>
                       
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    <ul class="nav">
                            <li class=" <?php if($page == 'home'){echo 'active';} ?>">
                               
                                <a class="" href="index.php"><i class='bx bxs-home-circle'></i>
                                    <b>Trang Chủ</b></a>
                            </li>
                            <li class="<?php if($page == 'tour'){echo 'active';} ?>">
                                <a class="" href="tour.php"><i class='bx bxs-landscape'></i>
                                    <b>Tour</b></a>
                            </li>
                            <li class="<?php if($page == 'booking'){echo 'active';}?>">
                                <a class="" href="booking.php"><i class='bx bx-calendar' ></i>
                                    <b>Booking</b></a>
                            </li>
                            <li class="<?php if($page == 'send'){echo 'active';}?>">
                                <a class="" href="./phan_hoi_kh.php"><i class='bx bx-mail-send'></i>
                                    <b>Phản hồi của KH</b></a>
                            </li>
                        
                            <li class="">
                                <a class="" href="setting.php"><i class='bx bxs-brightness'></i>
                                    <b>Thiết Lập</b></a>
                            </li>
                        </ul>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div >
                      <div class="container-list">
                        <div class="display-flex">
                            <h2 class="container-heading">Danh sách Booking</h2>
                           
                        </div>
                      </div>
                        <div class="card mb-4 px-4">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr class="bg-sm">
                                            <th style="text-align: center;">STT</th>
                                            <th style="text-align: center;">Họ và tên</th>
                                            <th style="text-align: center;">Số điện thoại</th>
                                            <th style="text-align: center;">Số căn cước</th>
                                            <th style="text-align: center;">Loại hình du lịch</th>
                                            <th style="text-align: center;">Tour</th>
                                            <th style="text-align: center;">Hình thức thanh toán</th>
                                            <th style="text-align: center;">Giá</th>
                                            <th style="text-align: center;">Xem</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbfoot>
                                       

                                    <tbody>
                                    <?php 
                                        // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                                        include('config.php');

                                        // 2. Viết câu lệnh truy vấn để lấy ra được DỮ LIỆU MONG MUỐN (TIN TỨC đã lưu trong CSDL)
                                        $sql = "
                                                  SELECT * 
                                                  FROM tbl_booking, tbl_tour where tbl_booking.id_tour= tbl_tour.id_tour
                                                  ORDER BY id_booking ASC";

                                        // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
                                        $noi_dung = mysqli_query($ket_noi, $sql);

                                        // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy được
                                        $i=0;
                                        while ($row = mysqli_fetch_array($noi_dung)) 
                                        {
                                            $i++;
                                        ;?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $i;?></td>
                                            <td style="text-align: center;"><?php echo $row["ho_va_ten"];?></td>
                                            <td style="text-align: center;"><?php echo $row["so_dien_thoai"];?></td>
                                            <td style="text-align: center;"><?php echo $row["so_can_cuoc"];?></td>
                                            <td style="text-align: center;"><?php echo $row["loai_hinh_DL"];?></td>
                                            <td style="text-align: center;"><?php echo $row["diem_den"];?></td>
                                            <td style="text-align: center;"><?php echo $row["hinh_thuc_thanh_toan"];?></td>
                                            <td style="text-align: center;"><?php echo $row["gia"];?>$</td>
                                            <td style="text-align: center;"><a href="booking-sua.php?id=<?php echo $row['id_booking'];?>"><i class="bx bxs-show"></i></a></td>
                                            
                                        </tr>                                        
                                        <?php 
                                        }

                                        // 5. Đóng kết nối sau khi sử dụng xong
                                        mysqli_close($ket_noi);
                                    ;?>
                                    </tbody>
                                </table>
                      
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    </body>
</html>
