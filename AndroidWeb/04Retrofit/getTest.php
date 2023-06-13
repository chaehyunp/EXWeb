<?php
    header("Content-Type:application/json; charset=utf-8");

    $name=$_GET["name"];
    $message=$_GET["msg"];

    //잘 받았는지 확인하기위해 안드로이드쪽으로 다시 응답 echo
    //단, 안드로이드에서 응답결과를 json형식으로 받아 처리하도록 되어있음 
    //@GET("Retrofit/getTest.php")
    //Call<Item> getMethodTest(@Query("name") String name, @Query("msg") String message); --> Call<Item>
    //php언어는 연관배열을 json으로 쉽게 바꿔줌
    //echo할 데이터값 $name $message를 연관배열로 만들기

    $arr=array(); //빈 배열 만들기
    $arr["name"]=$name;
    $arr["msg"]=$message;

    //연관배열 --> json문자열
    echo json_encode($arr);
?>