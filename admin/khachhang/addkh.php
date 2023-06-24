<div class="row mb">
    <div class="  mb headeradmin">
        <h1>THêm Mới Khách Hàng</h1>
         <?php 
         if (isset($thongbao)) 
         echo $thongbao ;
         
         ?>
           
       
    </div>
    <div class="row inputadmin">
        <form action="index.php?act=addkh" method="POST">
            Mã ID: <br>
            <input type="text" name="maid" id="" disabled placeholder="auto number"> <br>
            Tên Khách Hàng: <br>
            <input type="text" name="tenkh"> <br>
            <span style="color: red;">
                <?= $err['tenkh'] ?? '' ?>
            </span>
            <br>
            Mật Khẩu: <br>
            <input type="password" name="pass"> <br>
            <span style="color: red;">
                <?= $err['pass'] ?? '' ?>
            </span>
            <br>
            Địa Chỉ : <br>
            <input type="text" name="diachi"> <br>
            <span style="color: red;">
                <?= $err['diachi'] ?? '' ?>
            </span>
            <br>
            Số Điện Thoai: <br>
            <input type="number" name="sdt"> <br>
            <span style="color: red;">
                <?= $err['sdt'] ?? '' ?>
            </span>
            <br>
             Email: <br>
            <input type="email" name="email"> <br>
            <span style="color: red;">
                <?= $err['email'] ?? '' ?>
            </span>
            <br>
            Vai Trò: (1:admin - 0:khách)<br>
            <input type="number" name="vaitro"> <br>
            <span style="color: red;">
                <?= $err['vaitro'] ?? '' ?>
            </span>
            <br>

            <br>

            <button type="submit" name='btnadd'>Thêm Mới</button>
           <a href="index.php?act=index.php"> <button >Nhập lại</button></a>
        </form> <br>
        <a href="index.php?act=listkh"><button>Danh Sách</button></a>
       



    </div>
</div>
</div>