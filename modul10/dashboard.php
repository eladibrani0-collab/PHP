<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table,td,th{
            border: 1px solid pink;
            border-collapse:collapse;
        }
        td,th{
            padding: 10px 20px;
        }


    </style>


</head>
<body>

<?php

include_once('connection.php');
$sql="select * from users";
$getusers=$conn->prepare($sql);
$getusers->execute();
$users=$getusers->fetchAll();

?>

<h2>users</h2>

<table>
    <tr>
        <th>ID</th>
        <th>username</th>
        <th>pass</th>

    </tr>

    <?php
    foreach($users as $user){
        echo "<tr>";
        echo "<td>" . $user['id'] . "</td>";
        echo "<td>" . $user['username'] . "</td>";
        echo "<td>" . $user['password'] . "</td>";
        echo "</tr>";
    }

    ?>

</table>

<br>
<a href="index.php"> add users</a>




</body>
</html>