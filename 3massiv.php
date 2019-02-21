<?php
/**
 * Created by PhpStorm.
 * User: PIFAGOR
 * Date: 19.02.2019
 * Time: 20:27
 */function print_array($array){
    foreach ($array as $one){
        echo $one;
        echo " ";
    }
}
echo "<br>";
$array1=array(7,6,2,5,8,1,2);
$array2=array(9,2,3,5,3);
$array3=array(2,4,6,8,0,9,7,5,3,1);
$array=array();
$array=array_merge($array1,$array2,$array3);
//print_array($array1);
//echo "<br>";
//print_array($array2);
//echo "<br>";
//print_array($array3);
//echo "<br>";

print_array($array);
echo "<br>";

sort($array);
print_array($array);