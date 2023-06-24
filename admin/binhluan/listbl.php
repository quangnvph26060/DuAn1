<div class="row mb">
    <div class="  mb headeradmin">
        <h1>Danh Sách Bình Luận</h1>
    </div>
    <div class="row inputadmin">
        <div class="row mb fromtable">
            <table>

                <tr>
                    <th></th>
                    <th>#ID</th>
                    <th>Nội Dung</th>
                    <th>iduser</th>
                    <th>idpro</th>
                    <th>Ngày Bình Luận</th>
                   
                </tr>

                <?php
                foreach ($showbl as  $index =>$bl ) {
                    extract($bl);
                    $del_bl = "index.php?act=delbl&id=".$id; // xóa Bình Luận
                   
                    
                    echo '<tr>
                                <td><input type="checkbox"></td>
                                <td>' . $index + 1 . '</td>
                                <td>' . $noidung . '</td>
                                <td>' . $iduser . '</td>
                                <td>' . $idpro . '</td>
                                <td>' . $ngaybinhluan . '</td>
                                <td>
                                   
                                    <a href="' . $del_bl . '"><button>Xóa</button></a>
                                 </td>
                            </tr> ';
                }
                ?>








            </table>
        </div>
        <!-- <button type="button">Chọn tất cả</button>
        <button type="button">Xóa Tất Cả</button>

        <button type="button">Xóa Các Mục đã chọn</button>
        <a href="index.php?act=adddm"> <button>Nhập thêm</button></a> -->
    </div>
</div>