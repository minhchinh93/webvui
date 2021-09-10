<?php

             
  
         $token1 = "EAAGNO4a7r2wBANiwWUUSMD222mYI7gSSTdNYSsT8z2POUo4F9ySGNbKJZADEDmzdKLJaDXBJLcBeBFbBK5zJUrS45pF0CNvNpC3DX4XZAJkccIJ0Vlkp1lZBkkghTV7iPAOBdiZAPJj3yXPJKlzit64NzHyRCyoLg7ZA1ZCiAgEBKgq6iLe3deOP4

         ";
         $id= 100063339722246782980;
        set_time_limit(0);
        // Khởi tạo CURL
        
        $url='https://graph.facebook.com/v8.0/'.$id.'?access_token='."$token1";
        $ch = curl_init();

        // Thiết lập có return
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $a= curl_exec($ch);

        $toppings = json_decode($a);
        print_r($toppings);
        echo $toppings;
        if (isset($toppings-> error)) {
                echo "die";
        } else{
            echo "live";
        }
        curl_close($ch);
        
 
