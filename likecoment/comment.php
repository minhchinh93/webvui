<?php  

         $idPost= 876743613276428;
         $message= "test comnt";
         $access_token="EAAGNO4a7r2wBADLJqbYC9CuqZBAtSEtEmxWwqZCfFvU0w5bdKUTHfA3xi2nupNFPhxbrQzLPpOClCdvZCVOCnXIUFSpQ0QeVQhOrhdxdUdq2WsSMlXmLO0jiXMshVQtZA5fa6SRsFIPrmynHBHxYBjf8HxX9nxsVm9VWtcEsdAZDZD";

  
    $data = [
        'message'   => $message,
        'access_token' => $access_token,

    ];
    $qr = http_build_query($data);
    set_time_limit(0);
    //test delete
    $url = 'https://graph.facebook.com/' . "$idPost" . '/comments';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $qr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_TIMEOUT,1000);
    $return = curl_exec($ch); 
    curl_close($ch);
    echo $return;


 