<?php
session_start();
if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
include "../duanmau2022/model/pdo.php";
include "../duanmau2022/model/sanpham.php";
include "../duanmau2022/model/danhhmuc.php";
include "../duanmau2022/model/taikhoan.php";
include "../duanmau2022/model/cart.php";

include "img.php";
include "view/header.php";


$sphome = show_san_pham_home("");
$dm_home = show_danh_muc_home();
$top10 = top10_love();
if (isset($_GET['act'])) {
    $act  = $_GET['act'];
    switch ($act) {
            // lớn đến bé
        case 'desc':
            if (!isset($_POST['desc'])) {
                $desc =   desc();
                include "view/desc.php";
            }
            break;

        case 'asc':
            if (!isset($_POST['asc'])) {
                $asc =   asc();
                include "view/asc.php";
            }
            break;
        case 'az':
            if (!isset($_POST['az'])) {
                $az =   az();
                include "view/az.php";
            }
            break;
        case 'home':
            include "view/home.php";
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'hoidap':
            include "view/hoidap.php";
            break;
        case 'tksp':
            if (isset($_POST['timkiem'])) {
                $tk = $_POST['timkiem'];
            } else {
                $tk = "";
            }

            $sphome = show_san_pham_home($tk);
            // $dm_home = show_danh_muc_home();
            include "view/home.php";
            break;
        case 'sanphamct':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $onesp = san_pham_one($id);
                extract($onesp);
                $cungloai = san_pham_cung_loai($id, $iddm);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }

            break;

        case 'dktv':
            if (isset($_POST['dangky'])) {
                $tk = $_POST['tk'];
                $pass  = $_POST['pass'];
                $email = $_POST['email'];
                dangkythanhvien($tk, $pass, $email);
                $thongbao = "Đăng Ký Thành Công ";
            }
            include "view/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['password'];
                $check_user =   check_user($user, $pass);
                if (is_array($check_user)) {
                    $_SESSION['user'] = $check_user;
                    header("location:index.php");

                    $thongbao = "Đăng nhập thành công";
                } else {

                    $thongbao = "Tài Khoản Hoặc Mật Khẩu Không Chính Xác";
                    include "view/home.php";
                }
            }
            break;

        case "edit_taikhoan":

            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tk = $_POST['tk'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                show_taikhoan($tk, $pass, $email, $diachi, $sdt, $id);

                $thongbao = "Cập Nhật Thành Công";
            }
            include "view/edit_taikhoan.php";
            break;


        case 'quenmatkhau';
            if (isset($_POST['guimk'])) {
                $email = $_POST['email'];
                $checkemail =  check_email($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật Khẩu Của Bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao = "Email Không Tồn Tại";
                }
            }

            include "view/quenmatkhau.php";
            break;
        case 'thoat':
            session_destroy();
            header("location:index.php");
            break;


            //giỏ hàng 
        case 'addtocart';
            if (isset($_POST['addtocart1'])) {
                $id = $_POST['id'];
                $name_sp = $_POST['name_sp'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien  = $soluong * $price;
                $fl = 0;

                    // kiểm tra xem có trùng sản phẩm hay không ?
                for ($i = 0; $i < sizeof($_SESSION['mycart']); $i++) {

                    if ($_SESSION['mycart'][$i][1] == $name_sp) {
                        $fl = 1;
                        $soluongnew = $soluong + $_SESSION['mycart'][$i][4];
                        $_SESSION['mycart'][$i][4] = $soluongnew;
                        break;
                    }
                }

                if ($fl == 0) {
                    $spadd = [$id, $name_sp, $img, $price, $soluong, $ttien];
                    $_SESSION['mycart'][] = $spadd;

                    // kiểm tra id xem có bằng với id trong giỏ hàng hay không 
                }
            }
            include "view/cart/viewcart.php";
            break;
        case 'sanpham':
            if (isset($_GET['iddm'])) {
                $iddm = $_GET['iddm'];

                $ds_san_pham = show_san_pham("", $iddm);
                $tendm = ten_sanPham($iddm);


                include "view/sanpham.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'del_cart':
            if (isset($_GET['idcart'])) {


                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header("location:index.php?act=viewcart");
            break;

        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;



            // case 'hd':
            //     if (!isset($_POST['hd'])) {
            //         $ten1 = $_POST['name'];
            //         $email1 = $_POST['email'];
            //         $sdt1 = $_POST['sdt'];
            //         $diachi1 = $_POST['diachi'];
            //         $pttt = $_POST['pttt'];
            //         $ngaydathang = date('h:i:sa d/m/Y');
            //         $tongdonhang = tongdonhang();
            //         $idbill = insert_bill($ten1, $email1, $diachi1, $sdt1, $ngaydathang, $tongdonhang, $pttt);
            //         include "view/cart/HD.php";
            //     }

            //     break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
