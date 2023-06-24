<?php

// thêm vào database
function insert_danh_muc($name){
    $sql = "INSERT INTO danhmuc(name) VALUES('$name')";
    pdo_execute($sql);
}
// hiện  tất cả danh mục
function show_danh_muc(){
    $sql = "SELECT * FROM danhmuc order by name ASC";
    $listdm  =   pdo_query($sql);
    return $listdm;
}
// xóa danh muc 
function delete_danh_muc($id){
    $sql = "DELETE FROM `danhmuc` WHERE id = " . $id;
    pdo_execute($sql);
}
// cập nhật danh mục
function update_danh_muc($id){
    $sql = "SELECT * FROM danhmuc WHERE id=" .$id;
    $updm =  pdo_query_one($sql);
    return $updm;
}
function sua_danh_muc($id,$name){
    $sql = "UPDATE `danhmuc` SET `name`='".$name."' WHERE id= ".$id;
    pdo_execute($sql);
}



// show ra trang chủ

function show_danh_muc_home(){
    $sql = "SELECT * FROM danhmuc order by name ASC limit 0,8";
    $listdm  =   pdo_query($sql);
    return $listdm;
}

?>