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
            #a1{
                padding: 10px 20px;
            }
        </style>

        <div class="row mb">
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent fromdangky">
                <table border="1">
                   
                    <?php
                    viewcart(1);
                    ?>

                </table>

            </div>



        </div>
       <a href="index.php?act=bill"> <input type="submit" placeholder="" value="Tiếp Tực đặt hàng" id="a1"></a>
         <a href="index.php?act=del_cart">    <input type="submit" placeholder="" value="Xóa giỏ hàng" id="a1"></a>

    </div>


    <div class="boxphai  ">
        <?php include "view/boxright.php"; ?>
    </div>
</div>