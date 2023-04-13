<?php
    $sql_sua_danhmuc = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc = '$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmuc = mysqli_query($con, $sql_sua_danhmuc )
?>
<p>Sửa danh mục sản phẩm</p>
<table border="1px " style="border-collapse: collapse; width:50%" >
    <form action="modules/quanlidanhmuc/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="POST">
        <?php
            while($row = mysqli_fetch_array($query_sua_danhmuc)){
        ?>
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" value="<?php echo $row['tendanhmuc']?>" name="tendanhmuc"></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" value="<?php echo $row['thutu']?>" name="thutu"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
        </tr>

        <?php
            }
        ?>
    </form>
</table>