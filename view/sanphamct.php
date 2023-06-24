<div class="row mb ">
    <div class="boxtrai mb ">
        <?php
        extract($onesp);

        ?>
        <div class="row mb">
                    
            <div class="boxtitle"><?= $name_sp ?></div>
            <div class="row boxcontent csshinh">
                <?php
                $hinh = $hinhpath . $img;
                echo '  <img src="' . $hinh . '" alt=""  style="width: 40%;  padding: 10px 250px;"> <br>';

                echo '
                      <div>
                        <p><span>Mã Loại:</span>' . $id . '</p> 
                        <p><span>Tên Sản Phẩm:</span>' . $name_sp . '</p>
                        <p><span>Giá Sản Phẩm:</span>' . $price . '</p>
                    </div>
                      ';
                echo $mota;
                ?>


            </div>
        </div>
        <!-- <div class="row mb">
            <div class="boxtitle">Bình Luận</div>
            <div class="row boxcontent">

            </div>
        </div> -->



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanform.php",{idpro: <?= $id?>});  
            });
        </script>
        <div class="row" id="binhluan"> 

        </div>
        <!-- <div class="row">
            <iframe src="view/binhluan/binhluanform.php?idpro=<?= $id?>" frameborder="0" width="100%" height="300px"></iframe>
        </div> -->
        <div class="row ">
            <div class="boxtitle">Sản PHẩm Liên Quan</div>
            <div class="row boxcontent">
                <?php

                foreach ($cungloai as $spcl) {
                    extract($spcl);
                    // $hinh = $hinhpath.$img;
                    $linksp = "index.php?act=sanphamct&id=" . $id;
                    echo '<li><a href="' . $linksp . '"> ' . $name_sp . '</a></li>';
                }
                ?>
            </div>

        </div>

    </div>

    <div class="boxphai  ">
        <?php include "boxright.php"; ?>
    </div>
</div>