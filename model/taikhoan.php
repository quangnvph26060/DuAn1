<?php

function dangkythanhvien($tk, $pass, $email){
    $sql = "INSERT INTO `taikhoan`( `user`, `pass`, `email`) VALUES ('$tk','$pass','$email') ";
    pdo_execute($sql);
    
}
function check_user($user , $pass){
    $sql = "SELECT * FROM taikhoan WHERE user = '".$user."' and pass = '".$pass."'" ;
    $user =  pdo_query_one($sql);
 
    return $user;
}
function check_email($email){
    $sql = "SELECT * FROM taikhoan WHERE email = '".$email."'";

    $email =  pdo_query_one($sql);

    return $email;
}
function  show_taikhoan($tk,$pass,$email,$diachi,$sdt,$id){
    $sql = "UPDATE `taikhoan` SET `user`='$tk',`pass`='$pass',
    `diachi`='$diachi',`sdt`='$sdt',`email`='$email' WHERE id =".$id;
       
    $user = pdo_execute($sql);
}
function show(){
    $sql = "SELECT * FROM taikhoan WHERE 1 " ;
   $listkh=  pdo_query($sql);
 
    return $listkh;
}
function delete_kh($id){
    $sql = "DELETE FROM `taikhoan` WHERE id = " . $id;
    pdo_execute($sql);
}
function   insert_khach_hang($user, $pass, $diachi, $sdt,$email, $vaitro){
    $sql = "INSERT INTO `taikhoan`( `user`, `pass`, `diachi`, `sdt`, `vaitro`, `email`) 
    VALUES ('$user','$pass','$diachi','$sdt','$vaitro','$email')";
  
    pdo_execute($sql);
}
function show_user($iduser){
    $sql = "SELECT * FROM taikhoan WHERE user = '".$iduser."'" ;
    echo $sql;
     $listkh=  pdo_query($sql);
 
    return $listkh;
}
?>