<div class="row mb">
    <div class="  mb headeradmin">
        <h1>Danh Sách Loại Hàng </h1>
    </div>
    <div class="row inputadmin">
        <div class="row mb fromtable">
            <table>

                <tr>
                    <th></th>
                    <th>Mã Loại</th>
                    <th>Tên Loại</th>
                    <th></th>
                </tr>

                <?php
                foreach ($listdm as  $index =>$danhmuc ) {
                    extract($danhmuc);
                    $del_dm = "index.php?act=deldm&id=".$id; // xóa danh mục
                    $update_dm = "index.php?act=updatedm&id=".$id; // sửa danh mục
                    
                    echo '<tr>
                                <td><input type="checkbox"></td>
                                <td>' . $index + 1 . '</td>
                                <td>' . $name . '</td>
                                <td>
                                    <a href="' . $update_dm . '"><button>Sửa</button></a> 
                                    <a href="' . $del_dm . '"><button>Xóa</button></a>
                                 </td>
                            </tr> ';
                }
                ?>








            </table>
        </div>
        <button type="button">Chọn tất cả</button>
        <button type="button">Xóa Tất Cả</button>

        <button type="button">Xóa Các Mục đã chọn</button>
        <a href="index.php?act=adddm"> <button>Nhập thêm</button></a>
    </div>
</div>