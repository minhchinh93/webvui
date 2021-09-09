<?php 

if (isset($_POST['submit'])) {
    $urlToken = (isset($_POST['txt_x'])) ? $_POST['txt_x'] : "1";
    if (preg_match('/EAAG(.*?)","/', $urlToken, $match)) {
        $token1 = "EAAG" . $match[1] ;
    } else {
        $tokenPage = "1";
        $v= "Cấp quyền thất bại, vui lòng làm lại bước 1, coppy đầy đủ nội dung source";
    }
    $_SESSION['txt_x']= $token1;
}


if (isset($_POST['submit1'])) {

         $token = $_POST['eaag'];
         $id = $_POST['idpost'];
         $sb = $_POST['sb'];
        set_time_limit(0);
        // Khởi tạo CURL
        
        $url='https://graph.facebook.com/'.$id.'/feed?fields=id,name&limit='.$sb.'&access_token='."$token";
        $ch = curl_init();

        // Thiết lập có return
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $a= curl_exec($ch);

        $toppings = json_decode($a);
        if (isset($toppings->data)) {
            $x = count($toppings->data);
            for ($i = 0; $i < $x; $i++) {
                $a= $toppings->data[$i]->id;
                $b= $toppings->data[$i]->name;
                $c= $toppings->data[$i]->created_time;
            }
            $h= "<b>toke dúng!</b> quét page xong !";
        } elseif (isset($toppings->error)) {
            $v= "<b>token lỗi!</b> vui lòng dùng đúng token EAAG ở trong link https://business.facebook.com/.";
            $x = "";
        }
        curl_close($ch);
        
    } 

   


?>