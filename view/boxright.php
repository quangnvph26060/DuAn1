<div class="row  mb ">
    <div class="boxtitle">TÀI KHOẢN</div>
    <div class="boxcontent">

        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);

        ?>


            <div style="padding: 10px;">
                Xin Chào: <br> <span> <?= $user ?></span>
            </div>

            <div class="row">

                <li class="dangky"> <a href="index.php?act=quenmatkhau">Quên Mật Khẩu </a>
                </li> <br>
                <?php if($vaitro ==1){?>
                <li class="dangky"> <a href="admin/index.php">Đăng Nhập Admin </a>
                </li> <br>

                <?php }?>
                <li class="dangky"> <a href="index.php?act=edit_taikhoan&id=">Cập nhật tài khoản </a>
                </li> <br>
                <li class="dangky"> <a href="index.php?act=thoat">Đăng Xuất </a>
                </li>

            </div>
        <?php } else {  ?>

            <form action="index.php?act=dangnhap" method="post" id="dk">
                Tên Đăng Nhập<br>
                <input type="text" name="user" id="user"> <br>
                Mật Khẩu<br>
                <input type="password" name="password" id="pass"> <br>
                <div class="box1">
                    <input type="checkbox" name="" id="">Ghi Nhớ Tài Khoản?
                </div> <br>
                <input type="submit" value="Đăng Nhập" name="dangnhap"> <br> <br>
                <div style="color: red;">
                    <?php
                    if (isset($thongbao)) {
                        echo $thongbao;
                    }
                    ?>
                </div>

            </form>
            <li class="dangky"> <a href="index.php?act=quenmatkhau">Quên Mật Khẩu </a>
            </li>
            <li class="dangky"><a href="index.php?act=dktv">Đăng Ký</a></li>
        <?php } ?>
    </div>

</div>
<div class="row mb ">
    <div class="boxtitle">DANH MỤC</div>
    <div class="boxcontent2 menudoc">

        <?php
        foreach ($dm_home as $dm) {
            extract($dm);
            $linksp = "index.php?act=sanpham&iddm=" . $id;
            echo '
                        <ul>
                            <li>
                                <a href="' . $linksp . '">' . $name . '</a>
                            </li>
                        </ul>
                        ';
        }
        ?>

    </div>
    <div class="boxfooter menudoc1">
        <form action="index.php?act=tksp" method="post">
            <input type="text" placeholder="Tìm Kiếm Từ Khóa" name='timkiem'>
        </form>
    </div>
</div>
<div class="row ">
    <div class="boxtitle">YÊU THÍCH</div>
    <div class=" row boxcontent box10">


        <?php
        foreach ($top10 as $sanpham) {
            extract($sanpham);
            $hinh = $hinhpath . $img;
            $linksp = "index.php?act=sanphamct&id=" . $id;
            echo '
                        <div class="row mb">
                            <img src="' . $hinh . '" alt="">
                            <a href="' . $linksp . '" id="nd"> ' . $name_sp . ' </a>
                         </div>
                        
                        ';
        }


        ?>





        <!-- <div class="row mb">
                    <img src="./img/ip1.jpg" alt="">
                    <a href="" id="nd">IPohne </a>
                </div>
                <div class="row mb">
                    <img src="./img/lp2.jpg" alt="">
                    <a href="" id="nd">Laptop </a>
                </div>
                <div class="row mb">
                    <img src="./img/sp12.jpeg" alt="">
                    <a href="" id="nd">Phu Kiện </a>
                </div>
                <div class="row mb">
                    <img src="./img/anh2.jpg" alt="">
                    <a href="" id="nd">SAM SUNG</a>
                </div> -->


    </div>

</div>