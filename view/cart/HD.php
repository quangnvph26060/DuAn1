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
            <div class="boxtitle">Cảm ơn bạn đã đặt hàng </div>
            <div class="row boxcontent fromdangky">
                <h4> Tên Khách Hàng: </h4>
                <h4> Địa chỉ: </h4>
                <h4> Số điện thoại:</h4>

            </div>



        </div>
        <div class="row mb">
            <div class="boxtitle">Mã đơn hàng</div>
            <div class="row boxcontent fromdangky">


            </div>



        </div>



        <!-- hêt -->
        <div class="row mb">
            <div class="boxtitle">Thông tin Đơn Hàng</div>
            <div class="row boxcontent fromdangky">
                <form action="index.php?act=addtocart" method="post">

                    <table>
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['user'];
                            $diachi = $_SESSION['user']['diachi'];
                            $email = $_SESSION['user']['email'];
                            $sdt = $_SESSION['user']['sdt'];
                        } else {
                            $name = "";
                            $diachi = "";
                            $email = "";
                            $sdt = "";
                        }



                        ?>

                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="name" id="a2" value="<?= $name ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa Chỉ</td>
                            <td><input type="text" name="diachi" id="a2" value="<?= $diachi ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" id="a2" value="<?= $email ?>"></td>
                        </tr>
                        <tr>
                            <td>Số Điện Thoại</td>
                            <td><input type="text" name="sdt" id="a2" value="<?= $sdt ?>"></td>
                        </tr>


                    </table>
                </form>

            </div>



        </div>
        <div class="row mb">
            <div class="boxtitle">Phương Thức Thanh Toán</div>
            <div class="row boxcontent fromdangky">
                <table border="1">

                    <tr>

                        <td><input type="radio" name="pttt" checked>Trả Tiền Khi Nhận Hàng</td>
                        <td><input type="radio" name="pttt">Chuyển Khoản Ngân Hàng</td>
                        <td><input type="radio" name="pttt">Thanh Toán online</td>

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

        <!-- <a href=""> <input type="submit" placeholder="" value="Đồng ý đặt hàng" name="hd" id="a1"></a> -->

        <a href="index.php?act=hd"><button id="a1" name="hd">Đồng ý đặt hàng </button></a>
        <!-- <a href="index.php?act=del_cart"> <input type="submit" placeholder="" value="Xóa giỏ hàng" id="a1"></a> -->
        <?php echo "đặt hàng thành công "; ?>
    </div>


    <div class="boxphai  ">
        <?php include "view/boxright.php"; ?>
    </div>
</div>