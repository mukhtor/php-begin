<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        th{
            padding: 8px;
            text-align: center
        }
        td{
            padding: 8px;
            text-align: center
        }
        .jumbotron{
            background-color: #0f0054;
        }
        .update_link{
            display: inline-block;
            background-color: #c6dae4;
            border-radius: 10px;
            border: 1px solid #97a274;
            text-decoration: none;
        }
        .update_link:hover{
            background-color: #1c5843;
            color: white;
        }
        .delete_link{
            display: inline-block;
            background-color: #c6dae4;
            border-radius: 10px;
            border: 1px solid #97a274;
            text-decoration: none;
        }
        .delete_link:hover{
            background-color: #1c5843;
            color: white;
        }
    </style>
</head>
<body>

</body>
</html>

<?php

include "db_connection.php";

$query = $connection->query('SELECT * FROM contacts');

$list = $query->fetchAll();

?>

<html>

<head>

    <title>List of contacts</title>

</head>

<body>


<div class="jumbotron text-center">
    <h1 style="color: white">Contact tizimi</h1>
    <p style="color: white">tizimning korinishi</p>
    <?php include "menu.php"; ?>
</div>


<table class="table" border="1" style="font-size: 20px">

    <thead>
        <tr class="success">
            <th>ID</th>

            <th>First name</th>

            <th>Last name</th>

            <th>Phone</th>

            <th>Address</th>

            <th>Email</th>

            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

    <?php foreach ($list as $contact): ?>

        <tr class="info">

            <td><?= $contact['id'] ?></td>

            <td><?= $contact['first_name'] ?></td>

            <td><?= $contact['last_name'] ?></td>

            <td><?= $contact['phone'] ?></td>

            <td><?= $contact['address'] ?></td>

            <td><?= $contact['email'] ?></td>

            <td>

                <a class="update_link" href="update.php?id=<?=$contact['id']?>">Update</a> |

                <a class="delete_link" href="delete.php?id=<?=$contact['id']?>">Delete</a>

            </td>

        </tr>

    <?php endforeach; ?>

    </tbody>

</table>

</body>

</html>