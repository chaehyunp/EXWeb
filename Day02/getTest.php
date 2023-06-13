<?php
    header('Content-Type:text/html; charset=utf-8');

    //사용자로부터(form요소) GET방식으로 전달된 데이터 받기
    $title=$_GET['title'];
    $message=$_GET['msg'];

    //잘 받았는지 확인하고자 사용자에게 응답(Request)
    echo "제목 : $title<br>메시지 : $msg";

?>