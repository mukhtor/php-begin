<?php
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css">


</head>
<body>
<?php
$faqatTogriJavoblar[]=[];
$javoblar = $_POST['togri_javoblar'];
$file = 'text_file/test.txt';
$uqilganFayl = file_get_contents($file);
$bolingan = explode("\n", $uqilganFayl);
$cnt = -1;
foreach ($bolingan as $satrSoni){
    if($satrSoni != NULL){
        $cnt++;
    }
}
$javobsoni = 0;
$tjsoni = 0;
for ($id = 1; $id <= $cnt+1; $id++){
    foreach($bolingan as $key => $value) {
        if ($id == $key) {
            $birQator = explode(';', $bolingan[$key]);
            foreach ($birQator as $key2 => $value2) {
                if ($key2 == 4) {
                    $faqatTogriJavoblar[] .= $birQator[$key2];
                }
            }
        }
    }
}
var_dump($faqatTogriJavoblar);
    foreach ($faqatTogriJavoblar as $key => $value) {
        $javobsoni++;
            if($faqatTogriJavoblar[$key] == $javoblar[$key]){
                $tjsoni++;
            }
    }
        echo'<div class="container">
					<div class="well" style="text-align: center; width:1150px;">
    					<marquee direction="left">Siz ' . $javobsoni . ' ta savoldan ' . $tjsoni . ' tasiga to\'g\'ri javob berdingiz!</marquee> <a href="#" class="alert-link"></a></div></div>';
        ?>
</body>
</html>