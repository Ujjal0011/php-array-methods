<?php

$names = array("Myriam", "Cory", "Bette", "Marcella", "Tierra");

if (isset($_POST["username"])) {
    $userName = $_POST["username"];
    if (in_array($userName, $names)) {
        echo "The name is found!";
    } else {
        echo "The name is not found!!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Array</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Enter your name"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>