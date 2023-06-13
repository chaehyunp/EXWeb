<?php
    header("Content-Type:application/json; charset=utf-8");

    //Delete 할 아이템의 no 정보
    $no=$_GET["no"];

    $db=mysqli_connect("localhost","testhue96","t1e2s3t4!","testhue96");
    mysqli_query($db, "set names utf8");

    // DB 실제 경로 폴더 내 이미지 삭제 준비
    $sql="SELECT image FROM market WHERE no=$no";
    $result= mysqli_query($db, $sql);

    $image="";
    if($result){
        $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
        $image= $row['image'];
    }

    //DB 테이블에서 삭제
    $sql="DELETE FROM market WHERE no=$no";
    $result= mysqli_query($db, $sql);

    if($result) {
        echo "아이템 삭제";
        // 테이블은 삭제되지만, DB에는 남아있음
        // 원래는 안지우지만 지우고 싶다면... --> SELECT 쿼리문 필요

        // 혹시 테이블이 안지워질 수도 있으니까 테이블 삭제후 언링크
        // 괄호에는 위에 SELECT로 받아온 경로값
        // 그런데 이렇게 하면 이미지가 모두 있다는 전제 하, 이미지가 없는 게시글일 경우 에러남
        unlink($image);
    }    
    else echo "아이템 삭제 실패";

    mysqli_close($db);
?>