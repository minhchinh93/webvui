<?php




if (isset($_POST['submit'])) {
     $input =  explode("|", $_POST['tken']);
     $uid= $input[0];
     $access_token=  $input[1];
     $group=  explode("\n", $_POST['id_group']); 
     $c = count($group);
     for ($i=0; $i<$c; $i++) {
         $uid_gr= $group[$i];
         
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
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $qr);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
        $return = curl_exec($ch);
        curl_close($ch);
        sleep (rand (1, 5));
    }
    $_SESSION['id_group']= $_POST['id_group'];
    $h = "bạn đã jion nhóm xong";
}
?>