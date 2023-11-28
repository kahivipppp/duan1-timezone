<?php
session_start();
ob_start();
require_once '../controller/conn.php';
require_once 'user.php';

 if(isset($_POST['btn_login'])&& isset($_POST['btn_login'])){
    $user =$_POST['user'];
    $pass =md5($_POST['pass']);
    $role= checkuser($user,$pass);
    echo "Submit";
    echo "<pre>";
    //gan session
    $_SESSION['user']=$user;
    $_SESSION['pass']=$pass;
    $_SESSION['role']=$role;
    //kiemtra
    $role=checkuser($user,$pass);
        if(isset($user)&&(is_array($user))&&(count($user)>0)){
            extract($user);
            if($role==1){
                $_SESSION['user']=$user;
                header('location: ../init.php');
            }else{
                $tb="Tài khoản này không có quyền đăng nhập trang quản trị";
            }
        }else{
            $tb="Tài khoản này không tồn tại. Hoặc đã nhầm!";
        }
    
    
    $conn = pdo_get_connection();   
    $stmt = $conn -> prepare("SELECT * FROM register WHERE user =? and pass=?");
    $stmt ->execute([$user, $pass]);
    $user = $stmt -> fetch(); 
    if($user){
        $_SESSION['login']['img']= $user['img'] ;
        $_SESSION['login']['user']= $user['user'] ;
        header("location: ../init.php");
    } else {
        echo "fail";
    }
    $conn = null;
}

?>
<br>
<a href="../init.php">Return.</a>
