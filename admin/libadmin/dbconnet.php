<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="banhang";


// Create connection
$conn= mysqli_connect($servername, $username, $password, $dbname);

//show dữ liệu admin
function qluser($conn){
    $qr= "SELECT * FROM `users` WHERE remember_token=1";
    $e = $conn->query($qr);
    return $e;
}
//show dữ liệu user
function qlthanhvien($conn){
    $qr= "SELECT * FROM `users` WHERE remember_token=0";
    $e = $conn->query($qr);
    return $e;
}
// láy ra thnhf viên thứ id
function qluserid($conn, $id){
    $qr= "SELECT * FROM `users` WHERE id=$id";
    $e = $conn->query($qr);
    return $e;
}
// + tien cho thành vien

function congtien($conn,$n,$id){

    $qr = "UPDATE `users` SET `so_su`= $n WHERE id = '$id'  ";
     $e = $conn->query($qr);
};

// xóa user

function xoauser($conn,$id){
    $qr="DELETE FROM `users` WHERE  id ='$id'";
   $e = $conn->query($qr);
}

////tài nguyên
// show tàinguyen

function qltn($conn){
    $qr= "SELECT * FROM `tainguyen`";
    $e = $conn->query($qr);
    return $e;
}

//tổng số tài nuyên
function tongtn($conn){
    $qr= "SELECT * FROM `tainguyen` ORDER BY id";
    $e = $conn->query($qr);
    return $e;
}
//acc die {
    
    function accdie($conn){
        $qr= "SELECT * FROM `tainguyen` WHERE live=0 ORDER BY id";
        $e = $conn->query($qr);
        return $e;
    }
    //acclive
    function acclive($conn){
        $qr= "SELECT * FROM `tainguyen` WHERE live=1 ORDER BY id";
        $e = $conn->query($qr);
        return $e;
    }

    //phan trang

    function phantrang($conn, $tin, $trang)
{
    $qr = "SELECT * FROM `tainguyen` ORDER BY id  LIMIT  $trang,$tin";
    $e = $conn->query($qr);
    return $e;
}
//iset dữ liệu tài khaonr live die
function updatetk($conn,$n,$i){

    $qr = "UPDATE `tainguyen` SET live=$n WHERE id= $i  ";
     $e = $conn->query($qr);
};

//xóa tk đie
function xoatk($conn){

    $qr = "DELETE FROM `tainguyen` WHERE live=1";
     $e = $conn->query($qr);
     
};
//imporrt data

function importdata($conn,$a,$b,$c,$d){
     $qr= "INSERT INTO `tainguyen`(`id`, `uid`, `pass`, `2fa`, `cookie`, `token`, `live`) VALUES (null,'$a','$b',1,'$c','$d',1)";
      $e = $conn->query($qr);
     }