
<?php
    session_start();
    ob_start();
    // include 'controller/user.php';

    require_once 'controller/conn.php';
    include 'view/header.php';
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
            if(isset($_POST['btn_login'])&& isset($_POST['btn_login'])){
                $user=$_POST["user"];
                $pass=$_POST["pass"];
                $kq=get_user_info($user,$pass);
                $role=$kq[0]['role'];
                if($role==1)
                {
                    $_SESSION['role']=$role;
                    header('location: admin.php');
                }else{
                    $_SESSION['role']=$role;
                    $_SESSION['id']=$kq[0]['id'];
                    $_SESSION['user']=$kq[0]['user'];
                    header('location: init.php');
                    break;
                }
            }
        case 'login';
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
    include 'view/home.php';
};
include 'view/footer.php';
?>


