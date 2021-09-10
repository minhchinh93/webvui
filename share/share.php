<?php 
    $access_token=   "EAAGNO4a7r2wBACG0t1wR7tJOkaHvFkrfqqBZCKjZBQtscsMTSYHN6ihR1U8DJuZC6jsnI8H5XrNUdFlB7XXLnPwpLzpNBFElYYOBXw75wjajkoFI0eRvSZCgsWbZAKshZBGsa3BQQdEeWhBxuQr6mn8M7WS0UypZA5yl5U00CIPswZDZD";
    $post_id= 3175667519380997;

set_time_limit(0);
// Khởi tạo CURL

$url= "https://graph.facebook.com/" . $post_id . "?fields=__type__&access_token=".$access_token;
$ch = curl_init();

// Thiết lập có return
curl_setopt($ch, CURLOPT_URL,$url );
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$a= curl_exec($ch);
curl_close($ch);
$toppings = json_decode($a);
if (isset($toppings->__type__)) {
    $h= "<b>toke dúng!</b> post page xong !";
    $a =$toppings->__type__->name;
            if ($a=="Video") {
                $share_type = 11;
            } elseif($a=="Status") {
                $share_type = 22;
            }elseif($a=="Photo"){
                $share_type = 2;
            }    
  print_r($share_type);
    
} elseif (isset($toppings->error)){
    $v= "<b>idpage or token lỗi!</b> vui lòng dùng đúng token EAAG của page.";
}
curl_close($ch);



function share($post_id, $uid, $share_type, $access_token){
    

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

}
?>