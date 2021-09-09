 <?php   if($n>0) {
        $d= qc142($conn, $tk);
        while ($row = $d->fetch_array()) {
            $access_token= $row['token'];
            $uid= $row['uid'];
            $data = [
                'av'   => $uid,
                '__user'=>$uid,
                'fb_api_caller_class'=>"RelayModern",
                'fb_api_req_friendly_name'=>"CometUFIFeedbackReactMutation",
                'variables' => [
                    "input" => [
                        "is_tracking_encrypted"=> true,
                        "page_id" => $page_id,
                        // "feedback_reaction"=> 1,
                        "source"=> "unknown",
                        "tracking"=> null,
                        "actor_id"=> $uid,
                        "client_mutation_id"=> 2
                    ],
                    "isAdminView" => false
                ],
                'server_timestamps'=>true,
                'doc_id'=>"3903192349783009",
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
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $qr);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
            $return = curl_exec($ch);
            curl_close($ch);
          
        }
        // qc122( $conn,$n,$id);
        $h= "hoàn thành tác vụ like pahe";
    }else {
        $v=" vui lòng nạp thêm tiền";
    }
    