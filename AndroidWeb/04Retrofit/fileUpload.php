<?php
    header("Content-Type:text/plain; charset=utf-8");

    //파일의 실제 데이터는 임시저장소에 보관되고 PHP에는 파일정보(송장)만 전달됨
    $file=$_FILES["img"];
    //$file은 파일정보를 가진 배열
    
    $srcName=$file["name"]; //원본파일명
    $size=$file["size"]; //파일크기
    $tmpName=$file["tmp_name"]; //임시저장소 파일명

    //전달이 잘 되었는지 확인
    echo "$srcName \n";
    echo "$size \n";
    echo "$tmpName \n";

    //임시저장소에 있는 이미지를 영구저장소 위치로 이동
    $dstName="./".date("YmdHis").$srcName;
    $result=move_uploaded_file($tmpName, $dstName);

    if($result) echo "upload success";
    else echo "upload failed";
?>