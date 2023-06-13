<?php
    header("Content-Type:application/json; charset=utf-8");

    //읽어와서 다시 연관배열로 바꿔옴
    $name=$_POST["name"];
    $message=$_POST["msg"];

    //잘 받았는지 확인해보기위해 안드로이드로 echo
    //안드로이드는 json으로 보내줘야하기에
    $arr=array();
    $arr["name"]=$name;
    $arr["msg"]=$message;

    //응답 : json으로
    echo json_encode($arr);
?>