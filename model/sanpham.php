<?php

// thêm vào database
function insert_san_pham($name_sp,$gia,$hinh,$mota,$iddm){
    $sql = "INSERT INTO `sanpham`( `name_sp`, `price`,`img`, `mota`, `iddm`) 
    VALUES ('$name_sp','$gia','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
// hiện  tất cả danh mục

function show_san_pham($kyw,$iddm){
    $sql ="SELECT * FROM `sanpham` where 1 ";
    if($kyw !=""){
        $sql .= " and name_sp like '%" .$kyw. "%'";
    }
    if($iddm > 0){
        $sql .= " and iddm = '" .$iddm. "'";
    }

    $listsp  =   pdo_query($sql);
    return $listsp;
}

// xóa danh muc 
function delete_san_pham($id){
    $sql = "DELETE FROM `sanpham` WHERE id = " . $id;
    pdo_execute($sql);
}
// cập nhật danh mục
function update_san_pham($id){
    $sql = "SELECT * FROM sanpham WHERE id=" .$id;
    $upsp =  pdo_query_one($sql);
    return $upsp;
}
function sua_san_pham($id,$ten_sp,$gia,$hinh,$mota,$iddm){
    if($hinh!=""){
          $sql ="UPDATE `sanpham` SET `name_sp`='".$ten_sp."',`price`='".$gia."',`img`='".$hinh."'
    ,`mota`='".$mota."',`iddm`='".$iddm."' WHERE id =" .$id;
    
    }else{
        $sql ="UPDATE `sanpham` SET `name_sp`='".$ten_sp."',`price`='".$gia."'
        ,`mota`='".$mota."',`iddm`='".$iddm."' WHERE id =" .$id;  
    }
  
   
    pdo_execute($sql);
}

//  cho ra màn hình 





//show sản phẩm ra html
function show_san_pham_home($tk){
    $sql ="SELECT * FROM `sanpham` where 1  ";
    if($tk !=""){
        $sql .= " and name_sp like '%".$tk."%'";
    }
    

    $sql .=" order by id desc  limit 0,9 ";
    $listsp  =   pdo_query($sql);
    return $listsp;
}
function top10_love(){
    $sql ="SELECT * FROM `sanpham` where 1 order by luotxem desc limit 0,7";
    $top10 =   pdo_query($sql);
    return $top10;
}


function ten_sanPham($iddm){
    $sql = "SELECT * FROM danhmuc WHERE id=" .$iddm;
    $tensp =  pdo_query_one($sql);
 
    return $tensp;
}
function san_pham_one($id){
    $sql = "SELECT * FROM sanpham WHERE id=" .$id;
    $onesp =  pdo_query_one($sql);
    return $onesp;
}
function san_pham_cung_loai($id , $iddm){
    $sql = "SELECT * FROM sanpham WHERE iddm=".$iddm." and id <> " .$id;
    $cungloai =   pdo_query($sql);
    return $cungloai;
}

function ten_san_pham(){
    $sql ="SELECT * FROM `sanpham` where 1 ";
    $listsp  =   pdo_query($sql);
    return $listsp;
}

// sắp xếp 
function desc(){
    $sql = "SELECT * FROM `sanpham` ORDER BY `sanpham`.`price` desc limit 0,9";
    echo $sql;
    $desc =  pdo_query($sql);
    return $desc;
}
function asc(){
    $sql = "SELECT * FROM `sanpham` ORDER BY `sanpham`.`price` asc limit 0,9";
    echo $sql;
    $asc =  pdo_query($sql);
    return $asc;
}
function az(){
    $sql = "SELECT * FROM `sanpham` ORDER BY `sanpham`.`name_sp` asc limit 0,9";
    echo $sql;
    $az =  pdo_query($sql);
    return $az;
}
?>
