<div class="row mb">
    <div class="  mb headeradmin">
        <h1>Danh Sách Loại Hàng </h1>
    </div>
    <div class="row inputadmin">
        <div class="row mb ">


            <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw" style="width: 30%;"> <br>
                Danh Mục: 
                <select name="iddm" id="">
                    <option value="0" selected>Tất Cả</option>
                    <?php  
                    foreach($listdm as $danhmuc){
                        extract($danhmuc);
                        
                       echo '
                       <option value="'.$id.'">'.$name.' </option>
                       ';
                    }

                    ?>

                </select> <br>
                    <button type="submit" name="btntk">Tìm Kiếm</button>
            </form>
            <br>
            <table border="1" style="width: 100%; border-collapse: collapse;border-radius: 5px;">

                <tr style="background-color: #ccc; min-height: 30%;">
                    <th></th>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Hình Ảnh</th>
                    <th>Mô Tả</th>
                    <th>Mã Loại</th>
                    <th></th>
                </tr>
              
                <?php
                foreach ($listsp as  $index =>$sanpham ) {
                    extract($sanpham);
                    $del_sp = "index.php?act=delsp&id=".$id; // xóa danh mục
                    $update_sp = "index.php?act=updatesp&id=".$id; // sửa danh mục
                    $hinhpath = "../upload/" .$img; // ảnh 
                    if(is_file($hinhpath)){
                        $hinh = "<img src='".$hinhpath."' width='100' ";
                    }else{
                        $hinh = "No photto";
                    }

                    
                    echo '<tr  style="text-align: center;">
                                <td><input type="checkbox"></td>
                                <td>' . $index + 1 . '</td>
                                <td>' . $name_sp. '</td>
                                <td>' . number_format($price) . '</td>
                                <td>' . $hinh. '</td>
                                <td>' . $mota . '</td>
                                <td>' . $iddm . '</td>
                                
                                <td>
                                    <a href="' . $update_sp . '"><button>Sửa</button></a> 
                                    <a href="' . $del_sp . '"><button>Xóa</button></a>
                                 </td>
                            </tr> ';
                }
                ?>








            </table>
        </div>
        <button type="button">Chọn tất cả</button>
        <button type="button">Xóa Tất Cả</button>

        <button type="button">Xóa Các Mục đã chọn</button>
        <a href="index.php?act=addsp"> <button>Nhập thêm</button></a>
    </div>
</div>