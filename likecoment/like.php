<?php





       $uid= '100004877626406';
       $access_token= 'EAAGNO4a7r2wBAJYs3Ev2w5WKZAHzUL6j19sz6ZAg6t7IchPSxvTZCCayJwZBCGfgEVWcfyZC9TKCOAkf2FCWrITfEH9Ngi1T08bTkmaxVTyZBgPaxRZCA4gZBHtJz1ICY03hxvOPViqZC7xlVgjQLve5TznNWZAsVNkPvTt2P65XYhbQZDZD';
       $post_id= '878461296437993';
       $feedback_id = base64_encode('feedback:'. $post_id);
  
       $data = [
        'av'   => $uid,
        '__user'=>$uid,
        'fb_api_caller_class'=>"RelayModern",
        'fb_api_req_friendly_name'=>"CometUFIFeedbackReactMutation",
        'variables' => [
            "input" => [
                "feedback_id" => $feedback_id,
                "feedback_reaction"=> 1,
                "feedback_source"=> "NEWS_FEED",
                "is_tracking_encrypted"=> false,
                "tracking"=> null,
                "session_id"=> null,
                "actor_id"=> $uid,
                "client_mutation_id"=> 1
            ],
            "useDefaultActor" => false
        ],
        'server_timestamps'=>true,
        'doc_id'=>"3928142190617090",
        'access_token'=>$access_token,
    ];
    //$json = json_decode($str, true);
    $qr = http_build_query($data);
    set_time_limit(0);
    //test delete
    $url= "https://graph.facebook.com/graphql/";
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
    curl_setopt($ch,CURLOPT_TIMEOUT,4000);
    $return = curl_exec($ch); 
    curl_close($ch);

?>


