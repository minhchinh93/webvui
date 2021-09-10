<?php 






$uid= '100004877626406';
$access_token= 'EAAGNO4a7r2wBAJwhnn3sJAMzJBeFS1ZBZCQlGOWM76CqhpvcoCVjtiGHKokHtUI7RnE2G8YJ5MvMcHW0NL118CYkmk5bqUypannlOp7KxBQCeT6thbYzI5YLubmkrgOaMeV8mbZC8CMOdpOvjVatVQKSciBp2ml7CiwlSpn2AZDZD';
$friend_id= '100028223916028';

// $data = [
//  'av'   => $uid,
//  '__user'=>$uid,
//  '__a'=>1,
//  '__beoa'=> 1,
//  '__pc' => "EXP2:comet_pkg",
//  'dpr' =>1.5,
//  '__ccg' => "GOOD",
//  'fb_api_caller_class'=>"RelayModern",
//  'fb_api_req_friendly_name'=>"FriendingCometFriendRequestSendMutation",
//  'server_timestamps'=> "true",
//  'doc_id'=>"1802871789838119",
//  'variables' => 
//      "input" => [
//          "is_tracking_encrypted"=> "true",
//          "friend_requestee_ids" => $friend_id,
//          // "feedback_reaction"=> 1,
//          "refs"=> null,
//          "source"=> "profile_button", 
//          "actor_id"=> $uid,
//          "client_mutation_id"=> "1"
//      ],
//      "scale" => 1.5
//  ],
//  'access_token'=>$access_token,
// ];

//$json = json_decode($str, true);
$qr = http_build_query($data);
echo ($qr) ;
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
curl_setopt($ch,CURLOPT_TIMEOUT,1000);
$return = curl_exec($ch); 
curl_close($ch);
printf($return) ;

// function friend_request(friend_id, uid, access_token)
//     $.ajax({
//         url: "https://graph.facebook.com/graphql/",
//         type: "POST",
//         data: {
//             "av": uid,
//             "__user": uid,
//             "fb_api_caller_class": "RelayModern",
//             "fb_api_req_friendly_name": "FriendingCometFriendRequestSendMutation",
//             "server_timestamps": true,
//             "doc_id": "1802871789838119",
//             "variables": {
//               "input": {
//                 "friend_requestee_ids": [friend_id],
//                 "refs": [null],
//                 "source": "profile_button",
//                 "actor_id": uid,
//                 "client_mutation_id": "1"
//               },
//               "scale": 1.5
//             },
//             "access_token": access_token
//         },
//         success: function (result) {
            
//         }
//     });
// }





?>