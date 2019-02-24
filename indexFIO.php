<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>talabalar</title>

</head>
<style>
    .full{
        margin-right: 900px;

    }
    input {
        margin-bottom: 20px;
        border-radius: 20px;
    }
</style>

<body>
<fieldset class="full">
    <legend> fayl yuklovchilar sonini kiriting </legend>
    <form action="" method="post">
        <input type="text" name="son">
        <button  type="submit"> ok </button>

    </form>

    <form action="upload_FIO.php" method="get" enctype="multipart/form-data">

        <?php
        $cnt = $_POST['son'];
        for($i=0;$i<$cnt;$i++){
            echo '<label>
             Familiyasi   <input  type="text" name="Familiyasi[]"><br>    
             Ismi         <input type="text" name="Ismi[]"><br>
              </label>';
            echo '<br>';
        }

        ?>
        <button type="submit">ok</button>
    </form>
</fieldset>
</body>
</html>
