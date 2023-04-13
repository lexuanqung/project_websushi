<?php
    include("../../../xuli/connect.php");

    if(isset($_POST['themsanpham'])){
        ////////    Thêm danh mục
        $tensanpham = $_POST['tensanpham'];
        $masp = $_POST['masp'];
        $giasp = $_POST['giasp'];
        $soluong = $_POST['soluong'];
        ////Xữ lí hình ảnh
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $hinhanh = time().'_'.$hinhanh;
        $tomtat = $_POST['tomtat'];
        $noidung = $_POST['noidung'];
        $tinhtrang = $_POST['tinhtrang'];
        $danhmuc = $_POST['danhmuc'];

        
    
        $sql_them = "INSERT INTO tbl_sanpham(tensanpham, masp, giasp, soluong,hinhanh, tomtat, noidung, tinhtrang, id_danhmuc)
         VALUE ('".$tensanpham."', '".$masp."', '".$giasp."', '".$soluong."', '".$hinhanh."', '".$tomtat."', '".$noidung."', '".$tinhtrang."', '".$danhmuc."')";
        mysqli_query($con, $sql_them);
        move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
        header("Location:../../index.php?action=quanlisanpham&query=them");

    } else if(isset($_POST['suasanpham'])){
        ///////// Sửa danh mục
        $tensanpham = $_POST['tensanpham'];
        $masp = $_POST['masp'];
        $giasp = $_POST['giasp'];
        $soluong = $_POST['soluong'];
        ////Xữ lí hình ảnh
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $hinhanh = time().'_'.$hinhanh;
        $tomtat = $_POST['tomtat'];
        $noidung = $_POST['noidung'];
        $tinhtrang = $_POST['tinhtrang'];
        $danhmuc = $_POST['danhmuc'];

        if($hinhanh != ''){
            move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
            $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = $_GET[idsanpham] LIMIT 1";
            $query = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
            }
            $sql_sua = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."', masp='".$masp."', giasp='".$giasp."',
            soluong='".$soluong."', hinhanh='".$hinhanh."', tomtat='".$tomtat."', noidung='".$noidung."', tinhtrang='".$tinhtrang."', id_danhmuc='".$danhmuc."' WHERE id_sanpham = '$_GET[idsanpham]'";
            $query_sua = mysqli_query($con, $sql_sua);
            header("Location:../../index.php?action=quanlisanpham&query=them");
        }else{
            $sql_sua = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."', masp='".$masp."', giasp='".$giasp."',
            soluong='".$soluong."', tomtat='".$tomtat."', noidung='".$noidung."', tinhtrang='".$tinhtrang."', id_danhmuc='".$danhmuc."' WHERE id_sanpham = '$_GET[idsanpham]'";
            $query_sua = mysqli_query($con, $sql_sua);
            header("Location:../../index.php?action=quanlisanpham&query=them");
        }

    }else{
        ///////// Xóa danh mục
        $id = $_GET['idsanpham'];
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = $id LIMIT 1";
        $query = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        
        $sql_xoa  = "DELETE  FROM tbl_sanpham  WHERE id_sanpham = '".$id."'";
        $query = mysqli_query($con , $sql_xoa);
        header("Location:../../index.php?action=quanlisanpham&query=them");
    }
?>
