

<!-- -->
<?php
session_start();

?>

<?php
    
// require 'config/config.php';
require_once 'controller/conn.php';
include 'view/header.php';

// include 'view/bestSeller.php';
// include 'view/detail.php';
// include 'view/promo.php';
if(isset($_REQUEST['page'])) {
    $page = $_REQUEST['page'];
    switch ($page) {
        case 'about';
        include 'view/about.php';
        break;
        case 'blog';
        include 'view/blog.php';
        break;
        case 'shop';
        $dssm='';
        $dssp='';
        include 'view/shop.php';
        break; 
        case 'shoppingcart';
        include 'view/shoppingcart.php';
        break;
        case 'login':
            include 'view/login.php';
            break;
        case 'register';
            include 'view/register.php';
        break;
        case 'logout';
        echo "<script> window.location.href='view/logout.php';</script>";
        break;
        case 'details';
        include 'view/details.php';
        break;
        case 'checkout';
        include 'view/checkout.php';
        break;  
        case 'contact';
        include 'view/contact.php';
        break; 
        default:
        include 'view/cate-time.php';
        break;
    }
}else {
    include 'view/banner-span.php';
    include 'view/cate-time.php';
};
include 'view/footer.php';
?>


