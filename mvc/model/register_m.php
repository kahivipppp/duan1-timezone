<?php
// session_start();
// include 'controller/conn.php';
// require 'conn.php';

// if(isset($_POST['submit'])){
//     echo "Submit";
//     echo "<pre>";
//     print_r($_POST);
//     $username = $_POST['name'];
//     $password = $_POST['password'];
//     $confirmpassword = $_POST['confirmpassword'];
//     $img = $_FILES['img']['name'];
//     $email = $_POST['email'];
//     // star
//     //PHP
//     if(!empty($username)&&!empty($email)&&!empty($password)&&!empty($confirmpassword)&&!empty($img)){
//         //insert
//         echo "<pre>";
//         print_r($_POST);

//         $sql = "INSERT INTO `register` ( `Username`, `email`, `password`, `confirmpassword`, `img`) 
//                 VALUES('$username', '$email', md5('$password'), '$confirmpassword', '$img')";
//         if($conn->query($sql)===TRUE){
//             echo "BAN DA DANG KY THANH CONG!";
//         }
//     } 
//     else {
//         echo "Ban can nhap day du thong tin"; 
//     }
// }
// echo "<pre>";
// print_r($_POST);

function user_insert($username, $email, $password, $confirmpassword, $img){
    $sql = "INSERT INTO `register` ( `Username`, `email`, `password`, `confirmpassword`, `img`) 
                VALUES('$username', '$email', md5('$password'), '$confirmpassword', '$img')";
    pdo_execute($sql, $username, $password, $email);
}


?>
<br>
<a href="../init.php">Return.</a>