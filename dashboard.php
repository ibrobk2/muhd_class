<?php
session_start();


if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
echo "Dashboard Page";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php"><h2 style="color:red;">Logout</h2></a>
</body>
</html>