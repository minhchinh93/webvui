<?php
    $uid= 100004877626406;
    $access_token=   "EAAGNO4a7r2wBACG0t1wR7tJOkaHvFkrfqqBZCKjZBQtscsMTSYHN6ihR1U8DJuZC6jsnI8H5XrNUdFlB7XXLnPwpLzpNBFElYYOBXw75wjajkoFI0eRvSZCgsWbZAKshZBGsa3BQQdEeWhBxuQr6mn8M7WS0UypZA5yl5U00CIPswZDZD";
    $post_id= 1849457945226775;
    $share_type=22;
    $message= "chinh dep trai";
    $share_to=100004877626406;

$data = [

   'av'   => $uid,
   '__user'=>$uid,
   'fb_api_caller_class'=>"RelayModern",
   'fb_api_req_friendly_name'=>"useCometFeedToFeedReshare_FeedToFeedMutation",
   'server_timestamps'=>true,
   'doc_id'=>"4295448897198857",
   'variables' => "{\"input\":{\"attachments\":{\"link\":{\"share_scrape_data\":\"{\\\"share_type\\\":".$share_type.",\\\"share_params\\\":[".$post_id."]}\"}},\"audiences\":{\"undirected\":{\"privacy\":{\"allow\":[],\"base_state\":\"EVERYONE\",\"deny\":[],\"tag_expansion_state\":\"UNSPECIFIED\"}}},\"is_tracking_encrypted\":true,\"source\":\"www\",\"tracking\":[],\"actor_id\":\"".$uid."\",\"client_mutation_id\":\"3\"},\"renderLocation\":\"homepage_stream\",\"scale\":1,\"privacySelectorRenderLocation\":\"COMET_STREAM\",\"useDefaultActor\":false,\"displayCommentsContextEnableComment\":null,\"feedLocation\":\"NEWSFEED\",\"displayCommentsContextIsAdPreview\":null,\"displayCommentsContextIsAggregatedShare\":null,\"displayCommentsContextIsStorySet\":null,\"displayCommentsFeedbackContext\":null,\"feedbackSource\":1,\"focusCommentID\":null,\"UFI2CommentsProvider_commentsKey\":\"CometModernHomeFeedQuery\"}",  
   "access_token"=> $access_token
];

$qr = http_build_query($data);
echo $qr;
set_time_limit(0);
//test delete
$url= "https://graph.facebook.com/graphql/";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
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



//  include ('addfr.php');

//  if (isset($_POST['submit'])) {
//     //  $input =  explode("|", $_POST['tken']);
//     // //  print_r( $input);
//     //  $uid= $input[0];
//     //  $access_token=  $input[1];
//      $bb=  explode("\n", $_POST['id_fr']);
//      $c = count($bb);
//      //print_r($c);
//      for ($i=0; $i<$c; $i++) {
         
//          $friend_id= trim($bb[$i]);
//          echo $friend_id ."<br>";
//          sleep (rand (1, 5));
//      }

//     // foreach ($bb as $i => $friend_id){
//     //     print_r($friend_id);
//     // }
//  } 

?>
  <!-- <form method="POST">
                                  <td><a href="basic_table.html#">1</a></td>
                                  <td class="hidden-phone"><textarea type="text"  class="form-control" id="exampleInputEmail2" name="id_fr" placeholder="nhập uid bạn bè "cols="30" rows="10"><?=  $_SESSION['id_fr']?? null ?></textarea></td>
                                  <td>
                                  <button type="submit" name="submit" class="btn btn-round btn-success"  >run</button>
                                  </td>
                                  </form> --> 