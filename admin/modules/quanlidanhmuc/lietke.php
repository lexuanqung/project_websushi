<?php
    $sql_lietke_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_kietke_danhmuc = mysqli_query($con, $sql_lietke_danhmuc )
?>

<p>Liệt kê danh mục sản phẩm</p>
<table border="1px" style="border-collapse: collapse; width:100%" >
    <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Quản lí</th>
    </tr>

    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_kietke_danhmuc)){
            $i++;
    ?>
    <tr align="center">
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td>
            <a href="modules/quanlidanhmuc/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a> | 
            <a href="index.php?action=quanlidanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a> 
             
        </td>
    </tr>

    <?php
    }
    ?>
</table>
