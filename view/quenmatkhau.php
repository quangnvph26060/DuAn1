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
            .err{
                color: red;
                font-weight: bold;
            }
        </style>

        <div class="row mb">
            <div class="boxtitle">Đăng ký</div>
            <div class="row boxcontent fromdangky">
                <form action="index.php?act=quenmatkhau" method="post">
                    Email: <br>
                    <input type="email" name="email" placeholder="Email"> <br> <br>

                  
                    <button name="guimk"> Gửi </button>

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