<?php
if(is_array($upsp)){
    extract($upsp);
}
?>

<div class="row mb">
    <div class="  mb headeradmin">
        <h1>Cập Nhật Sản Phẩm </h1>
    </div>
    <div class="row inputadmin">
        <div class="row mb fromtable">
        <form action="index.php?act=suasp" method="POST" enctype="multipart/form-data">
        Danh Mục: <br>
                <select name="iddm" id="">
                    <?php  
                    foreach($listdm as $danhmuc){
                        extract($danhmuc);
                        if($id == $iddm){
                            echo '
                            <option value="'.$iddm.'" selected>'.$name. ' </option>
                            ';
                        }
                        echo '
                        <option value="'.$iddm.'">'.$name. ' </option>
                        ';
                    }
                    
                    ?>

                </select>
                <br>
                <input type="hidden" name="id" value="<?php echo $upsp['id']?>">
            Tên Sản Phẩm: <br>
            <input type="text" name="sanpham" value="<?php echo $upsp['name_sp']?>"> <br>
           Giá Sản Phẩm: <br>
            <input type="number" name="gia" value="<?php echo $upsp['price']?>" > <br>
            Ảnh Sản Phẩm: <br>  
            <input type="file" name="anh" > <br>
             <!-- lưu lại ảnh cũ  -->
            <input type="hidden" name="hinh" value="<?php echo $upsp['img']?>"> <br>
            <img src="../upload/<?= $upsp['img'] ?>" alt="" width="20%"><br>
           
            Mô Tả Sản Phẩm: <br>
           <textarea name="mota" id="" cols="160" rows="10" > <?php echo $upsp['mota'] ?> </textarea> <br>
           <!-- Lượt Xem:
           <input type="number" name="luotxem" value="<?php echo $upsp['luotxem']?>"> <br>
            <input type="hidden" name="id" value="<?php if(isset($id) && ($id)>0) echo $id;?>"> -->
            <button type="submit" name='upbtn'>Cập Nhật</button>
            
        </form> <br>
        <a href="index.php?act=listsp"><button>Danh Sách</button></a>
        <?php 
         if (isset($thongbao)) 
         echo $thongbao ;
         
         ?>
    </div>
</div>