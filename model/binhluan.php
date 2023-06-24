<?php

function insert_binhluan($idpro,$iduser,$binhluan,$ngaybinhluan){
    $sql = "INSERT INTO `binhluan`( `noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
    VALUES ('$binhluan','$iduser','$idpro','$ngaybinhluan')";
     pdo_execute($sql);
}

function show_binhluan($idpro){
    $sql ="SELECT * FROM `binhluan` where idpro = '".$idpro."' ";
    $list_bl  =   pdo_query($sql);
    return $list_bl;
}
function showall_binhluan(){
    $sql ="SELECT * FROM `binhluan` WHERE 1";
  
    $list  =   pdo_query($sql);
    return $list;
}
function delete_bl($id){ 
    $sql = "DELETE FROM `binhluan` WHERE id = " . $id;
    pdo_execute($sql);
}
?>