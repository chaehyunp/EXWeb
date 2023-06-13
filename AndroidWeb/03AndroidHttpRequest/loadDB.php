<?php
    header("Content-Type:csv/plain; charset=utf-8");

    //DB 값 읽어오기
    $db=mysqli_connect("localhost","testhue96","t1e2s3t4!","testhue96");
    mysqli_query($db, "set names utf8");

    $sql="SELECT * FROM board2";
    $result=mysqli_query($db, $sql);

    //총 레코드 수
    $rowNum=mysqli_num_rows($result);

    //그 row의 갯수만큼 한 줄씩 데이터를 배열로 읽어와서 echo
    for($i=0; $i<$rowNum; $i++) {
        $row=mysqli_fetch_array($result, MYSQLI_ASSOC); //연관배열로 한 줄 읽어오기

        $no=$row["no"];
        $name=$row["name"];
        $msg=$row["msg"];
        $date=$row["date"];

        //콤마로 값들을 구분하는 구분자를 붙이기 [csv파일형식]
        echo $no.",".$name.",".$msg.",".$date."&";
    }

    mysqli_close($db);
?>