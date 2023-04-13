<?php
    session_start();

?>



        <h3 style="text-align: center; ">GIỎ HÀNG</h3>
<?php
    if(isset($_SESSION['dangky'])){
        // echo $_SESSION['id_khachhang'];
        // echo $_SESSION['dangky'];

    }
?>

<?php
    if(isset($_SESSION['dangnhap'])){
        // echo $_SESSION['id_khachhang1'];
        // echo $_SESSION['dangky'];

    }
?>


<?php 
    if(isset($_SESSION['cart'])){
        // session_destroy();

    }
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <style>
        i.fa.fa-plus.fa-lg.fa-style {
        font-size: 18px;
        }

        i.fa.fa-minus.fa-lg.fa-style {
        font-size: 18px;
        }

        ::before {
        color: darkred;
         }
    </style>

    <div style="border: 1px solid black; width:70%; margin-left: 180px">
    <table style="width:100%; border-collapse:collapse; text-align:center;" border="1">
        <tr>
            <th>Id</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th>Giá sản phẩm</th>
            <th>Thành tiền</th>
            <th>Quản lý</th>
        </tr>
        <?php
            if(isset($_SESSION['cart'])){
                $i = 1;
                $tongtien = 0;
                foreach($_SESSION['cart'] as $cart_item){
                    $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];  
                    $tongtien += $thanhtien;
                    

        ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $cart_item['tensanpham'] ?></td>
            <td><img src="admin/modules/quanlisp/uploads/<?php echo $cart_item['hinhanh'] ?>" style="width: 120px;"></td>
            <td>
                <a href="themgiohang.php?cong=<?php echo $cart_item['id']?>"><i class='fa fa-plus fa-lg fa-style' style='color:#121212'></i></a>
                <?php echo $cart_item['soluong'] ?>
                <a href="themgiohang.php?tru=<?php echo $cart_item['id']?>"><i class='fa fa-minus fa-lg fa-style' style='color:#050505'></i></a>

            </td>
            
            <td><?php echo number_format($cart_item['giasp'],0,',','.').' vnđ' ?></td>
            <td><?php echo number_format($thanhtien,0,',','.').' vnđ' ?></td>
            <td><a href="themgiohang.php?xoa=<?php echo $cart_item['id']?>">Xóa</a></td>
        </tr>

        <?php
            }
            
        ?>

        <tr>
            <td colspan="7">
                <p style="float: left;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').' vnđ'?></p>
                <p style="float: right;"><a href="themgiohang.php?xoatatca=1">Xóa tất cả</a></p>

                <div style="clear: both;"></div>

                <?php
                    if(!empty($_SESSION['dangnhap'])){
                        
                ?>
                <p> <a href="thanhtoan.php">Đặt hàng</a></p>

                <?php
                    }else{
                ?>
                <p> <a href="account.php">Đăng nhập đặt hàng</a></p>
                <?php
                    }
                ?>
            </td>
        </tr>


       

        <?php
        }else{
        ?>

        <tr>
            <td colspan="7">Hiện tại giỏ hàng trống</td>
        </tr>
        <?php
        }
        ?>

        <tr>
            <td colspan="7">
                <a href="http://localhost:8080/Project-sushi-/#popular" style="padding-left: 900px;">Trở về</a>
            </td>
        </tr>
    </table>
    </div>
     