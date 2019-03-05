<?php

include "db_connection.php";

$id = $_GET['id'];

if(empty($id)) {

    echo 'ID YOQ'; exit();

}



if(!$_POST) {

    $query = $connection->query('SELECT * FROM contacts WHERE id = '. $id);

    $contact = $query->fetch();

}

else

{

    $first_name = $_POST['first_name'];

    $last_name = $_POST['last_name'];

    $phone = $_POST['phone'];

    $address = $_POST['address'];

    $email = $_POST['email'];



    $query = $connection->prepare(

        'UPDATE contacts SET first_name = ?, last_name = ?, phone = ?, address = ?, email =? WHERE id = '. $id

    );

    $result = $query->execute([$first_name, $last_name, $phone, $address, $email]);



    if ($result) {

        header('Location: index.php');

    }

    else

    {

        $error_message = 'XATOLIK Bo`ldi!';

    }

}



?>

<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Create contact</title>
    <style>
        .first{
            box-shadow: inset 0 1px 5px black;
            margin-left: 50px;
            margin-bottom: 10px;
            padding: 5px;
        }
        .last{
            padding: 5px;
            box-shadow: inset 0 1px 5px black;
            margin-left: 52px;
            margin-bottom: 10px;
        }
        .phone{
            padding: 5px;
            box-shadow: inset 0 1px 5px black;
            margin-left: 78px;
            margin-bottom: 10px;
        }
        .address{
            padding: 5px;
            box-shadow: inset 0 1px 5px black;
            margin-left: 65px;
            margin-bottom: 10px;
        }
        .email{
            padding: 5px;
            box-shadow: inset 0 1px 5px black;
            margin-left: 84px;
            margin-bottom: 10px;
        }
        .jumbotron{
            box-shadow: inset 0 1px 5px black;
            margin-bottom: 10px;
            background-color: #0f0054;
        }
        .btn-warning{
            border-radius: 5px;
            font-size: 20px;
        }
    </style>
</head>

<body>


<?php if (isset($error_message)): ?>

    <?= $error_message ?>

    <div class="alert alert-success">
        <strong>Error</strong> malumot yoq;
    </div>
    <!-- @TODO ALERT ERROR-->

<?php endif; ?>

<form method="POST">

        <div class="jumbotron text-center">
            <h1 style="color: white">Update qismi</h1>
            <p style="color: white">malumotni ozgartirish</p>
            <?php include "menu.php"; ?>

        </div>

    <label>

        First name:

        <input class="first" required type="text" name="first_name" value="<?=$contact['first_name']?>">

    </label> <br>

    <label>

        Last name:

        <input class="last" required type="text" name="last_name" value="<?=$contact['last_name']?>">

    </label> <br>

    <label>

        Phone:

        <input class="phone" required type="text" name="phone" value="<?=$contact['phone']?>">

    </label> <br>

    <label>

        Address:

        <input class="address" type="text" name="address" value="<?=$contact['address']?>">

    </label> <br>

    <label>

        Email:

        <input class="email" type="email" name="email" value="<?=$contact['email']?>">

    </label> <br>

    <button class="btn-warning" type="submit">Update</button>

</form>

</table>

</body>

</html>