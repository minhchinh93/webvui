<?php
$token1 = "EAAGNO4a7r2wBAAwxTSpO3DBg3zvvoO2t3MuKrkgCIULxqW7518CbljyxMhomUrxLsfHSksHptElndmsSvZCP9TW0EXeMZCNZAwCU6zuZBf6jZCxr56VB2XjP7ZCMJXaXJH3TdA1QuD2w36ZBcGRfZA4YKY5jCk1ZAKkaoXnZAX8wiXfAZDZD"; 
$b= tongtn($conn);
while ($row = $b->fetch_array()) { 
   $id= $row['uid'];
   $i= $row['id'];
    set_time_limit(0);
    // Khởi tạo CURL       
    $url='https://graph.facebook.com/v8.0/'."$id".'?access_token='."$token1";
    $ch = curl_init();
    // Thiết lập có return
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $a= curl_exec($ch);
    $toppings = json_decode($a);
    if (isset($toppings->error)) {
        $n= 1;
        updatetk($conn,$n,$i);
    } else { 
        $n= 0;
        updatetk($conn,$n,$i);

    }
    curl_close($ch);
    header("Location:index.php?module=product" );
}
