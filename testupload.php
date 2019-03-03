<?php
/**
 * Created by PhpStorm.
 * User: PIFAGOR
 * Date: 23.02.2019
 * Time: 20:42
 */
//
//$file='upload/muxtor.jpg';
//var_dump(file_exists($file ));
//if (file_exists($file)){
//    echo '<img width="300px" src="'.$file.'">';
////}
///
///
//$files=scandir('upload');
//var_dump($files);exit;
//foreach ($files as $file){
//    if ($file[0]!='.'){
//        echo $file;
//        echo '<br>'
//    }
//}

//$papname='text_file';
//if(!file_exists('text_file')){
//    mkdir($papname);
//}

$question= $_GET['Savol'];
$answer=$_GET['togri_javob'];
$variant_a=$_GET['a'];
$variant_b=$_GET['b'];
$variant_c=$_GET['c'];
if($question&& $answer && $variant_a && $variant_b && $variant_c){
    $faylnomi='text_file/test.txt';
    $fayl=fopen($faylnomi,'w');
    $boolean=false;
    foreach ($question as $key=>$value){
        if($question[$key] && $answer[$key] && $variant_a[$key] && $variant_c[$key] && $variant_b[$key] ) {

            fwrite($fayl, $question[$key] . ";");
            fwrite($fayl, $variant_a[$key] . ";");
            fwrite($fayl, $variant_b[$key] . ";");
            fwrite($fayl, $variant_c[$key] . ";");
            fwrite($fayl, $answer[$key] . "\n");
            $boolean=true;
        }
    }

    if($boolean==true)
    echo 'xabar yuborildi';

}
else{
    echo 'fayl kelmadi';
}