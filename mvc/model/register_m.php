<?php
session_start();
ob_start();
include '../controller/conn.php';
include 'user.php';
if(isset($_POST['submit'])){

    echo "<pre>";
    print_r($_POST);
    $name = $_POST['name'];
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $address = $_POST['address'];
    $confirmpassword = $_POST['confirmpassword'];
    $img = $_FILES['images']['name'];
    $email = $_POST['email'];
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

    
    // star
    //PHP
    if(!empty($user)&&!empty($email)&&!empty($pass)&&!empty($confirmpassword)&&!empty($address)&&!empty($img)){
        //insert
        echo "<pre>";
        print_r($_POST);
        
        $sql = "INSERT INTO `register` ( `name`,`email`, `user`, `pass`, `confirmpass`,`address`,`images`,`role`) 
                VALUES('$name','$email', '$user', md5('$pass'), '$confirmpassword','$address','$img','$role')";
        $conn = pdo_get_connection();
        if($conn->query($sql)===TRUE){
            echo "BAN DA DANG KY THANH CONG!";
        }
    } 
    else {
        echo "Ban can nhap day du thong tin"; 
    }
}



?>
<br>
<a href="../init.php">Return.</a>