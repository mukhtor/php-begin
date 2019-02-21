<?php

if(isset($_FILES['picture'])) {
    $picture = $_FILES['picture'];
    $upload_dir = 'upload';
    $fileName = uniqid() . '_' . $picture['name'];
    if ($picture['type'] == 'image/jpeg' && $picture['size']<=51200 ) {
        move_uploaded_file($picture['tmp_name'], $upload_dir . DIRECTORY_SEPARATOR . $fileName);
        echo 'rasm qabul qilindi!!!';
    } else {
        echo 'fayl jpg farmat bolishi zarur yoki hajmi togri kelmaydi';
    }}
else
{
    echo 'fayl kelmadi';
}






