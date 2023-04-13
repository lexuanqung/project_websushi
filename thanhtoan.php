<?php
    session_start();
    include("xuli/connect.php");

    $id_khachhang = $_SESSION['id_khachhang1'];
    $code_order = rand(0,9999);

    $insert_cart = "INSERT INTO tbl_cart(id_khachhang, code_cart, status) VALUES ('".$id_khachhang."','".$code_order."', 1)";
    $cart_query = mysqli_query($con, $insert_cart);

    if($insert_cart){
        /// Thêm giỏ hàng chi tiết
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham, code_cart, soluongmua) VALUES ('".$id_sanpham."',
            '".$code_order."','".$soluong."')";
            $cart_query = mysqli_query($con, $insert_order_details);
            
        }
    }
    unset($_SESSION['cart']);
    echo '<script language="javascript">alert("Mua hàng thành công!");window.location="index.php";</script>';

?>