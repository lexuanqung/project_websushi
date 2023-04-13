<p>xem đơn hàng</p>

<?php
    $code = $_GET['code'];
    $sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham = tbl_sanpham.id_sanpham 
    AND tbl_cart_details.code_cart = '".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
    $query_kietke_dh = mysqli_query($con, $sql_lietke_dh);
?>


<table border="1px" style="border-collapse: collapse; width:100%" >
    <tr>
        <th>Id</th>
        <th>Mã Đơn hàng</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>

    </tr>

    <?php
        $i = 0;
        $tongtien = 0;
        while($row = mysqli_fetch_array($query_kietke_dh)){
            $i++;
            $thanhtien = $row['soluongmua'] * $row['giasp'];
            $tongtien += $thanhtien ;
    ?>
    <tr align="center">
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart'] ?></td>
        <td><?php echo $row['tensanpham'] ?></td>
        <td><?php echo $row['soluongmua'] ?></td>
        <td><?php echo number_format($row['giasp'],0,',','.').' vnđ' ?></td>
        <td><?php echo number_format($thanhtien,0,',','.').' vnđ'?></td>
        
    </tr>

    
    <?php
    }
    ?>
    <tr>
    <td colspan="6">
            <p  style="text-align: center;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').' vnđ' ?></p> 
        </td>
    </tr>
</table>
