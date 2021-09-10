

<?php


set_time_limit(0);
// Khởi tạo CURL

$url='https://graph.facebook.com/me/facebook_pages?fields=id,name,access_token&limit=100&access_token=EAAGNO4a7r2wBAMU3MXbkZByOTpiu5JgwQhRYm9ZCN9Qd6qpbAlWjzjiO8T25v1s4XJFYtfWO7pkKIU1XlGqzDAxPlEKkDyQjYsOiYr9vG7G3oQP5QIpVA502o8Le5qZBFNNr9NAo7IacmJXqLd2Q8fXOzu7vm0SXliiPJQ31iarJKpo5SvF75pEzK08Hy4ZD';
$ch = curl_init();

// Thiết lập có return
curl_setopt($ch, CURLOPT_URL,$url );
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$a= curl_exec($ch);
curl_close($ch);
$toppings = json_decode($a);
if (isset($toppings->data)) {
    $x = count($toppings->data);


    for ($i = 0; $i < $x; $i++){
    echo $toppings->data[$i]->id,"<br/>";
    echo $toppings->data[$i]->name,"<br/>";
    echo $toppings->data[$i]->access_token,"<br/>";
}
} elseif (isset($toppings->error)){
         $v= "<b>token lỗi! </b> vui lòng dùng đúng token EAAG ở trong link https://business.facebook.com/.";
}
echo $a;
?>


