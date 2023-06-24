<div class="row mb">
    <div class="  mb headeradmin">
        <h1>Thêm Mới Sản Phẩm</h1>
        <?php
        if (isset($thongbao))
            echo $thongbao;

        ?>
  

    </div>
    <div class="row inputadmin">
        <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            Danh Mục: <br>
            <select name="iddm" id="">
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo '
                       <option value="' . $id . '">' . $name . ' </option>
                       ';
                }

                ?>

            </select>
            <br>
           
            Tên Sản Phẩm: <br>
            <input type="text" name="sanpham"> <br>
            <span style="color: red;">
                <?= $addsp['sanpham'] ?? '' ?>
            </span>
            <br>
            Giá Sản Phẩm: <br>
            <input type="number" name="gia"> <br>
            <span style="color: red;">
                <?= $addsp['gia'] ?? '' ?>
            </span>
            <br>
            Ảnh Sản Phẩm: <br>
            <input type="file" name="anh"> <br>
            <span style="color: red;">
                <?= $addsp['anh'] ?? '' ?>
            </span>
            <br>
            Mô Tả Sản Phẩm: <br>
            <textarea name="mota" id="" cols="160" rows="10"></textarea> <br>
            <span style="color: red;">
                <?= $addsp['mota'] ?? '' ?>
            </span>
            <br>
            Lượt Xem:
            <input type="number" name="luotxem"> <br>
            <!-- <span style="color: red;">
                <?= $err[''] ?? '' ?>
            </span> -->
            <br>
            <span style="color: red;">
                <?= $addsp['luotxem'] ?? '' ?>
            </span>
            <br>
            <button type="submit" name='btnadd'>Thêm Mới</button>
            <a href="index.php?act=index.php"> <button>Nhập lại</button></a>
        </form> <br>
        <a href="index.php?act=listsp"><button>Danh Sách</button></a>




    </div>
</div>
</div>