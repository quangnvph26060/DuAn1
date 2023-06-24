<?php
session_start();

include  "../../model/pdo.php";
include  "../../model/binhluan.php";
include  "../../model/taikhoan.php";
$idpro = $_REQUEST['idpro'];

$list_bl = show_binhluan($idpro);
// $showuser = show();
// if(isset($showuser)){
//     extract($showuser);
//     echo $showuser['user'];
// }




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/style.css">
</head>
<style>
    table {
        width: 100%;
        margin-left: 10px;
    }

    table td {
        width: 100%;
    }

    table td:nth-child(1) {
        width: 50%;
    }

    table td:nth-child(2) {
        width: 20%;
    }

    table td:nth-child(3) {
        width: 30%;
    }

    .btnbl {
        padding: 6px;
        margin-left: 20px;
        padding: 6px 20px;
    }
</style>

<body>


    <div class="row mb ">
        <div class="boxtitle">Bình Luận</div>
        <div class="boxcontent2 menudoc">

            <table>
                <?php

               

                foreach ($list_bl as $bl) {
                    extract($bl);


                  
                    echo '
                        <tr>
                            <td>' . $noidung . '</td>
                            <td>' . $idumser . '</td>
                         
                            <td>' . $ngaybinhluan . '</td>
                        </tr>
                     ';
                }
                ?>

            </table>
        </div>
        <?php    
            if(isset( $_SESSION['user'])){
                extract($_SESSION['user']);
            
        ?>
           
        <div class="boxfooter menudoc1">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="text" name='binhluan'>
                <button name="addbl" class="btnbl">Gửi</button>
            </form>
        </div>
        <?php }else{?>
            <div class="boxfooter menudoc1">
                    <span style="color: red; font-weight: bold;">Vui lòng<a href="index.php?act=home" id="dn" onclick="return confirm ('Bạn Hãy Đăng Nhập Để Bình Luận !!!')">Đăng Nhập</a> Để Bình Luận!!!</span>
            </div>
            <?php }?>
    </div>
    <?php
    if (isset($_POST[' '])) {
        $binhluan = $_POST['binhluan'];
        $idpro = $_POST['idpro'];
        $iduser = $_SESSION['user']['user'];
        $ngaybinhluan = date('h:i:sa d/m/Y');
        insert_binhluan($idpro, $iduser, $binhluan, $ngaybinhluan);
        header("location: " . $_SERVER['HTTP_REFERER']);
    }



    ?>
</body>

</html>