<?php
/**
 * Created by PhpStorm.
 * User: PIFAGOR
 * Date: 19.02.2019
 * Time: 19:42
 */

$ishchilar=array(
    0=>["nomi"=>"rashid","manzili"=>"bogot","mutaxassisligi"=>"pol paner"],
    1=>["nomi"=>"sarvar","manzili"=>"shovot","mutaxassisligi"=>"malyarchik"],
    2=>["nomi"=>"islom","manzili"=>"shovot","mutaxassisligi"=>"suvogchi"]
);
echo"<table border=1 style ='border-collapse:collapse'>";
foreach ($ishchilar as $ishchi){
    echo "<tr> ";
    echo '<th>'.$ishchi[nomi].'</th>';
    echo '<td>'.$ishchi[manzili].'</td>';
    echo '<td>'.$ishchi[mutaxassisligi].'</td>';
    echo "</tr> ";


}



$students=array(
    ['nomi'=>'muxtor','manzili'=>'hazarasp','yoshi'=>'21','kursi'=>'2'],
    ['nomi'=>'furqat','manzili'=>'hazarasp','yoshi'=>'23','kursi'=>'4'],
    ['nomi'=>'rarxod','manzili'=>'yangiariq','yoshi'=>'22','kursi'=>'2'],
    ['nomi'=>'jamshid','manzili'=>'qoshkopir','yoshi'=>'20','kursi'=>'1'],

);

foreach ($students as $stu)
{
    echo '<p>'.implode(' ', $stu).'</p>';
}


