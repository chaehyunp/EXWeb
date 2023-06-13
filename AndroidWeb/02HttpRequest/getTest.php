<?php
    //기본적으로 php문서가 응답하는 데이터의 형식 지정, 한글 깨짐을 방지하는 설정 필요
    header("Content-Type:text/html; charset=utf-8");
    //php에서는 $가 변수를 지칭하는 문자
    //사용자가 GET방식으로 보낸 값들을 $_GET[]이라는 슈퍼전역변수에 저장
    $title=$_GET["title"];
    $message=$_GET["msg"];

    //잘 받았는지 확인해보기위해 응답 :echo
    echo "제목 : ".$title."<br>"; //php에서 .은 문자열 결합연산자, 변수쓸때는 꼭 $ 필요
    echo "메시지 : ".$message;
?>