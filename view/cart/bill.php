<div class="row mb ">
    <div class="boxtrai mb ">
        <style>
            .fromdangky input {
                width: 50%;
                padding: 10px 10px;

            }

            .fromdangky button {
                padding: 10px 20px;
                border-radius: 10px;
            }

            .err {
                color: red;
                font-weight: bold;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                text-align: center;
            }

            #a1 {
                padding: 10px 20px;
            }

            #a2 {
                width: 90%;
            }
        </style>

        <div class="row mb">
            <div class="boxtitle">Thông tin đặt hàng</div>
            <div class="row boxcontent fromdangky">
                <table>
                    <?php
                    if (isset($_SESSION['user'])) {
                        $name = $_SESSION['user']['user'];
                        $diachi = $_SESSION['user']['diachi'];
                        $email = $_SESSION['user']['email'];
                        $sdt = $_SESSION['user']['sdt'];
                    } 
                    else {
                        $name = "";
                        $diachi = "";
                        $email = "";
                        $sdt = "";
                    }



                    ?>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><input type="text" name="name" id="a2" value="<?= $name?>"></td>
                    </tr>
                    <tr>
                        <td>Địa Chỉ</td>
                        <td><input type="text" name="diachi" id="a2" value="<?= $diachi?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" id="a2" value="<?= $email?>"></td>
                    </tr>
                    <tr>
                        <td>Số Điện Thoại</td>
                        <td><input type="text" name="sdt" id="a2" value="<?= $sdt?>"></td>
                    </tr>


                </table>

            </div>



        </div>
        <div class="row mb">
            <div class="boxtitle">Phương Thức Thanh Toán</div>
            <div class="row boxcontent fromdangky">
                <table border="1">

                    <tr>

                        <td><input type="radio"  value="1" name="pttt" checked>Trả Tiền Khi Nhận Hàng</td>
                        <td><input type="radio" value="2" name="pttt">Chuyển Khoản Ngân Hàng</td>
                        <td><input type="radio" value="3" name="pttt">Thanh Toán online</td>

                    </tr>

                   

                </table>

            </div>



        </div>
        <div class="row mb">
            <div class="boxtitle">Thông Tin Giỏ Hàng</div>
            <div class="row boxcontent fromdangky">
                

                <table border="1">
                  
                    <?php
                    viewcart(0);
                    ?>

                </table>



                

            </div>



        </div>
        <a href="index.php?act=hd"> <input type="submit" placeholder="" value="Đồng ý đặt hàng" name="hd" id="a1"></a>
        <!-- <a href="index.php?act=del_cart"> <input type="submit" placeholder="" value="Xóa giỏ hàng" id="a1"></a> -->

    </div>


    <div class="boxphai  ">
        <?php include "view/boxright.php"; ?>
    </div>
</div>