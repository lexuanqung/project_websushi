<?php
    include_once('xuli/connect.php');
    session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['']))
        $sql = "SELECT * FROM tbl_user";
        $query = mysqli_query($con, $sql);
    ?>
    <div class="container">
        <table border="1px soid #333" align="center" >
            <thead>
                <tr>
                    <th>Email: </th>
                    <th>Họ và tên: </th>
                    <th>Giới tính: </th>
                    <th>Số điện thoại: </th>
                    <th>Địa chỉ:</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    while($data = mysqli_fetch_array($query)){
                    $id = $data['user_id'];
                ?>
                <tr>
                    <td><?php echo $data['user_email']  ?></td>
                    <td><?php echo $data['user_fullname']  ?></td>
                    <td><?php echo $data['user_gender']  ?></td>
                    <td><?php echo $data['user_phone']  ?></td>
                    <td><?php echo $data['user_address']  ?></td>
                </tr>

                <?php
                    }
                ?>

            </tbody>
        </table>
    </div>
</body>
</html>