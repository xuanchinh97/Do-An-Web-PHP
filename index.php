<?php
ob_start();
session_start();
include_once './cauhinh/ketnoi.php';

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Xuân Chinh Mobile</title>
    <meta property="og:type" content="website">
    <meta property="og:title" content="xuanchinh mobile - điện thoại chính hãng">
    <meta property="og:url" content="https://xuanchinhmobile.cf/">
    <meta property="og:image" content="./images/logo.png">
    <meta property="og:description" content="Điện thoại chính hãng, Với phương châm uy tín tạo nên thương hiệu, xuanchinh mobile sẽ đem đến cho bạn những trải nghiệm tốt nhất">
    <link rel="shortcut icon" href="./images/faicon.jpg" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap jquery  -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style css  -->
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/main.js" defer></script>
    <?php
    if (isset($_GET['page_layout'])) {
        switch ($_GET['page_layout']) {
            case 'danhsachtimkiem':
                echo '<link rel="stylesheet" href="./css/danhsachtimkiem.css">';
                break;
            case 'danhsachsp':
                echo '<link rel="stylesheet" href="./css/danhsachsp.css">';
                break;
            case 'chitietsp':
                echo '<link rel="stylesheet" href="./css/chitietsp.css">';
                break;
            case 'giohang':
                echo '<link rel="stylesheet" href="./css/giohang.css">';
                break;
            case 'muahang':
                echo '<link rel="stylesheet" href="./css/muahang.css">';
                break;
            case 'hoanthanh':
                echo '<link rel="stylesheet" href="./css/hoanthanh.css">';
                break;
        }
    }

    ?>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div id="header">
            <div class="row header-navbar">
                <?php include_once './chucnang/timkiem/timkiem.php'; ?>
                <?php include_once './chucnang/login/login.php'; ?>  <!-- log in bị ẩn css/ line 197 -->
                <?php include_once './chucnang/giohang/giohangcuaban.php'; ?>
            </div>
        </div>
        <!-- End Header -->

        <!-- Banner  -->
        <div id="banner">
            <div class="row">
                <div id="logo" class="col-md-4 col-sm-12 col-xs-12">
                    <h1>
                        <a href="index.php">
                            <img src="./images/logo.png" alt="xuanchinh mobile">
                        </a>
                    </h1>
                </div>
                <div id="ship" class="col-md-8 col-sm-12 col-xs-12">
                    <img src="./images/banner.png">
                </div>
            </div>
        </div>
        <!-- End Banner -->

        <!-- Body -->
        <div id="body">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <?php
                    include_once './chucnang/sanpham/danhmucsp.php';
                    include_once './chucnang/quangcao/quangcao.php';
                    include_once './chucnang/thongke/thongke.php';
                    ?>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <?php
                    include_once './chucnang/slideshow/slideshow.php';
                    ?>

                    <div id="main">
                        <?php
                        if (isset($_GET['page_layout'])) {
                            switch ($_GET['page_layout']) {
                                case 'danhsachtimkiem':
                                    include_once './chucnang/timkiem/danhsachtimkiem.php';
                                    break;
                                case 'danhsachsp':
                                    include_once './chucnang/sanpham/danhsachsp.php';
                                    break;
                                case 'chitietsp':
                                    include_once './chucnang/sanpham/chitietsp.php';
                                    break;
                                case 'giohang':
                                    include_once './chucnang/giohang/giohang.php';
                                    break;
                                case 'muahang':
                                    include_once './chucnang/giohang/muahang.php';
                                    break;
                                case 'hoanthanh':
                                    include_once './chucnang/giohang/hoanthanh.php';
                                    break;
                                case 'baohanh':
                                    include_once './chucnang/baohanh/baohanh.php';
                                    break;
                                case 'huongdanmuahang':
                                    include_once './chucnang/huongdanmuahang/huongdanmuahang.php';
                                    break;
                                case 'gioithieu':
                                    include_once './chucnang/gioithieu/gioithieu.php';
                                    break;
                            }
                        } else {
                            include_once './chucnang/sanpham/sanpham.php';
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Body -->

        <div id="brand">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img class="img-thumbnail" src="./images/brand.png">
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div id="footer">
            <div class="row ">
                <div id="footer-main" class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row footer-wide">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <h3 class="footer-heading">hỏi đáp</h3>
                            <ul class="footer__list">
                                <li class="footer__item">
                                    <a href="index.php?page_layout=baohanh" class="footer__item__link underline">Chính Sách Bảo Hành</a>
                                </li>
                                <li class="footer__item">
                                    <a href="index.php?page_layout=huongdanmuahang" class="footer__item__link underline">Hướng Dẫn Mua Hàng</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <h3 class="footer-heading">Về Website</h3>
                            <ul class="footer__list">
                                <li class="footer__item">
                                    <a href="index.php?page_layout=gioithieu" class="footer__item__link underline">Giới Thiệu Về XuanChinh Mobile</a>
                                </li>
                                <li class="footer__item">
                                    <a href="https://www.facebook.com/xuanchinhmobileshop/" class="footer__item__link underline">Tuyển Dụng</a>
                                </li>
                                <li class="footer__item">
                                    <a href="#" class="footer__item__link underline">Điều Khoản website</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <h3 class="footer-heading">kênh truyền thông</h3>
                            <ul class="footer__list">
                                <li class="footer__item">
                                    <a href="https://www.facebook.com/chih.97" target="_blank" class="footer__item__link underline">
                                        <i class="fab fa-facebook"></i>
                                        Facebook</a>
                                </li>
                                <li class="footer__item">
                                    <a href="https://www.facebook.com/xuanchinhmobileshop/" target="_blank" class="footer__item__link underline">
                                        <i class="fab fa-facebook-square"></i>
                                        Fanpage</a>
                                </li>
                                <li class="footer__item">
                                    <a href="https://www.instagram.com/txcka35" target="_blank" class="footer__item__link underline">
                                        <i class="fab fa-instagram"></i>
                                        Instagram</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h4>xuanchinh mobile điện thoại cao cấp chính hãng</h4>
                    <img src="./images/copyright.png" class="footer__coppyright-img" alt="đã đăng kí bộ công thương">

                    <p><b>Địa chỉ:</b> 220 Nguyễn Khoái, Hai Bà Trưng, Hà Nội | <b>Hotline:</b> 0968 999 999</p>
                    <h3 class="footer__copyright-text">©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>-Power by
                        <span>XuanChinh</span>
                    </h3>
                </div>
            </div>
        </div>
        <!-- End Footer -->
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

    <!-- chat bot, don't use can delete  -->
    <script type="text/javascript" src="https://ahachat.com/customer-chats/customer_chat_khTHhHdULx614813d86247b.js"></script>

</body>

</html>