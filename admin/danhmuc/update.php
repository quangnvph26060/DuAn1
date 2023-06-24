<?php
if(is_array($updm)){
    extract($updm);
}


?>

<div class="row mb">
    <div class="  mb headeradmin">
        <h1>Cập Nhật Loại Hàng </h1>
    </div>
    <div class="row inputadmin">
        <div class="row mb fromtable">
        <form action="index.php?act=suadm" method="POST">
            Mã Loại: <br>
            <input type="text" name="maloai" id="" disabled placeholder="auto number"> <br>
            Tên Loại: <br>
            <input type="text" name="tenloai1" value="<?php if(isset($name) && ($name)!="") echo $name;?>"> <br>
           
            <br>
            <input type="hidden" name="id" value="<?php if(isset($id) && ($id)>0) echo $id;?>">
            <button type="submit" name='upbtn'>Cập Nhật</button>
            
        </form> <br>
        <a href="index.php?act=listdm"><button>Danh Sách</button></a>
        <?php 
         if (isset($thongbao)) 
         echo $thongbao ;
         
         ?>
    </div>
</div>