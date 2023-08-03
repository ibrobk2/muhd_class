<?php

$host = "localhost";
$username = "root";
$Password = "";
$db = "muhd";

$conn = mysqli_connect($host, $username, $Password, $db);


if(isset($_POST['btn_reg'])){
//VARIABLES DECLARATIONS
$full_name = $_POST['fname'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pwd'];

if(empty($full_name)){
    echo "
    <script>
        alert('Full Name Required');
        window.location = 'register.php'; 
    </script>
    ";
    die();
}elseif(empty($username)){
    echo "
    <script>
        alert('Username Required');
        window.location = 'register.php';    
    </script>
    ";
    exit();
}
elseif(empty($phone)){
    echo "
    <script>
        alert('Phone Required');
        window.location = 'register.php';  
    </script>
    ";
    exit();
}

elseif(empty($email)){
    echo "
    <script>
        alert('Email Required');
        window.location = 'register.php';   
    </script>
    ";
    exit();
}
else{
    echo "
    <script>
        alert(' Password Required');
        window.location = 'register.php';   
    </script>
    ";
    exit();
}


$sql = "INSERT INTO users (`full_name`, `username`, `phone`, `email`, `pass`) VALUES ('$full_name', '$username', '$phone', '$email', '$pass')";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: login.php");
}
else{
    echo "
    <script>
        alert('Invalid Username or Password');

    </script>
    ";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="register.php" method="post">
            <input type="text" placeholder="Enter Full Name" name="fname"><br>
            <input type="text" placeholder="Enter Username" name="username"><br>
            <input type="text" placeholder="Enter Phone" name="phone"><br>
            <input type="email" placeholder="Enter Email Address" name="email"><br>
            <input type="password" placeholder="Enter Password" name="pwd"><br>
            <button name="btn_reg">Register</button>


        </form>
    </div>
</body>
</html>
