<?php
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhhmuc.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include_once "header.php";




// controller

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // kiểm tra xem người dùng có click vào nút add hay ko
            if (isset($_POST['btn'])) {
                $name = $_POST['tenloai'];
                $err = [];
                if ($name == "") {
                    $err['tenloai'] = "Vui Lòng Nhập";
                }

                if (!$err) {
                    insert_danh_muc($name);
                    $thongbao = "Thêm Thành Công";
                }
                // $sql = "INSERT INTO danhmuc(name) VALUES('$name')";
                // pdo_execute($sql);

                // setcookie('error', 'Thêm Thành Công ', time() + 1);
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            //show tất cả danh mục
            $listdm = show_danh_muc();
            // $sql = "SELECT * FROM danhmuc order by name";
            // $listdm  =   pdo_query($sql);
            include_once "danhmuc/list.php";
            break;
        case 'deldm':
            // xóa danh mục
            if (isset($_GET['id'])) {
                delete_danh_muc($_GET['id']);
                // $sql = "DELETE FROM `danhmuc` WHERE id = " . $_GET['id'];
                // pdo_execute($sql);
            }
            $listdm = show_danh_muc();
            // $sql = "SELECT * FROM danhmuc order by name";
            // $listdm =   pdo_query($sql);
            include_once "danhmuc/list.php";
            break;
        case 'updatedm':
            // show ra loai mà mình sửa
            if (isset($_GET['id'])) {
                // $sql = "SELECT * FROM danhmuc WHERE id=" . $_GET['id'];
                // $updm =  pdo_query_one($sql);
                $updm = update_danh_muc($_GET['id']);
            }
            include_once "danhmuc/update.php";
            break;
        case 'suadm':
            // sửa danh mục
            if (isset($_POST['upbtn'])) {
                $name = $_POST['tenloai1'];
                $id = $_POST['id'];

                // $sql = "UPDATE `danhmuc` SET `name`='".$name."' WHERE id= ".$id;
                // pdo_execute($sql);
                sua_danh_muc($id, $name);
                $thongbao = "Sửa Thành Công";
            }
            // $sql = "SELECT * FROM danhmuc order by name";
            // $listdm =   pdo_query($sql);
            $listdm = show_danh_muc();
            include_once "danhmuc/list.php";
            break;


            // SẢN PHẨM

        case 'addsp':
            // kiểm tra xem người dùng có click vào nút add hay ko
            if (isset($_POST['btnadd'])) {
                $iddm = $_POST['iddm'];
                $name_sp = $_POST['sanpham'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $luotxem = $_POST['luotxem'];

                //updateload file
                $hinh = $_FILES['anh']['name'];
                $target_dir = "../upload/"; // thư mục chứa ảnh 
                $target_file = $target_dir . basename($_FILES['anh']['name']);
                // validate
                $addsp = [];
                // tên sản phẩm
                if ($name_sp == "") {
                    $addsp['sanpham'] = "Vui Lòng Nhập đầy đủ thông tin";
                }
                // giá sản phẩm 
                if ($gia == "") {
                    $addsp['gia'] = " Vui Lòng Nhập Giá Sản Phẩm";
                }
                if ($gia < 0) {
                    $addsp['gia'] = " Vui Lòng Nhập Giá Sản Phẩm Lớn Hơn  0";
                }
                // mô tả
                if ($mota == "") {
                    $addsp['mota'] = "Vui Lòng Nhập đầy đủ thông tin";
                }
                // lươt xem
                if ($luotxem == "") {
                    $addsp['luotxem'] = "Vui Lòng Nhập đầy đủ thông tin";
                }
                if ($luotxem < 0) {
                    $addsp['luotxem'] = " Vui Lòng Nhập Lượt xem  Lớn Hơn  0";
                }


                if (!$addsp) {
                    if (move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)) {
                        // echo " The File" . htmlspecialchars(basename($_FILES["fileToUpload"]['name'])). "has been upload";

                    } else {
                        // echo "Xin Lỗi";
                    }
                    insert_san_pham($name_sp, $gia, $hinh, $mota, $iddm);
                    $thongbao = "Thêm Thành Công";
                }
            }
            $listdm = show_danh_muc();

            include "sanpham/add.php";
            break;
        case 'listsp':
            //show tất cả danh mục
            if (isset($_POST['btntk'])) {

                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';

                $iddm = 0;
            }
            $listsp = show_san_pham($kyw, $iddm);

            $listdm = show_danh_muc();
            // $sql = "SELECT * FROM danhmuc order by name";
            // $listdm  =   pdo_query($sql);
            include_once "sanpham/list.php";
            break;
        case 'delsp':
            // xóa danh mục
            if (isset($_GET['id'])) {
                delete_san_pham($_GET['id']);
                // $sql = "DELETE FROM `danhmuc` WHERE id = " . $_GET['id'];
                // pdo_execute($sql);
            }
            $listsp = show_san_pham("", 0);
            // $sql = "SELECT * FROM danhmuc order by name";
            // $listdm =   pdo_query($sql);
            include_once "sanpham/list.php";
            break;
        case 'updatesp':
            // show ra sản phẩm mà mình sửa
            if (isset($_GET['id'])) {
                // $sql = "SELECT * FROM danhmuc WHERE id=" . $_GET['id'];
                // $updm =  pdo_query_one($sql);
                $upsp = update_san_pham($_GET['id']);
            }

            $listdm = show_danh_muc();
            include_once "sanpham/update.php";
            break;
        case 'suasp':
            // sửa danh mục
            if (isset($_POST['upbtn'])) {
                $ten_sp = $_POST['sanpham'];
                $gia = $_POST['gia'];
                // hình cũ 

                $mota = $_POST['mota'];
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                //updateload file
                $hinh = $_FILES['anh']['name'];
                $target_dir = "../upload/"; // thư mục chứa ảnh 
                $target_file = $target_dir . basename($_FILES['anh']['name']);
                if (move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)) {
                    // echo " The File" . htmlspecialchars(basename($_FILES["fileToUpload"]['name'])). "has been upload";

                } else {
                    // echo "Xin Lỗi";
                }
                // $sql = "UPDATE `danhmuc` SET `name`='".$name."' WHERE id= ".$id;
                // pdo_execute($sql);
                sua_san_pham($id, $ten_sp, $gia, $hinh, $mota, $iddm);
                $thongbao = "Sửa Thành Công";
            }
            // $sql = "SELECT * FROM danhmuc order by name";
            // $listdm =   pdo_query($sql);
            $listdm = show_danh_muc();
            $listsp = show_san_pham("", 0);
            include_once "sanpham/list.php";
            break;
        case 'listkh';
            $listkh = show();
            include_once "khachhang/listkh.php";
            break;
        case 'delkh':
            // xóa danh mục
            if (isset($_GET['id'])) {
                $id  = $_GET['id'];
                delete_kh($id);
            }
            $listkh = show();

            include_once "khachhang/listkh.php";
            break;
        case 'addkh':
            // kiểm tra xem người dùng có click vào nút add hay ko
            if (isset($_POST['btnadd'])) {
                $user = $_POST['tenkh'];
                $pass = $_POST['pass'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $vaitro = $_POST['vaitro'];

                // validate
                $err = [];
                if ($user == "") {
                    $err['tenkh'] = "Vui Lòng Nhập Tên Khách Hàng";
                }
                if ($pass == "") {
                    $err['pass'] = "Vui Lòng Nhập Mật Khẩu";
                }
                if ($diachi == "") {
                    $err['diachi'] = "Vui Lòng Nhập Địa Chỉ";
                }
                if ($email == "") {
                    $err['email'] = "Vui Lòng Nhập Email";
                }
                if ($vaitro == "") {
                    $err['vaitro'] = "Vui Lòng Nhập Vai Trò";
                }

                if (!$err) {
                    insert_khach_hang($user, $pass, $diachi, $sdt, $email, $vaitro);

                    $thongbao = "Thêm Thành Công";
                }



                // $sql = "INSERT INTO danhmuc(name) VALUES('$name')";
                // pdo_execute($sql);

                // setcookie('error', 'Thêm Thành Công ', time() + 1);
            }

            // $listkh = show();

            include "khachhang/addkh.php";
            break;
        case 'listbl':

            $showbl =   showall_binhluan();
            include "binhluan/listbl.php";
            break;
        case 'delbl':
            // xóa danh mục
            if (isset($_GET['id'])) {
                $id  = $_GET['id'];

                delete_bl($id);
            }
            $showbl =   showall_binhluan();

            include_once "binhluan/listbl.php";
            break;
        case 'listtk':
            $listtk = thongke();
            include_once "thongke/list.php";



            break;
        default:
            include_once "home.php";
            break;
    }
} else {
    include_once "home.php";
}

include_once "footer.php";
