<?php
/**
 * Created by PhpStorm.
 * User: PIFAGOR
 * Date: 24.02.2019
 * Time: 17:15
 */
$Firstname=$_GET['Familiyasi'];
$Name=$_GET['Ismi'];
if($Name && $Firstname){
    $filename='text_file/FIO.txt';
    $file=fopen($filename,"w");
    foreach ($Firstname as $key=>$value)
    {
        echo $Firstname[$key];
        echo $Name[$key];

        fwrite($file,$Firstname[$key]);
        echo "<br />";
        fwrite($file,$Name[$key]);
    }
    echo "<br>";

}
