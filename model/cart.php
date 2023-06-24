<?php

function viewcart($del)
{
    $i = 0;
    $tong = 0;
    if ($del == 1) {
        $del_th = '  <th>Thao Tác</th>';

        $del_cart_td2 = '  <td></td>';
    } else {
        $del_th = '';

        $del_cart_td2 = '';
    }
    echo '  <tr>
            <th>Hình</th>
            <th>Sản Phẩm</th>
            <th>Đơn Giá</th>
            <th>Số Lượng</th>
            <th>Thành Tiền</th>
            ' . $del_th . '

              </tr>';
  
    var_dump($_SESSION['mycart']);
    foreach ($_SESSION['mycart'] as $cart) {
       
       
        
       



        $hinhpath = "upload/";

        $hinh = $hinhpath  . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if ($del == 1) {

            $del_cart_td = "index.php?act=del_cart&idcart=" . $i;
            $del_td = '<input type="button" value="Xóa">';
        } else {

            $del_td = '';
            $del_cart_td = "";
        } 
     

        echo '
   


      <tr>
            <td>  <img  src="' . $hinh . '" alt="" height="80px"></td>
            <td>' . $cart[1] . '</td>
            <td>' . $cart[3] . '</td>
            <td>' . $cart[4]. '</td>
            <td>  ' . number_format($ttien) . ' VNĐ</td>
            <td> <a href="' . $del_cart_td . '">' . $del_td . '</a></td>

      </tr>                   
    ';
        $i += 1;
    }
    echo '
    <tr>
      
      
        <td colspan="4">Tông Thành Tiền:</td>
        <td>  ' . number_format($tong) . '  VNĐ</td>
      ' . $del_cart_td2 . '
     </tr>     
';
}


function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_bill($ten1, $email1, $diachi1, $sdt1, $ngaydathang, $tongdonhang, $pttt)
{
    $sql = "INSERT INTO `bill`( `ten`, `email`, `diachi`, `sdt`, `ngaydathang`, `tongdonhang`, `bill_pttt`) 
    VALUES ('$ten1','$email1','$diachi1','$sdt1','$ngaydathang','$tongdonhang' ,'$pttt')";
    echo $sql;
    return  pdo_Bill_lastInsertId($sql);
}
function insert_cart($iduser, $img, $name, $price, $soluong, $thanhtien, $idbill, $idpro)
{
    $sql = "INSERT INTO `cart`( `iduser`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`, `idpro`)
     VALUES ('$iduser','$img','$name','$price','$soluong','$thanhtien','$idbill','$idpro')";
    echo $sql;
    return  pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "SELECT * FROM `bill` where id =  " . $id;
    $bill  =   pdo_query($sql);
    return $bill;
}
