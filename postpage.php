<?php 


set_time_limit(0);
// Khởi tạo CURL

$url= 'https://graph.facebook.com/v2.1//feed?fields=id,name,message,attachments&access_token=EAAGNO4a7r2wBAOhRR8ZCrFwAvGT41SDHxb8O6UfnxFq9LFAuHCmCxQx2dNhQ0fIDWmSgfQTfuZAzyQ81cF7mxf87T6iCAueGL62Dbobh6GuHbUpZCm9EveSEYWOZB2jprag0tmGjNZAVmgdK9B3kd6A7Tx32uOE2q6atZAHcyAPr9VWm5xjSlQOepKHKpkDOrBZCmJcFYACCAZDZD';
$ch = curl_init();

// Thiết lập có return
curl_setopt($ch, CURLOPT_URL,$url );
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$a= curl_exec($ch);
curl_close($ch);
$toppings = json_decode($a);
$b= $toppings->data;
$x = count($toppings->data);
for ($i = 0; $i < $x; $i++) {
    if (isset($toppings->data[$i]->attachments)) {
        if (isset($toppings->data[$i]->attachments->data[0]->media->source)) {
            // let message = page_list[i]['message'];
            $message0= $toppings->data[$i]->message;
            // let video_url = page_list[i]['attachments']['data'][0]['media']['source'];
            $video_url= $toppings->data[$i]->attachments->data[0]->media->source;
            file_url($video_url, $message0);
            
        }else {
            $message1= $toppings->data[$i]->message;
            // let attachments = page_list[i]['attachments']['data'][0]['media']['image']['src'];
            $photo= $toppings->data[$i]->attachments->data[0]->media->image->src;
         photo($photo,$message1);
           
        }
    }else {
        $message= $toppings->data[$i]->message;
       
        post_message($message);
    }
}
curl_close($ch);

    return $return;

$id = $toppings->data[$i]->attachments->data[0]->media->source;

function post_message($message)
{
    $data = [

        'message'   => $message,
        'access_token'=>'EAAGNO4a7r2wBAOCuRz9tKHnsdLds5k9FoZCzvk1iV7oF80j0Q0KkVaeqFa3tzHRhxpqspwSjrZAzcpLXZBCMJbCVJFCf2iznuec14uwv0jyv5Rsp4KxfxCtKg4FBRN27L8kUaBbXvDpbrcZBTr8ZAMOwfZBszElWTw76nk9ntgyuurmKikPH4zF7QZCtSjujEpyeRaKP9B3lAZDZD',
       
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
    echo($return);
  
}


// post hình
function photo($photo,$message1)
{
    $data = [
     'url' =>  $photo,
    'caption'   => $message1,
    'access_token'=>'EAAGNO4a7r2wBAOCuRz9tKHnsdLds5k9FoZCzvk1iV7oF80j0Q0KkVaeqFa3tzHRhxpqspwSjrZAzcpLXZBCMJbCVJFCf2iznuec14uwv0jyv5Rsp4KxfxCtKg4FBRN27L8kUaBbXvDpbrcZBTr8ZAMOwfZBszElWTw76nk9ntgyuurmKikPH4zF7QZCtSjujEpyeRaKP9B3lAZDZD',
   
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
    echo($return);
}



//post video
function file_url($video_url, $message0)
{
    $data = [
    'file_url' => $video_url,
   'description'   => $message0,
   'access_token'=>'EAAGNO4a7r2wBAOCuRz9tKHnsdLds5k9FoZCzvk1iV7oF80j0Q0KkVaeqFa3tzHRhxpqspwSjrZAzcpLXZBCMJbCVJFCf2iznuec14uwv0jyv5Rsp4KxfxCtKg4FBRN27L8kUaBbXvDpbrcZBTr8ZAMOwfZBszElWTw76nk9ntgyuurmKikPH4zF7QZCtSjujEpyeRaKP9B3lAZDZD',
  
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
    echo($return);
}





?>