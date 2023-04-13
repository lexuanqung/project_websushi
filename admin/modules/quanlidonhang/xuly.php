<?php
    include("../../../xuli/connect.php");

    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $sql =  "UPDATE tbl_cart SET status = 0 WHERE code_cart = '".$code."'";
        $query = mysqli_query($con, $sql);
        header("Location:http://localhost:8080/Project-sushi-/admin/index.php?action=quanlidonhang&query=lietke");
    }
?>