<?php
    header('Content-Type:text/html; charset=utf-8');

    $name = $_GET['name'];
    $email = $_GET['email'];

    // echo "$name  $email이 등록되었습니다!";

    //form요소를 통한 서버와의 통신은 현재 페이지가 바뀌는 것 - 기존페이지 사라짐
    //기존 페이지가 있는것처럼 느끼게 하기위하여 다음과 같이 작성

    //기존 페이지 html을 echo 하면서 등록한 값을 함께 작성

    echo("
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset='utf-8'>
            <title>No AJAX</title>
        </head>
        <body>
    
            <h3>회원가입 페이지</h3>
    
            <form action='./04_noAjax.php' method='get'>
                <input type='text' name='name' value='$name'>
                <input type='text' name='email' value='$email'>
    
                <input type='submit'>
            </form>
    
            <hr>
            <!-- 서버로부터 응답된 결과를 보여주기 위해 요소 -->
            <textarea cols='50' row='3'>$name  $email 이 등록되었습니다!</textarea>
            
        </body>
    </html>
    ")

?>