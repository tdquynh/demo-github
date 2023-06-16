<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            margin-left: 80px;
        }
    </style>
</head>
<body>
    
    <form action="" method="post">
        <h2><b>ĐĂNG NHẬP</b></h2>
        <table>
            <tr>
                <td>Tên đăng nhập:</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="dangnhap" value="Đăng nhập"> <input type="reset" name="datlai" value="Đặt lại"></td>
            </tr>
            <?php
                if(isset($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    if($user=="CNTT" && $pass==123456){
                        echo "Đăng nhập thành công";
                    }else{
                        echo "Đăng nhập thất bại!";
                    }

                }
            ?>
        </table>
    </form>
</body>
</html>