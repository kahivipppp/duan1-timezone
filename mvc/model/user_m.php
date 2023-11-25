<?php
// require_once 'pdo.php';

function user_insert($username, $password, $email){
    $sql = "INSERT INTO user(username, password, email) VALUES (?, ?, ?)";
    pdo_execute($sql, $username, $password, $email);
}

function user_update($username,$password,$email,$diachi,$dienthoai,$role,$id){
    $sql = "UPDATE user SET username=?,password=?,email=?,diachi=?,dienthoai=?,role=? WHERE id=?";
    pdo_execute($sql,$username,$password,$email,$diachi,$dienthoai,$role,$id);    
}

function checkuser($username,$password){
    $sql="Select * from user where username=? and password=?";
    return pdo_query_one($sql, $username,$password);
    // if(is_array($kq)&&(count($kq))){
    //     return $kq["id"];
    // }else{
    //     return 0;
    // }
}
function get_user($id){
    $sql="Select * from user where id=? ";
    return pdo_query_one($sql, $id);
}

// function user_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
//     $sql = "UPDATE user SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ma_kh);
// }

// function user_delete($ma_kh){
//     $sql = "DELETE FROM user  WHERE ma_kh=?";
//     if(is_array($ma_kh)){
//         foreach ($ma_kh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_kh);
//     }
// }

// function user_select_all(){
//     $sql = "SELECT * FROM user";
//     return pdo_query($sql);
// }

// function user_select_by_id($ma_kh){
//     $sql = "SELECT * FROM user WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);
// }

// function user_exist($ma_kh){
//     $sql = "SELECT count(*) FROM user WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// function user_select_by_role($vai_tro){
//     $sql = "SELECT * FROM user WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function user_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE user SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }

function get_dsuser_new($limi){
    $sql = "SELECT * FROM user ORDER BY id asc limit ".$limi;
    return pdo_query($sql);
}


function show_user_admin($dssp){
    $html_userlist='';
    foreach ($dssp as $sp) {
        extract($sp);
        
        $html_userlist.=' <tr>
        <td class="checkbox-cell">
          <label class="checkbox">
            <input type="checkbox">
            <span class="check"></span>
          </label>
        </td>
        <td class="image-cell">
          <div class="image">
            <img src="/DAO/layout/images/" class="rounded-full">
          </div>
        </td>
        <td data-label="Id">'.$id.'</td>
        <td data-label="Username">'.$username.'</td>
        <td data-label="Name">'.$ten.'</td>
        <td data-label="Password">'.$password.'</td>
        <td data-label="Address">'.$diachi.'</td>
        <td data-label="Email">'.$email.'</td>
        <td data-label="Phone">'.$dienthoai.'</td>
        <td data-label="Role">'.$role.'</td>
        <td class="actions-cell">
          <div class="buttons right nowrap">
            <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
              <span class="icon"><i class="mdi mdi-eye"></i></span>
            </button>
            <button class="button small red --jb-modal" data-target="sample-modal" type="button">
              <span class="icon"><i class="mdi mdi-trash-can"></i></span>
            </button>
          </div>
        </td>
      </tr>';
    }
    return $html_userlist;
}
