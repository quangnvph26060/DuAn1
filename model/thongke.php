<?php
function thongke(){
    $sql = " SELECT danhmuc.id  as madm , danhmuc.name  as tendm , count(sanpham.id) as countsp , 
        min(sanpham.price) as minprice , max(sanpham.price) as maxprice , avg(sanpham.price) as avggia from sanpham  
        INNER join danhmuc on danhmuc.id = sanpham.iddm group by danhmuc.id  order by danhmuc.id desc"; 
    // $sql .= "    ";
    // $sql .= " group by danhmuc.id  order by danhmuc.id desc";

    $listtk = pdo_query($sql);
    return $listtk;

}