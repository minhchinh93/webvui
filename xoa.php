<?php 


    $token=  'EAAGNO4a7r2wBAMylc8z9OZCsHEd3sXfkZAP1GIfbFWMHVVpZCZCYPcS5e6lzLiZAaOTAaG2L1FZB1hAtldLvoo2JEQxZBwEPsuyazION1SlKjOxD7MpahQUFBZBFcAxtvqEjX5tfA8BhMsTPatVXwg3Bt1fyFhJh8NYlM31SJNi7hL3A84F4nNjZAku4LWj2D5GtbZBSbZBSrFivgZDZD';
    set_time_limit(0);
    // Khởi tạo CURL

    $url= 'https://graph.facebook.com/me/feed?fields=id,name&access_token='."$token";
    $ch = curl_init();

    // Thiết lập có return
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $a= curl_exec($ch);
    curl_close($ch);
    $toppings = json_decode($a);
    $x = count($toppings->data);
    for ($i = 0; $i < $x; $i++) {
        $id = $toppings->data[$i]->id;
   
    
        delete_posts($id,$token);
    }
    function delete_posts($id,$token)
    {
        set_time_limit(0);
        //test delete

        $url= 'https://graph.facebook.com/v8.0/'.$id.'?access_token='."$token";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        /* curl_setopt($process, CURLOPT_PUT, 'DELETE'); */
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        $b = curl_exec($ch);
        $toppings = json_decode($b);

        if (isset($toppings->success)) {
          $h=  '.';
          echo $h;
        }elseif (isset($toppings->error)){
             $v= "<b>token lỗi!</b> vui lòng dùng đúng token EAAG ở trong link https://business.facebook.com/.";
        }
        curl_close($ch);
     

    }

?>