<?php
    header("Content-Type:text/html; charset=uft-8");

    //MYSQL 접속
    $db=mysqli_connect("localhost","testhue96","t1e2s3t4!","testhue96");

    //한글깨짐방지
    mysqli_query($db, "set names utf8");

    //board라는 테이블의 데이터들을 읽어오기(SELECT 쿼리문)
    $sql="SELECT * FROM board"; //WHERE문을 안쓰면 모든 row의 데이터 WHERE no=0
    $result=mysqli_query($db, $sql); //쿼리문에 따른 검색결과표 리턴, 원본을 가져오는것이 아니라 요청한 값만 결과표(ResultSet)로 리턴
    //$result : 검색된 결과표를 가진 객체(쿼리문에 따라 결과가 바뀜) or false
    if($result) {//C언어에서는 객체든 숫자든 0이 아니면 모두 true
        //총 record(한 줄 row) 수
        $rowNum=mysqli_num_rows($result);
        for($i=0; $i<$rowNum; $i++) {
            $row=mysqli_fetch_array($result, MYSQLI_ASSOC); //한 줄을 배열로 받기, 연관배열로 받기 설정(MYSQLI_NUM : 인덱스, MYSQLI_BOTH : 둘 다)
            $no=$row["no"]; //배열의 칸번호 대신 식별자 사용[연관배열]
            $name=$row["name"]; 
            $message=$row["msg"]; 
            $file=$row["file"]; 
            $date=$row["date"];

            echo "<h2> $no $name</h2>"."<p>$message</p>"."<p>$date</p>";
            if($file!=null) echo "<img src='$file' width='50%'><br>";
            echo "=====================================================<br><br>";
        }
    } else echo "loading data failed";

    //DB연결종료
    mysqli_close($db);
?>