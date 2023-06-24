<div class="row mb">
    <div class="  mb headeradmin">
        <h1>Danh Sách Thống Kê </h1>
    </div>
    <div class="row inputadmin">
        <div class="row mb ">


            <br>
            <table border="1" style="width: 100%; border-collapse: collapse;border-radius: 5px;">

                <tr style="background-color: #ccc; min-height: 30%;">
                    <th></th>
                    <th>Mã Danh Mục</th>
                    <th>Tên Danh Mục</th>
                    <th>Số Lượng</th>
                    <th>Giá Cao Nhất </th>
                    <th>Giá Thấp Nhất</th>
                    <th>Giá Trung Bình</th>

                </tr>

                <?php
                foreach ($listtk as  $index => $tk) {
                    extract($tk);
                   


                    echo '<tr  style="text-align: center;">
                                <td><input type="checkbox"></td>
                                <td>' . $madm . '</td>
                                <td>' . $tendm . '</td>
                                <td>' . $countsp. '</td>
                                <td>' .number_format($maxprice) . '</td>
                                <td>' . number_format($minprice) . '</td>
                                <td>' . number_format($avggia) . '</td>
                                
                                
                                
                            </tr> ';
                }
                ?>

                <div>
                    
                </div>






            </table>
        </div>
       
    </div>
</div>