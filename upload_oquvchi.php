<html>

<head>

</head>
<style>
    .ddd{
        background-color: #cecece;
    }
    tr{
        text-align: left;
      }
    .a{
        padding: 5px 5px 5px 5px;
        margin: 0 20px 0 20px;
        display: inline-block;
        /*background-color: #1e6550;*/
    }
    .b{
        padding: 5px 5px 5px 5px;
        margin: 0 20px 0 20px;
        display: inline-block;
        /*background-color: #1e6550;*/
    }
    .c{
        padding: 5px 5px 5px 5px;
        margin: 0 20px 0 20px;
        display: inline-block;
        /*background-color: #1e6550;*/
      }
    .javob{
        /*background-color: #1e6550;*/
        margin: 0 20px 0 20px;
        display: inline-block;
        padding: 5px 5px 5px 5px;
        float: right;
    }
    .savol{
        box-shadow: inset 0 1px 5px black;
    }
    .full{
        margin-left: 350px;
    }
    .butt{
        background: #5d8f76;
        color: #fff;
        padding: 7px 12px;
        margin-bottom: 1px;
        border-radius: 4px;
    }
    .butt:hover{
        background: #1e6550;
        box-shadow: inset 0 1px 5px black;
    }
    .table:hover{
        box-shadow: inset 0 1px 5px black;
    }
    .tr{
        box-shadow: inset 0 1px 5px black;

    }
</style>
<body>

<form action="test_natija.php" method="get" enctype="multipart/form-data">
<div class="ddd">
    <?php

    $file = 'text_file/test.txt';

    $fileread = file_get_contents($file);

    $bolingan_satr = explode("\n" , $fileread);

    $cnt=-1;

    foreach ($bolingan_satr as $soni){
//        echo $soni;

        if($soni != NULL){

            $cnt++;

        }

    }
//    var_dump($bolingan_satr);
//    echo $cnt;

    echo '<div class="full"><table class="table" border="5" style=" border-radius: 15px; background-color: white;margin: 0px; width:700px;font-size: larger">';

    for ($i = 0; $i <= $cnt; $i++){

        echo '<tr class="tr"><td class="savol" style=" text-align: center">';

        foreach ($bolingan_satr as $key => $value) {

            if ($i == $key) {

                $malumot = explode(';', $bolingan_satr[$key]);

                    foreach ($malumot as $key2 => $value2) {

                        if ($key2 == 0) {

                            echo 'Savol№-' . $i;
                               echo '<br>';
                                   echo'<b>'. $malumot[$key2].'</b>';

                    }

                }

            }

        }

        echo '</td></tr>				
		<tr><td><div  class="a">';


        foreach ($bolingan_satr as $key => $value) {

            if ($i == $key) {

                $malumot = explode(';', $bolingan_satr[$key]);

                     foreach ($malumot as $key2 => $value2) {

                        if ($key2 == 1) {

                            echo 'a)' . $malumot[$key2];

                    }

                }

            }

        }

        echo '</div>
      <div class="b">';
        foreach ($bolingan_satr as $key => $value) {

            if ($i == $key) {

                $malumot = explode(';', $bolingan_satr[$key]);

                foreach ($malumot as $key2 => $value2) {

                    if ($key2 == 2) {

                        echo 'b)' . $malumot[$key2];


                    }
                }
            }
        }
            echo '</div><div class="c">';

            foreach ($bolingan_satr as $key => $value) {

                if ($i == $key) {

                    $malumot = explode(';', $bolingan_satr[$key]);

                    foreach ($malumot as $key2 => $value2) {

                        if ($key2 == 3) {

                            echo 'c)' . $malumot[$key2];

                        }

                    }

                }

            }
            echo '</div><div class="javob">';

            foreach ($bolingan_satr as $key2 => $value2) {
                if ($i == $key2) {
                    echo 'Javob: <select name="togri_javoblar[]">
	        					<option value="a">a</option>
			        			<option value="b">b</option>
					        	<option value="c">c</option>
					        </select>';
                }
            }
            echo '</td></tr></div><br>';
        }
    echo'</table><div><br><button class="butt">Tekshirish</button><br></div></div>'


    ?>


</div>
</form >

</body>
</html>