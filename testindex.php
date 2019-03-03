<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>oqituvchi</title>

</head>
<style>
    .ok{
        background: #5d8f76;
        color: #fff;
        }
    legend{
        border: solid 1.5px black;
        background: #fff;
        color: black;
        border-radius: 4px;
    }
    a{
        text-decoration: none;
        color: white;
    }
    .next{

        background: #5d8f76;
        color: #fff;
        padding: 7px 12px;
        margin-bottom: 1px;
        border-radius: 4px;
    }
    .next:hover{
        background: #1e6550;
    }
    .full{
        /*margin-l;*/
        /*margin-right: 900px;*/
        background-color: white;
    }
    input,textarea {
        margin-bottom: 20px;
        border-radius: 5px;
        margin-right: 35px;
        box-shadow: inset 0 1px 5px black;
        padding: 4px;
    }
    select{
        width: 80px;
        border-radius: 5px;
        box-shadow: inset 0 1px 5px black;
    }

</style>

<body >
<div style="background-color: #cecece" align="center" >
    <div style="width: 600px">
        <fieldset class="full" style="padding: 15px;" align="left">
            <legend> Kiritiluvchi savollar soni </legend>
                <form action="" method="post">
                    <input type="number" name="son">
                        <button class="ok"  type="submit"> ok </button>

            </form>

            <form action="testupload.php" method="get" enctype="multipart/form-data">

                <?php
                $cnt = $_POST['son'];
                for($i=1;$i<=$cnt;$i++){
                    echo '<div>
                    <div>
                        <label>Savol #'.$i.'</label>
                 
                    </div>
                        <textarea placeholder="savolni kiriting" style="width: 500px; height: 100px" type="text" name="Savol[]"></textarea>
                        <br>
                        <input placeholder="a)" style="width: 80px" type="text" name="a[]">
                        <input placeholder="b)" style="width: 80px;" type="text" name="b[]">
                        <input placeholder="c)" style="width: 80px" type="text" name="c[]">
                    <select style="padding: 4px" name="togri_javob[]">
                        <option value="a" >a</option>
                        <option value="b" >b</option>
                        <option value="c" >c</option>
                    </select>
                    </div>';

                    echo '<br>';
                }
                ?>
                <button  class="next" type="submit">Yuborish</button>
            </form>
        </fieldset>

    </div>

</div>
</body>
</html>
