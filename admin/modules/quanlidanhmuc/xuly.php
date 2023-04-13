<?php
    include("../../../xuli/connect.php");

    if(isset($_POST['themdanhmuc'])){
        ////////    Thêm danh mục
        $tendanhmuc = $_POST['tendanhmuc'];
        $thutu = $_POST['thutu'];
        $tenloaisp = $_POST['tendanhmuc'];
        $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc, thutu) VALUE ('".$tendanhmuc."', '".$thutu."')";
        mysqli_query($con, $sql_them);
        header("Location:../../index.php?action=quanlidanhmucsanpham&query=them");

    } elseif(isset($_POST['suadanhmuc'])){
        ///////// Sửa danh mục
        $tendanhmuc = $_POST['tendanhmuc'];
        $thutu = $_POST['thutu'];
        $sql_sua = "UPDATE tbl_danhmuc SET tendanhmuc='".$tendanhmuc."', thutu='".$thutu."' WHERE id_danhmuc = '$_GET[iddanhmuc]'";
        $query_sua = mysqli_query($con, $sql_sua);
        header("Location:../../index.php?action=quanlidanhmucsanpham&query=them");

    }else{
        ///////// Xóa danh mục
        $id = $_GET['iddanhmuc'];
        $sql_xoa  = "DELETE  FROM tbl_danhmuc  WHERE id_danhmuc = '".$id."'";
        $query = mysqli_query($con , $sql_xoa);
        header("Location:../../index.php?action=quanlidanhmucsanpham&query=them");
    }
?>
