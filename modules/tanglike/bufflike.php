<?php

/// like page

if (isset($_POST['submit'])) {
    $tk = $_POST['cmt'];
    $page_id= $_POST['UIDpage'];
    $n = $row['so_su']- 30;

    switch ($tk) {
        case 10:
            $n = $row['so_su']- 30;
          include 'likepage.php';
            
            break;
        case 1000:
            $n = $row['so_su']- 50;
            include 'likepage.php';
            break;
        case 2000:
            $n = $row['so_su']- 100;
            include 'likepage.php';
            break;
        case 50000:
            $n = $row['so_su']- 500;
            include 'likepage.php';
            break;
            case 100000:
                $n = $row['so_su']- 1000;
                include 'likepage.php';
                break;
        default:
        echo 'Không tìm thấy';
            break;

    }
}
//like post

if (isset($_POST['submit1'])) {
    $tk = $_POST['cmt1'];
    $post_id= $_POST['UIDpost'];
    $feedback_id = base64_encode('feedback:'. $post_id);



    switch ($tk) {
        case 10:
            $n = $row['so_su']- 30;
            include 'likepost.php';
              break;
        case 1000:
            $n = $row['so_su']- 50;
            include 'likepost.php';
            break;
        case 2000:
            $n = $row['so_su']- 100;
            include 'likepost.php';
            break;
        case 50000:
            $n = $row['so_su']- 500;
            include 'likepost.php';
            break;
            case 100000:
                $n = $row['so_su']- 1000;
                include 'likepost.php';
                break;
        default:
        echo 'Không tìm thấy';
            break;

    }
}



?>