
/<?php
//var_dump($_FILES);

//if(isset($_FILES['mp3'],$_FILES['mp4'])) {
//    $mp3 = $_FILES['mp3'];
//    $mp4 = $_FILES['mp4'];
//    $mp3_dir = 'mp3';
//    $mp4_dir = 'mp4';
//    $mp3fileName = uniqid() . '_' . $mp3['name'];
//    $mp4fileName = uniqid(). '_' . $mp4['name'];
//    if ($mp3['type'] == 'audio/mp3') {
//        move_uploaded_file($mp3['tmp_name'], $mp3_dir . DIRECTORY_SEPARATOR . $mp3fileName);
//        echo 'mp3 fayl qabul qilindi!!!';
//    } else {
//        echo 'fayl mp3 farmat bolishi zarur';
//    }
//if ( $mp4['type']=='video/mp4'){
//    move_uploaded_file($mp4['tmp_name'], $mp4_dir . DIRECTORY_SEPARATOR . $mp4fileName);
//    echo 'mp4 fayl qabul qilindi!!!';
//    }
//    else{
//    echo 'fayl mp4 farmat bolishi kerak';
//    }
//}
//else
//{
//    echo 'fayl kelmadi';
//}

if(isset($_FILES['mp3'])){
    $mp3 = $_FILES['mp3'];
    $mp3_dir = 'mp3';
    $mp3fileName = uniqid() . '_' . $mp3['name'];
    if ($mp3['type'] == 'audio/mp3') {
        move_uploaded_file($mp3['tmp_name'], $mp3_dir . DIRECTORY_SEPARATOR . $mp3fileName);
        echo 'mp3 fayl qabul qilindi!!!';
    }


 elseif($_FILES['mp4']){
    $mp4 = $_FILES['mp4'];
    $mp4_dir = 'mp4';
    $mp4fileName = uniqid(). '_' . $mp4['name'];
    if ( $mp4['type']=='video/mp4') {
        move_uploaded_file($mp4['tmp_name'], $mp4_dir . DIRECTORY_SEPARATOR . $mp4fileName);
        echo 'mp4 fayl qabul qilindi!!!';
    }
    else{
            echo 'fayl mp4 yoki mp3 farmat bolishi kerak';
        }

}}
else
{
    echo 'fayl kelmadi';
}


