
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.w3schools.com/js/myScript1.js"></script>
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    .hero{
        height: 100%;
        width: 100%;
        background-image: linear-gradient(rgba(0, 0, 0 , 0.4), rgba(0, 0, 0 , 0.4)), url(img/background_account.jpg);
        background-position: center;
        background-size: cover;
        position: absolute;
    }

    .form-box{
        width: 380px;
        height: 480px;
        position: relative;
        margin: 4% auto;
        background: #fff;
        padding: 5px;
        overflow: hidden;
    }

    .button-box{
        width: 260px;
        margin: 35px auto;
        position: relative;
        box-shadow: 0 0 20px 9px #dd61241f;
        border-radius: 30px;

    }

    .togle-btn{
        padding: 10px 30px;
        cursor: pointer;
        background: transparent;
        border: 0;
        outline: none;
        position: relative;
        text-align: center;
    }

    #btn{
        top: 0;
        left: 0;
        position: absolute;
        width: 150px;
        height: 100%;
        background: linear-gradient(to right, #ff105f, #ffad06);
        border-radius: 30px;
        transition: .5s;
    }

    .input-group{
        top: 100px;
        position: absolute;
        width: 280px;
        transition: .5s;
    }

    .input-field{
        width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid #999;
        outline: none;
        background: transparent;
    }

    .submit-btn{
        width: 85%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        margin: auto;
        background: linear-gradient(to right, #ff105f, #ffad06);
        outline: none;
        border-radius: 30px;
    }

    .check-box{
        margin: 30px 10px 30px 0;
    }

    span{
        color: #777;
        font-size: 12px;
        bottom: 70px;
        position: absolute;
    }

    #dangnhap{
        left: 50px;
    }

    #dangky{
        left: 450px;
    }

    label{
        color: #777;
        font-size: 12px;
    }

    select{
       margin-left: 80px;
    }

    label, input[type="submit"] {
        display: inline-block;
    }
    input:focus:invalid {
        box-shadow: 0 0 5px #d45252;
        border-color: #b03535;
    }
        
    input:focus:valid {
        box-shadow: 0 0 5px #5cd053;
        border-color: #28921f;
    }

    .trangchu{
        color: #d45252;
        font-size: 12px;
        position: absolute;
        text-decoration: none;
        margin: 20px 100px;
        border-bottom: 1px solid #d45252;
    }
    
</style>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="togle-btn" onclick="dangnhap()">Đăng Nhập</button>
                <button type="button" class="togle-btn" onclick="dangky()">Đăng Ký</button>
            </div>

            <form action="xuli/login.php" class="input-group" id="dangnhap" method="POST">
                <input type="text" name="email" id="email" pattern="^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$" class="input-field"  placeholder="Email" required>
                <input type="password" name="password" id="password" pattern="[a-zA-Z0-9!@#$%^&*]{8,}" class="input-field"  placeholder="Mật khẩu" required>
                <input type="checkbox" class="check-box"> <span>Remember Password</span>
                <button type="submit" class="submit-btn" name="submit" value="submit">Đăng nhập</button>

                <a href="index.php" class="trangchu">Trang chủ</a>
            </form>
            <form action="xuli/register.php" class="input-group" id="dangky" method="POST">
                <input type="text" name="email" id="email" pattern="^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$" class="input-field" placeholder="Nhập Email" required>
                <input type="password" name="password" id="password" pattern="[a-zA-Z0-9!@#$%^&*]{8,}" class="input-field" placeholder="Nhập mật khẩu" required>
                <input type="text" name="fullname" id="fullname" pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$" class="input-field" placeholder="Họ và tên" required>
                <label for="gender"><b>Giới tính</b></label><br>
                <select name="gender" id="gender" >
                    <option value="">Chưa xác định</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
                <input type="text" name="telephone" class="input-field" id="telephone"  placeholder="Số điện thoại" required>
                <input type="text" name="address" class="input-field" id="adddress" placeholder="Đại chỉ" required>
                <input type="checkbox" class="check-box"> <span>Tôi đồng ý với các Điều khoản & Điều kiện</span>
                <button type="submit" class="submit-btn" name="dangky" value="submit">Đăng ký</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("dangnhap");
        var y = document.getElementById("dangky");
        var z = document.getElementById("btn");

        function dangky(){
            x.style.left = "-400px"
            y.style.left = "50px"
            z.style.left = "110px"
        }
        function dangnhap(){
            x.style.left = "50px"
            y.style.left = "550px"
            z.style.left = "0px"
        }

        //// Kiểm tra input
        function validation()
        {
            var email = document.form.email.value;
            var password = document.form.password.value;
            var fullname = document.form.fullname.value;
            var gender = document.form.gender.value;
            var phone = document.form.phone.value;
            var address = document.form.address.value;

            
            if(email == null || email == "")
            {
                alert("Email không được để trống!");
            } 
            else if(password == null || password == "")
            {
                alert("Mật khẩu không được để trống!");
            }
            else if(fullname == null || fullname == "")
            {
                alert("Họ và tên không được để trống!");
            }
            else if(gender == null || gender == "")
            {
                alert("Cần chọn Giới tính!");
            }
            else if(phone == null || phone == "")
            {
                alert("Điện thoại không được để trống!");
            }
            else if(address == null || address == "")
            {
                alert("Đại chỉ không được để trống!");
            }

           
        }


    </script>
</body>
</html>