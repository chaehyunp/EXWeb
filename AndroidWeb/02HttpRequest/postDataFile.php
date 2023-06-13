<?php
    header("Content-Type:text/html; charset=utf-8");

    //사용자로부터 전달된 데이터와 파일정보 받기
    $name=$_POST["name"];
    $message=$POST["mag"];
    
    $file=$_FILES["img"];
    //파일의 세부정보 5개중에서 사용할 것들
    $srcName=$file["name"];
    $tmpName=$file["tmp_name"];

    //업로드된 파일이 영구적으로 저장될 위치
    $dstName="./upload/".date("YmdHis").$srcName;
    $moveResult=move_uploaded_file($tmpName,$dstName);
    if($moveResult) echo "upload success";
    else echo "upload failed";

    echo "<br>";

    //저장되는 날짜와 시간
    $now=date("Y-m-d H:i:s");

    //전송된 데이터들($tilte, $message, $dstName)을 DB에 저장
    //dothome서버에는 이미 DBMS(MYSQL)이 설치되어있음

    //MySQL이라는 DBMS를 이용하여 데이터들 저장하기 (connet - query - close)
    //1. MySQL DB에 접속하기
    $db=mysqli_connect("localhost", "testhue96", "t1e2s3t4!", "testhue96"); //DB서버주소, DB접속ID, DB접속비밀번호, DB명
    //본인컴퓨터를 부르기 : 127.0.0.1, localhost (원래 PHP와 DB는 다른 컴퓨터라서 DB컴퓨터의 IP주소를 입력해야함)
    //$db : 연결된 DB를 제어하는 객체

    //2. MySQL DB는 한글 깨짐 [한글도 저장하도록 Query 요청]
        mysqli_query($db, "set names utf8");

    //3. 원하는 쿼리 작업 수행
    //DB에 저장하고자 하는 데이터들($name. $message, $dstName, $now)을 'board'라는 이름의 테이블(표)에 삽입하는 명령(SQL)
    $sql="INSERT INTO board(name,msg,file,date) VALUES('$name','$msg','$dstName','$now')";
    $result=mysqli_query($db, $sql);
    if($result) echo "insert success";
    else echo "insert failed";

    //4. DB 연결 종료
    mysqli_close($db);
?>