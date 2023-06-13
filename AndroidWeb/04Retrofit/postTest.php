<?php
    header("Content-Type:application/json; charset=utf-8");

    //@Body로 보낸 json문자열은 $_POST라는 배열에 자동 저장되지않음
    //$name=$_POST["name"];이 되지않음
    //json으로 넘어온 데이터는 별도의 임시공간[php://input]에 파일로 보관되어 있음
    //이 파일을 읽어서 $_POST 배열 변수에 대입해주기

    $data=file_get_contents("php://input");
    //$data는 json으로 된 문자열 - json으로 넣었으니 json으로 읽어온것
    $_POST=json_decode($data, true);  //true : 연관배열로 할것인지에 대한 여부

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