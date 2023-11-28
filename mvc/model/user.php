<?php
     include '../controller/conn.php';

     function user_insert($name, $email, $user, $password, $confirmpassword, $address, $img){

        $sql ="INSERT INTO `register` ( `name`,`email`, `user`, `pass`, `confirmpass`,`address`,`images`) 
        VALUES('$name','$email', '$user', md5('$password'), '$confirmpassword','$address','$img')";
        pdo_execute($sql, $name,$email,$user,$password,$confirmpassword,$address,$img);
    }




    function checkuser($user,$pass) {
        
            $sql="Select * FROM register WHERE user=? and pass=?";
            return pdo_query_one($sql, $user,$pass);

        // $conn = pdo_get_connection();
        // $stmt = $conn->prepare("SELECT * FROM register WHERE user ='".$user."' AND pass='".$pass."'");
        // $stmt ->execute();
        // $result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        // $kq=$stmt->fetchAll();
        // if(count($kq)>0) return $kq[0]['role'];
        // else return 0;
    }

    function get_user_info($user,$pass) {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare("SELECT * FROM register WHERE user ='".$user."' AND pass='".$pass."'");
        $stmt ->execute();
        $result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }


?>