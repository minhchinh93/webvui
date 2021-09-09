<?php 
    $token=   $_GET['token'];
    set_time_limit(1000);
    // Khởi tạo CURL
    $url= 'https://graph.facebook.com/me/feed?fields=id,name&limit=1000&access_token='."$token";
    $ch = curl_init();

    // Thiết lập có return
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $a= curl_exec($ch);
    curl_close($ch);
    $toppings = json_decode($a);
    if (isset($toppings->data)) {
        $x = count($toppings->data);
        for ($i = 0; $i < $x; $i++) {
            $id = $toppings->data[$i]->id;
            delete_posts($id, $token);

            $h = '.';
            
        }
    }elseif (isset($toppings->error)) {
        $v= "<b>token lỗi!</b> vui lòng dùng đúng token EAAG của page.";
    } 
  
    function delete_posts($id,$token)
    {
        set_time_limit(1000);
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
           
            // header('Location: http://www.example.com/');
            
        }elseif (isset($toppings->error)){
            
        
        }
        curl_close($ch);   
        
    }
   
?>