<div class="row mb">
    <div class="  mb headeradmin">
        <h1>Danh Sách Khách Hàng</h1>
    </div>
    <div class="row inputadmin">
        <div class="row mb fromtable">
            <table>

                <tr>
                    <th></th>
                    <th>#ID</th>
                    <th>Tên Khách Hàng</th>
                    <th>Pass</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Vai Trò</th>

                </tr>

                <?php
                foreach ($listkh as  $index =>$khachhang ) {
                    extract($khachhang);
                    $del_kh = "index.php?act=delkh&id=".$id; // xóa khách hàng
                    $update_dm = "index.php?act=updatedm&id=".$id; // sửa danh mục
                    $var = $vaitro == 1 ? "Admin" :" Người Dùng";
                    
                    echo '<tr>
                                <td><input type="checkbox"></td>
                                <td>' . $index + 1 . '</td>
                                <td>' . $user . '</td>
                                <td>' . $pass . '</td>
                                <td>' . $diachi . '</td>
                                <td>' . $sdt . '</td>
                                <td>' . $email . '</td>
                                <td>' . $var. '  </td>
                            
                                <td>
                                   
                                    <a  href="' . $del_kh . '"><button>Xóa</button></a>
                                 </td>
                            </tr> ';
                }
                ?>








            </table>
        </div>
        <button type="button">Chọn tất cả</button>
        <button type="button">Xóa Tất Cả</button>

        <button type="button">Xóa Các Mục đã chọn</button>
        <a href="index.php?act=addkh"> <button>Nhập thêm</button></a>
    </div>
</div>