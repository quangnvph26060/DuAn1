<div class="row mb">
    <div class="  mb headeradmin">
        <h1>THêm Mới Loại Hàng Hóa</h1>
         <?php 
         if (isset($thongbao)) 
         echo $thongbao ;
         
         ?>
           
       
    </div>
    <div class="row inputadmin">
        <form action="index.php?act=adddm" method="POST">
            Mã Loại: <br>
            <input type="text" name="maloai" id="" disabled placeholder="auto number"> <br>
            Tên Loại: <br>
            <input type="text" name="tenloai"> <br>
            <span style="color: red;">
                <?= $err['tenloai'] ?? ''?>
            </span>
            <br>

            <button type="submit" name='btn'>Thêm Mới</button>
           <a href="index.php?act=index.php"> <button >Nhập lại</button></a>
        </form> <br>
        <a href="index.php?act=listdm"><button>Danh Sách</button></a>
       



    </div>
</div>
</div>