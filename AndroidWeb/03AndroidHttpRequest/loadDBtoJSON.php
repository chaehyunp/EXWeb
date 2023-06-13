<?php
    header("Conten-Type:application/json; charset=utf-8");

    //DB 값 읽어오기
    $db=mysqli_connect("localhost","testhue96","t1e2s3t4!","testhue96");
    mysqli_query($db, "set names utf8");

    $sql="SELECT * FROM board2";
    $result=mysqli_query($db, $sql);

    //총 레코드 수
    $rowNum=mysqli_num_rows($result);

    $rows = array(); //빈 배열
    for($i=0; $i<$rowNum; $i++) {
        $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
        $rows[$i]=$row;
    }
    //연관배열 --> json문자열형식으로 변환하는 기능
    //숫자도 문자열로 인식함
    echo json_encode($rows);
?>