<?php
    header("Content-Type:text/plain; charset=utf-8");

    //@PartMap으로 전달된 POST방식의 데이터들
    //POST방식은 그냥 넣어주면 됨
    $name= $_POST['name'];
    $title= $_POST['title'];
    $message= $_POST['msg'];
    $price= $_POST['price'];

    //@Part로 전달된 이미지 파일
    //원본데이터들은 임시저장소, 여기서 받는것은 송장(header)
    $file= $_FILES['img'];
    $srcName= $file['name']; //원본파일명
    $tmpName= $file['tmp_name']; //임시저장소 경로/파일명

    //이미지파일을 영구적으로 저장하기위해 임시저장소에서 이동
    $dstName= "./image/" . date('YmdHis') . $srcName; //뒤에 srcName을 쓰면 이미지의 이름과 확장자명까지 따라붙음
    move_uploaded_file($tmpName, $dstName);
    
    //메시지중에 특수문자(줄바꿈문자 포함) 사용가능성 있음 --> query문의 해석이 이상하게 될 가능성이 있음
    //특수문자는 SQL에서 잘못 동작될 수 있기때문에 escape문자(\) 추가해주어야함
    $message=addslashes($message); //괄호 안에 있는 문자들에 슬래시가 필요한 곳에 알아서 넣어줌
    $title= addslashes($title);

    //데이터가 저장되는 시간
    $now=date("Y-m-d H:i:s");

    //MySQL DB에 데이터 저장 [테이블명 : market]
    $db=mysqli_connect("localhost","testhue96","t1e2s3t4!","testhue96");
    mysqli_query($db, "set names utf8");

    //저장할 데이터($name,$title,$message,$price,$dstName,$now) 삽입 쿼리문
    $sql="INSERT INTO market(name,title,msg,price,image,date) VALUES('$name','$title','$message','$price','$dstName','$now')";
    $result= mysqli_query($db, $sql);

    if($result) echo "게시글 업로드되었습니다.";
    else echo "게시글 업로드실패. 다시 시도해주세요";

    mysqli_close($db);
?>