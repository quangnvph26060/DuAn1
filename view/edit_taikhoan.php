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
        </style>

        <div class="row mb">
            <div class="boxtitle"> Cập Nhật Tài Khoản </div>
            <div class="row boxcontent fromdangky">
                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
                    Tài Khoản: <br>
                    <input type="text" name="tk" placeholder="Username" value="<?= $user ?>"> <br>

                    Mật Khẩu : <br>

                    <input type="password" name="pass" placeholder="Password" value="<?= $pass ?>"> <br>
                    Email: <br>
                    <input type="email" name="email" placeholder="Email" value="<?= $email ?>"> <br>
                    Địa chỉ: <br>
                    <input type="text" name="diachi" placeholder="Address" value="<?= $diachi ?>"> <br>
                    Số Điện Thoại: <br>
                    <input type="text" name="sdt" placeholder="Phone Number" value="<?= $sdt ?>"> <br> <br>


                    <button name="capnhat"> Cập Nhật </button> <br>
                   

                </form> <br>
                <div class="err">
                    <?php

                    if (isset($thongbao)) {
                        echo $thongbao;
                    }

                    ?>
                </div>
            </div>

        </div>


    </div>

    <div class="boxphai  ">
        <?php include "boxright.php"; ?>
    </div>
</div>