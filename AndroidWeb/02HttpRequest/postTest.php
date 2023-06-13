<?php
    header("Content-Type:text/html; charset=utf-8");

    //사용자가 POST 방법으로 보낸 데이터들은 $_POST[]이라는 배열에 저장되어있음
    $id=$_POST["id"];
    $password=$_POST["pw"];

    //잘 받았는지 확인을 위해 사용자[web browser]에게 응답 Response
    echo "ID : $id <br>"; //php "" 안에서 $는 변수로 인식됨
    echo "PASSWORD : $password";
?>