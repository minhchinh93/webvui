<?php 

if (isset($_POST['submit'])) {
    $input =  explode("|", $_POST['tken']);
    $uid= $input[0];
    $access_token=  $input[1];
    $bb=  explode("\n", $_POST['id_fr']);
    $c = count($bb);
    for ($i=0; $i<$c; $i++) {
        $friend_id= trim($bb[$i]);
        $data = [
            'av'   => $uid,
            '__user'=>$uid,
            '__a'=>1,
            '__beoa'=> 1,
            '__pc' => "EXP2:comet_pkg",
            'dpr' =>1.5,
            '__ccg' => "GOOD",
            'fb_api_caller_class'=>"RelayModern",
            'fb_api_req_friendly_name'=>"FriendingCometFriendRequestSendMutation",
            'server_timestamps'=> "true",
            'doc_id'=>"1802871789838119",
            'variables' => [
                "input" => [
                    "friend_requestee_ids" => $friend_id,
                    "refs"=> null,
                    "source"=> "profile_button",
                    "client_mutation_id"=> 1,
                    "actor_id"=> $uid,
                ],
                "scale" => '1.5',
            ],
            'access_token'=>$access_token,
        ];
        $qr = http_build_query($data);
        set_time_limit(0);
        $url= "https://graph.facebook.com/graphql/";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $qr);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
        $return = curl_exec($ch);
        curl_close($ch);
        sleep (rand (1, 5));
    }
    $_SESSION['id_fr']= $_POST['id_fr'];
    $h = "bạn đã Add friend xong";
}