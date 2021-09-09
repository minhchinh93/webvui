<?php



if (isset($_POST['submit'])) {
    $n = $row['so_su']- 100;
    if ($n>=0) {
         $token1 = $_POST['txt_x'];
        set_time_limit(0);
        // Khởi tạo CURL
        
        $url='https://graph.facebook.com/v11.0/me/facebook_pages?fields=id,name,fan_count,access_token&actions&limit=100&access_token='."$token1";
        $ch = curl_init();

        // Thiết lập có return
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $a= curl_exec($ch);

        $toppings = json_decode($a);
        if (isset($toppings->data)) {
            $x = count($toppings->data);
            for ($i = 0; $i < $x; $i++) {
                $a= $toppings->data[$i]->id;
                $b= $toppings->data[$i]->name;
                $c= $toppings->data[$i]->fan_count;
                $d= $toppings->data[$i]->access_token;
            }
            $h= "<b>toke dúng!</b> quét page xong !";
        } elseif (isset($toppings->error)) {
            $v= "<b>token lỗi!</b> vui lòng dùng đúng token EAAG ở trong link https://business.facebook.com/.";
            $x = "";
        }
        curl_close($ch);
        
    } else { 
        $v = "bạn  phải có só dư lơn hơn $200";
        $x = "";
    }
}else {
    $x = "";
}
   
?>