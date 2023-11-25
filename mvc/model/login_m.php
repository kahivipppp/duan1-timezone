<?php
session_start();
require_once 'controller/conn.php';

 if(isset($_POST['btn_login'])&& isset($_POST['btn_login'])){
    $usr =$_POST['usr'];
    $pwd =md5($_POST['pwd']);
    echo "Submit";
    echo "<pre>";
    //gan session
    $_SESSION['usr']=$usr;
    $_SESSION['pwd']=$pwd;
    $stmt = $conn -> prepare("SELECT * FROM register WHERE Username =? and password=?");
    $stmt ->execute([$usr, $pwd]);
    $usr = $stmt -> fetch(); 
    //
    if($usr){
        $_SESSION['login']['img']= $usr['img'] ;
        $_SESSION['login']['name']= $usr['name'] ;
        header("location: ../init.php");
    } else {
        echo "fail";
    }
    $conn = null;
}

?>
<!-- <br>
<a href="../init.php">Return.</a> -->