<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../public/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/style.css" type="text/css">
</head>

<body>





    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="../public/img/icon/search.png" alt=""></a>
            <a href="#"><img src="../public/img/icon/heart.png" alt=""></a>
            <a href="#"><img src="../public/img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Miễn phí vận chuyển, đảm bảo hoàn trả hoặc hoàn tiền trong 30 ngày.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Miễn phí vận chuyển, đảm bảo hoàn trả hoặc hoàn tiền trong 30 ngày.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <!-- <a href="#">Sign in</a> -->
                                <ul>
                                <?php  if(!isset($_SESSION['login'])){?>
                                    <li><a href="init.php?page=login">Đăng nhập</a></li>
                                    <!-- <li><a href="init.php?page=register">dang ky</a></li> -->
                                    <?php }else{?>

                                        
                                        <a style = "color: white;">
                                        <?php                          
                                            echo $_SESSION['login']['user'];
                                        ?>
                                        </a>
                                        <li><a href="init.php?page=logout">Đăng xuất</a></li>
                                <?php
                
                    
                                // $img =  $_SESSION['login']['img'];
                                // echo "<img src='../public/img/client/$img' alt = 'No img' style = 'width: 50px; border-radius: 30px; margin-top: -4px; '>";
                        
                            
                            ?>
    
                        

                            <?php }?>
                                </ul>
                                <!-- <a href="#">FAQs</a> -->
                            </div>
                            <div class="header__top__links">

                            </div>

                            
                            <!-- <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./init.html"><img src="../public/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="init.php">Trang chủ</a></li>
                            <li><a href="init.php?page=shop">Cửa hàng</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="init.php?page=about">Về chúng tôi</a></li>
                                    <li><a href="init.php?page=details">Chi tiết sản phẩm</a></li>
                                    <li><a href="init.php?page=shoppingcart">Giỏ hàng</a></li>
                                    <li><a href="init.php?page=checkout">Check Out</a></li>
                                    <li><a href="./blog-details.html">Bài viết chi tiết</a></li>
                                </ul>
                            </li>
                            <li><a href="init.php?page=blog">Bài viết</a></li>
                            <li><a href="init.php?page=contact">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="../public/img/icon/search.png" alt=""></a>
                        <a href="#"><img src="../public/img/icon/heart.png" alt=""></a>
                        <a href="#"><img src="../public/img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="../public/js/jquery-3.3.1.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/jquery.nice-select.min.js"></script>
    <script src="../public/js/jquery.nicescroll.min.js"></script>
    <script src="../public/js/jquery.magnific-popup.min.js"></script>
    <script src="../public/js/jquery.countdown.min.js"></script>
    <script src="../public/js/jquery.slicknav.js"></script>
    <script src="../public/js/mixitup.min.js"></script>
    <script src="../public/js/owl.carousel.min.js"></script>
    <script src="../public/js/main.js"></script>



</body>

</html>