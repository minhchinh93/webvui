<?php
if (isset($_POST['submit'])) {
    $token=   $_GET['token'];
    $id= $_POST['txt_y'];
    $limit= $_POST['txt_x'];
    $token1= $_GET['token1'];
set_time_limit(0);
// Khởi tạo CURL

$url= 'https://graph.facebook.com/v2.1/'.$id.'/feed?fields=id,name,message,attachments&limit='.$limit.'&access_token='."$token1";
$ch = curl_init();

// Thiết lập có return
curl_setopt($ch, CURLOPT_URL,$url );
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$a= curl_exec($ch);
curl_close($ch);
$toppings = json_decode($a);
if (isset($toppings->data)) {
    
    $b= $toppings->data;
    $x = count($toppings->data);
    $h= "<b>toke dúng!</b> post page xong !";
   
    for ($i = 0; $i < $x; $i++) {
        if (isset($toppings->data[$i]->attachments)) {
            if (isset($toppings->data[$i]->attachments->data[0]->media->source)) {
                $message0= $toppings->data[$i]->message;
                $video_url= $toppings->data[$i]->attachments->data[0]->media->source;
                file_url($video_url, $message0, $token);
            } else {
                $message1= $toppings->data[$i]->message?? null;
                $photo= $toppings->data[$i]->attachments->data[0]->media->image->src?? null;
                photo($photo, $message1, $token);
            }
        } else {
            $message= $toppings->data[$i]->message;
            post_message($message, $token);
        }
    }

   
} elseif (isset($toppings->error)){
    $v= "<b>idpage or token lỗi!</b> vui lòng dùng đúng token EAAG của page.";
}
curl_close($ch);


   


// $id = $toppings->data[$i]->attachments->data[0]->media->source;
}
function post_message($message,$token)
{
    $data = [

        'message'   => $message,
        'access_token'=>$token,
       
    ];
    $qr = http_build_query($data);
    set_time_limit(0);
    //test delete
    $url= "https://graph.facebook.com/v11.0/me/feed";
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
    sleep (rand (1, 5));
  
}


// post hình
function photo($photo,$message1,$token)
{
    $data = [
     'url' =>  $photo,
    'caption'   => $message1?? null,
    'access_token'=>$token,
   
];
    $qr = http_build_query($data);
    set_time_limit(0);
    //test delete
    $url= "https://graph.facebook.com/v11.0/me/photos";
    // https://graph.facebook.com/v11.0/me/photos
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $qr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_TIMEOUT,1000);

    $return = curl_exec($ch);



    curl_close($ch);
    sleep (rand (1, 5));
}



//post video
function file_url($video_url, $message0,$token)
{
    $data = [
    'file_url' => $video_url,
   'description'   => $message0,
   'access_token'=>$token,
  
];
    $qr = http_build_query($data);
    set_time_limit(0);
    //test delete
    $url= "https://graph.facebook.com/v11.0/me/videos";
    // https://graph.facebook.com/v11.0/me/videos
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $qr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_TIMEOUT,3000);

    $return = curl_exec($ch);



    curl_close($ch);
    sleep (rand (1, 5));
}





?>