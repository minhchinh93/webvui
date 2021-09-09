<?php 

if (isset($_POST['submit'])) {
    $data['hoten'] = isset($_POST['hoten']) ? $_POST['hoten'] : '';
    $data['passw'] = isset($_POST['passw']) ? $_POST['passw'] : '';
 
    // Kiểm tra định dạng dữ liệu



    /// validate form

    if (empty($data['hoten'] ) or empty($data['passw'])) {
        $error['hoten'] = 'Bạn chưa nhập SỐ ĐIỆN THOẠI và MẬT KHẨU';
    }

    if (!isset($error)) {
        $user = $_POST['hoten'];
        $pass = $_POST['passw'];
        $d = qc12($conn, $user, $pass);
       $f = mysqli_num_rows($d);
        if ($f == 1) {
            $row =  $d->fetch_array();
            $_SESSION['id'] = $row['id'];
            $_SESSION['full_name'] = $row['full_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['so_su'] = $row['so_su'];
            $_SESSION['remember_token'] = $row['remember_token'];
            header("location: index.php");
        }
        else {
          
            $error = 'SỐ ĐIỆN THOẠI hoặc MẬT KHẨU của bạn không đúng !';
        }
    } else {
        $error = 'Bạn chưa nhập SỐ ĐIỆN THOẠI và MẬT KHẨU !';
    }
}
//// validat đăn gkys
if (isset($_POST['dk'])) {
    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    $data['pass'] = isset($_POST['pass']) ? $_POST['pass'] : '';
    $data['repass'] = isset($_POST['repass']) ? $_POST['repass'] : '';
 
    // Kiểm tra định dạng dữ liệu

    function sdt($tel)
    {
        return  (!preg_match('/^(032|033|034|035|036|037|038|039|086|096|097|098|081|082|083|084|085|088|091|094|056|058|092|070|076|077|078|079|089|090|093|099|059)+([0-9]{7})$/', $tel))? false : true;
    }


    /// validate form

    if (empty($data['name'])) {
        $error['name'] = 'Bạn chưa nhập tên';
    }
    if (!preg_match("/^[a-zA-Z ]*$/", $data['name'])) {
        $error['name'] = 'Bạn chưa nhập tên chưa đúng định dạng';
    }

    if (empty($data['email'])) {
        $error['email'] = 'Bạn chưa email';
    } elseif (!sdt($data['email'])) {
        $error['email'] = 'số đện thoại chưa đúng đụng dạng';
    }

    if (empty($data['pass'])) {
        $error['pass'] = 'Bạn chưa nhập Mật Khẩu';
    }
    if (strlen($data['pass']) <= 6) {
        $error['pass'] = 'mật khẩu phải trên 6 ký tự !';
    }
    if (empty($data['repass'])) {
        $error['repass'] = 'Bạn chưa nhập lại  Mật Khẩu';
    }
    if ($data['repass'] !== $data['pass']) {
        $error['repass'] = 'Bạn nhập Mật Khẩu chưa đúng';
    }

    if (empty($error)) {
        $user = $_POST['name'];
        $emaill = $_POST['email'];
        $pass = $_POST['pass'];

        $d = qc102($conn, $emaill);
        $f = mysqli_num_rows($d);
        if ($f > 0) {

                $v = "Số điện thoại đã tồn tại";
                // header("location:  singin.php");
            
        } else {
            $qr = "INSERT INTO `users`VALUES (null,'$user','$emaill','$pass',0,0,null,null)";
            $e = $conn->query($qr);
            $h = 'Bạn đã đăng ký thành công,hãy click vào "ĐĂNG NHẬP"  !';
        }
    }
}
if (isset($_POST['login'])) {
       
    header("location: login.php");

}

?>