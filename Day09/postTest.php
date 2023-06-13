<?php

    header('Content-Type:text/html; charset=utf-8');

    $title = $_POST['title'];
    $message = $_POST['msg'];

    echo "<h2>$title  $message</h2>";
?>