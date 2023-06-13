<?php
    header("Content-Type:text/plain; charset=utf-8");

    //Andorid로부터 POST방식으로 전달된 데이터 받기
    $name=$_POST["name"];
    $message=$_POST["msg"];

    //잘 받았는지 Android로 응답(echo, Response)
    echo "$name : $message";

    //게시글이 저장될 시간
    $now=date("Y-m-d H:i:s");

    //MYSQL DB의 board2 테이블에 데이터들 저장
    //1. DB서버에 젒속
    $db=mysqli_connect("localhost","testhue96","t1e2s3t4!","testhue96");

    //2. 한글깨짐방지
    mysqli_query($db, "set names utf8");

    //3. 원하는 CRUD 작업의 쿼리문
    //$name, $message, $now 값을 삽입하는 쿼리문
    $sql="INSERT INTO board2(name, msg, date) VALUES('$name','$message','$now')";
    $result=mysqli_query($db, $sql);
    if($result) echo "insert success";
    else echo "insert failed";

    //4.DB 닫기
    mysqli_close($db);

?>