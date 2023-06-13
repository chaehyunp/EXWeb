<?php
    header("Content-Type:text/plain; charset=utf-8");

    //Android로부터 GET방식으로 전달된 data 받기
    $name=$_GET["name"];
    $message=$_GET["msg"];

    //잘 받았는지 Android쪽으로 응답(echo)
    echo "이름 : $name \n메시지 : $message"
?>