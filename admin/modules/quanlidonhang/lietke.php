<p>Liết kê đơn hàng</p>
<?php
    $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_user WHERE tbl_cart.id_khachhang = tbl_user.user_id ORDER BY id_cart DESC";
    $query_kietke_dh = mysqli_query($con, $sql_lietke_dh )
?>


<table border="1px" style="border-collapse: collapse; width:100%" >
    <tr>
        <th>Id</th>
        <th>Mã Đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Trạng thái</th>
        <th>Quản lý</th>
    </tr>

    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_kietke_dh)){
            $i++;
    ?>
    <tr align="center">
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart'] ?></td>
        <td><?php echo $row['user_fullname'] ?></td>
        <td><?php echo $row['user_address'] ?></td>
        <td><?php echo $row['user_email'] ?></td>
        <td><?php echo $row['user_phone'] ?></td>
        <td>
            <?php if($row['status'] == 1){
                echo '<a href="modules/quanlidonhang/xuly.php?&code='.$row['code_cart'] .'">Đơn hàng mới</a>';
            }else{
                echo '<a href="">Đã xử lí</a>';
            }
            ?>
        </td>
        <td>
            <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a> 

             
        </td>
    </tr>

    <?php
    }
    ?>
</table>

