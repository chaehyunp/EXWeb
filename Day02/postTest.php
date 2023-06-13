<?php
    header('Content-Type:text/html; charset=utf-8');

    //POST 방식으로 전달된 값들 받기
    $name = $_POST['name'];
    $password = $_POST['pw'];
    $gender = $_POST['rg'];
    $message = $_POST['msg'];
    $brand = $_POST['brand'];
    $id = $_POST['id'];

    //실무에서는 이 데이터들을 DB에 저장하는 작업

    //메시지의 경우 여러 줄일 수 있음. 이때, 줄바꿈 문자(\n)을 브라우저에서는 <br>태그로 변경하여 보여주어야함.
    $message = nl2br($message);

    //잘 받았는지 확인하는 목적으로 데이터들 출력(응답: Response)
    echo "<h2>$name</h2>";
    echo "<p>$gender</p>";
    echo "<p>$message</p>";
    echo "<p>$brand</p>";
    echo "<p>$id</p>";

    //멀티 초이스에 의해 선택된 값들은 배열로 전달받기에 반복문으로 값을 echo
    $fruits = $_POST['fruits'];
    $num = count($fruits);
    for($i=0; $i<num; $i++) {
        echo "$fruits[$i], ";
    }
?>