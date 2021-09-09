<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="banhang";


// Create connection
$conn= mysqli_connect($servername, $username, $password, $dbname);

//check login
function qc102($conn, $emaill)
{
    $qr = "SELECT * FROM `users` 
 WHERE email = '$emaill' 
 ";
    $e = $conn->query($qr);
    return $e;
};


function qc12($conn, $emaill, $pass)
{
    $qr = "SELECT * FROM `users` 
 WHERE email = '$emaill' 
 AND  password = '$pass'
 ";
    $e = $conn->query($qr);
    return $e;
};

function qc112( $conn,$id)
{
    $qr = "SELECT `so_su` FROM `users` 
    WHERE id = '$id'  ";
    
     $e = $conn->query($qr);
     return $e;
};

function qc122( $conn,$n,$id)
{
    $qr = "UPDATE `users` SET `so_su`= $n WHERE id = '$id'  ";
     $e = $conn->query($qr);
};

function qc132( $conn,$tk)
{
    $qr = "SELECT `uid`, `token` FROM `tainguyen` 
      ORDER BY id DESC LIMIT 0,$tk";
    $e = $conn->query($qr);
    return $e;
};

function qc142( $conn,$tk)
{
    $qr = "SELECT `uid`, `token` FROM `tainguyen` 
      ORDER BY id DESC LIMIT 0,$tk";
    $e = $conn->query($qr);
    return $e; 
};
?>



