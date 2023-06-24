<div class="row mb ">
    <div class="boxtrai mb ">

        <div class="row">
            <div class="banner mr">
                <!-- <img src="./img/anh1.jpg" alt=""> -->
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">

                        <img src="view/img/ban1.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">

                        <img src="view/img/ban2.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">

                        <img src="view/img/ban3.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
            <style>
                #d1{
                    text-decoration: none;
                    color: #666;
                }
                #d1:hover{
                    text-decoration: none;
                    color: #2566CA;
                }
                #img{
                    opacity: 0.5;

                }
                #img:hover{
                    opacity: 1;
                    /* margin-top: -10px; */
                    transform: scale(1.2);
                }
                p{
                    color: #D3021C;
                    font-weight: bold;
                }
            </style>
        </div>
        <div class="row">
        <a href="index.php?act=desc"> <input type="submit" value="lớn đến bé " name="desc"></a>
          <a href="index.php?act=asc"> <input type="submit" value="bé đến lớn " name="asc"></a>
          <a href="index.php?act=az"> <input type="submit" value="A-Z " name="az"></a>
          <a href="index.php?act=za"> <input type="submit" value="Z-A " name="za"></a>
            <div class="boxsp">
                <?php
                $i = 0;
                foreach ($asc as $sp) {
                    extract($sp);
                    $hinh = $hinhpath . $img;
                    $linksp  = "index.php?act=sanphamct&id=" . $id;
                    if (($i == 2) || ($i == 5) || ($i == 8)) {
                        $mr = "mr";
                    } else {
                        $mr = "";
                    }
                    echo '
                    <div class="sp ' . $mr . '">
                    <center>
                         <img src="' . $hinh . '" alt="" width="30%" id="img">
                         
                    </center>
                  
                        <p>' . number_format($price) .   '<u>đ</u></p>
                        <a href="' . $linksp . '" id="d1">' . $name_sp . '</a>
                        <div class="row">
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" value="' . $id . '" name="id">
                                <input type="hidden" value=" ' . $name_sp . '" name="name_sp" >
                                <input type="hidden" value="' . $img . '"name="img">
                                <input type="hidden" value="' . $price . '"name="price" >  <br>
                                <input type="submit" value="Thêm Vào Giỏ Hàng " name="addtocart" id="btn1">
                            </form>
                        </div>
                    </div>



                        ';
                    $i += 1;
                }
                ?>

               
            </div>

        </div>


    </div>
    <div class="boxphai  ">
        <?php include "boxright.php"; ?>
    </div>
</div>