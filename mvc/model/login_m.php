<?php
    session_start();
    include "../model/conn.php";
    include "../model/user.php";
    if(isset($_POST["login"])&&($_POST["login"])){
        $uname=$_POST["user"];
        $psw=$_POST["pass"];
        $user=checkuser($uname,$psw);
        $_SESSION['role']=$user;
        if($user==1) header('location: ../init.php');
        else{
            $txt_erro="ko ton tai!";
         } //header('location: ../view/login.php');

    }
?>