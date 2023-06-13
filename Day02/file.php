<?php
    header('Content-Type:text/html; charset=utf-8');

    //사용자로부터 전달받은 파일의 실제데이터는 임시저장소에 배치되고
    //이 php에는 파일 정보만 전달되어옴 [5개의 정보]
    //파일 정보 배열
    $file = $_FILES['aaa']
    
    //정해져있는 식별자 이용
    $srcName = $file['name']; //원본파일명
    $type = $file['type']; //파일타입
    $size = $file['size']; //파일크기
    $tmpName = $file['tmp_name']; //임시저장소위치
    $error = $file['error']; //에러정보


    //5개의 정보 잘 받았는지 응답
    echo $srcName . "<br>";
    echo $type . "<br>";
    echo $size . "<br>";
    echo $tmpName . "<br>";
    echo $error . "<br>";

    //임시저장소에 있는 파일을 영구히 저장하기위해 이동
    $dstName = "image/".date('YmdHis').$srcName;
    move_uploaded_file($tmpName, $dstName);
?>