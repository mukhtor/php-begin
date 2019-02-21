<?php

var_dump($_FILES);

if(isset($_FILES['picture'])) {
    $picture = $_FILES['picture'];
    $upload_dir = 'upload';
    $fileName = uniqid() . '_' . $picture['name'];
    if ($picture['type'] == 'application/msword' || $picture['type']=='application/pdf' || $picture['type']=='application/vnd.openxmlformats-officedocument.wordprocessingml.document'
    || $picture['type']=='application/vnd.ms-excel' || $picture['type']=='text/plain'
    ) {
        move_uploaded_file($picture['tmp_name'], $upload_dir . DIRECTORY_SEPARATOR . $fileName);
        echo 'rasm qabul qilindi!!!';
    } else {
        echo 'fayl jpg farmat bolishi zarur';
    }}
    else
    {
        echo 'fayl kelmadi';
    }




