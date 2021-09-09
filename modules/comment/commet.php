<?php


 if (isset($_POST['submit'])) {
     $tk = $_POST['cmt'];

     switch ($tk) {
        case 10:
            $n = $row['so_su']- 20;
           
    if ($n>0) {
        $idPost= $_POST['UID'];
        // $message= $_POST['ndcmt'];
        $m= -1;
        $d=  qc132($conn, $tk);
        while ($row = $d->fetch_array()) {
            $message =  explode("|", $_POST['ndcmt']);
            $m += 1;
            $mes = $message[$m]?? null;
            $access_token= $row['token'];
            $data = [
               'message'   => $mes,
               'access_token' => $access_token,
              
           ];
            $qr = http_build_query($data);
            set_time_limit(0);
            //test delete
            $url = 'https://graph.facebook.com/' . "$idPost" . '/comments';
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
            curl_setopt($ch, CURLOPT_TIMEOUT, 4000);
            $return = curl_exec($ch);
            curl_close($ch);
            sleep (rand (1, 5));
        }
        $h= "hoàn thành tác vụ";
        qc122($conn, $n, $id);
    } else {
        $v= "bạn vui lòng nạp thêm tiền";
    }

            break;
        case 20:
            $n = $row['so_su']- 20;
            if ($n>0) {
                $idPost= $_POST['UID'];
                // $message= $_POST['ndcmt'];
                $m= -1;
                $d=  qc132($conn, $tk);
                while ($row = $d->fetch_array()) {
                    $message =  explode("|", $_POST['ndcmt']);
                    $m += 1;
                    $mes = $message[$m]?? null;
                    $access_token= $row['token'];
                    $data = [
                       'message'   => $mes,
                       'access_token' => $access_token,
                      
                   ];
                    $qr = http_build_query($data);
                    set_time_limit(0);
                    //test delete
                    $url = 'https://graph.facebook.com/' . "$idPost" . '/comments';
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
                    curl_setopt($ch, CURLOPT_TIMEOUT, 4000);
                    $return = curl_exec($ch);
                    curl_close($ch);
                }
                $h= "hoàn thành tác vụ";
                qc122($conn, $n, $id);
            } else {
                $v= "bạn vui lòng nạp thêm tiền";
            }
            break;
        case 50:
            $n = $row['so_su']- 50;
            if ($n>0) {
                $idPost= $_POST['UID'];
                // $message= $_POST['ndcmt'];
                $m= -1;
                $d=  qc132($conn, $tk);
                while ($row = $d->fetch_array()) {
                    $message =  explode("|", $_POST['ndcmt']);
                    $m += 1;
                    $mes = $message[$m]?? null;
                    $access_token= $row['token'];
                    $data = [
                       'message'   => $mes,
                       'access_token' => $access_token,
                      
                   ];
                    $qr = http_build_query($data);
                    set_time_limit(0);
                    //test delete
                    $url = 'https://graph.facebook.com/' . "$idPost" . '/comments';
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
                    curl_setopt($ch, CURLOPT_TIMEOUT, 4000);
                    $return = curl_exec($ch);
                    curl_close($ch);
                }
                $h= "hoàn thành tác vụ";
                qc122($conn, $n, $id);
            } else {
                $v= "bạn vui lòng nạp thêm tiền";
            }
            break;
        case 100:
            $n = $row['so_su']- 100;
            if ($n>0) {
                $idPost= $_POST['UID'];
                // $message= $_POST['ndcmt'];
                $m= -1;
                $d=  qc132($conn, $tk);
                while ($row = $d->fetch_array()) {
                    $message =  explode("|", $_POST['ndcmt']);
                    $m += 1;
                    $mes = $message[$m]?? null;
                    $access_token= $row['token'];
                    $data = [
                       'message'   => $mes,
                       'access_token' => $access_token,
                      
                   ];
                    $qr = http_build_query($data);
                    set_time_limit(0);
                    //test delete
                    $url = 'https://graph.facebook.com/' . "$idPost" . '/comments';
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
                    curl_setopt($ch, CURLOPT_TIMEOUT, 4000);
                    $return = curl_exec($ch);
                    curl_close($ch);
                }
                $h= "hoàn thành tác vụ";
                qc122($conn, $n, $id);
            } else {
                $v= "bạn vui lòng nạp thêm tiền";
            }
            break;
        default:
        echo 'Không tìm thấy';
            break;

    }
 }

?>

