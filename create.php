
<?php

include "db_connection.php";



//Agar post kelsa

if ($_POST) {

    $first_name = $_POST['first_name'];

    $last_name = $_POST['last_name'];

    $phone = $_POST['phone'];

    $address = $_POST['address'];

    $email = $_POST['email'];



    $query = $connection->prepare('INSERT INTO contacts (first_name, last_name, phone, address, email) VALUES (?, ?, ?, ?, ?)');

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

    <title>Create contact</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .first{
            margin-left: 45px;
            box-shadow: inset 0 1px 5px black;
            margin-bottom: 10px;
        }
        .last{
            margin-left: 47px;
            margin-bottom: 10px;
            box-shadow: inset 0 1px 5px black;
        }
        .phone{
            margin-left: 85px;
            margin-bottom: 10px;
            box-shadow: inset 0 1px 5px black;
        }
        .address{
            margin-bottom: 10px;
            margin-left: 66px;
            box-shadow: inset 0 1px 5px black;
        }
        .email{
            margin-bottom: 10px;
            margin-left: 93px;
            box-shadow: inset 0 1px 5px black;
        }
        label{
            font-size: 20px;
        }
        .jumbotron{
            background-color: #0f0054;
        }
    </style>
</head>

<body>
<div class="jumbotron text-center">
    <h1 style="color: white">Insert qismi</h1>
    <p style="color: white">malumot kiritish</p>
    <?php include "menu.php"; ?>

</div>




<?php if (isset($error_message)): ?>

    <?= $error_message ?>

    echo '<div class="alert alert-success">
        <strong>Error</strong> malumot yoq
    </div>'
    <!-- @TODO ALERT ERROR-->

<?php endif; ?>

<form method="POST">

    <label>

        First name:

        <input class="first" required type="text" name="first_name">

    </label> <br>

    <label>

        Last name:

        <input class="last" required type="text" name="last_name">

    </label> <br>

    <label>

        Phone:

        <input class="phone" required type="text" name="phone">

    </label> <br>

    <label>

        Address:

        <input class="address" type="text" name="address">

    </label> <br>

    <label>

        Email:

        <input class="email" type="email" name="email">

    </label> <br>

    <button class="btn btn-warning" type="submit">Create</button>

</form>

</table>

</body>

</html>