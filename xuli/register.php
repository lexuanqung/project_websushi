<?php
include('connect.php');
session_start();


$post = $_POST['dangky'];
if(isset($post))
{
    // session_destroy();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $telephone = $_POST['telephone'];
    $address = $_POST['address'];

    

        // Kiểm tra email tồn tại hay chx
        $sql = "SELECT user_email FROM tbl_user WHERE user_email = '$email'";
        $result = mysqli_query($con, $sql);
        $query = mysqli_num_rows($result);
        if($query == 0)
        {
            $addmember =  "INSERT INTO tbl_user (user_email, user_password, user_fullname, user_gender, user_phone, user_address)
            VALUES ('$email', '$password', '$fullname', '$gender', '$telephone', '$address')";
            if(mysqli_query($con, $addmember))
            {
                echo '<script language="javascript">alert("Bạn đã đăng ký thành công, vui lòng chờ kiểm duyệt!");window.location="../account.php";</script>';
                $_SESSION['id_khachhang'] = mysqli_insert_id($con);
                $_SESSION['dangky'] = $fullname;
            }
        }else
        {
            echo 'Email đã tồn tại! Vui lòng đăng ký lại!!!!';
           
        }
        
    
    

    
}

function input_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>