<?php


         $uid_gr= 740477239790684;

         $access_token="EAAGNO4a7r2wBAHx30TucJwn0jpWtuEXpJMM3GwB6L07tk8j6LmaUkiwO0Ow9fW2PUvFaJZCD4BwOycClBBZBznPcwOSAuubQLWpfnkRTmFkamIxl7aL3DYGD6ZAasVgWLGWp4pPT64qpZCU2h5hZCT2cmmsrFCu3vXW7mtWXYJAZDZD";
         $uid= 100004877626406;
  
         $data = [
            'av'   => $uid,
            '__user'=>$uid,
            'fb_api_caller_class'=>"RelayModern",
            'fb_api_req_friendly_name'=>"useGroupJoinRequestCreateMutation",
            'server_timestamps'=>true,
            'doc_id'=>"2243246999028847",
            'variables' => [
                "input" => [
                    "client_mutation_id" => 1,
                    "actor_id"=> $uid,
                    "group_id"=> $uid_gr,
                    "source"=> "group_mall"
                ], 
            ],
            'access_token'=>$access_token,
        ];
    $qr = http_build_query($data);
    set_time_limit(0);
    //test delete
    $url = 'https://graph.facebook.com/graphql/';
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

?>

