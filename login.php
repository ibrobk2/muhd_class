<?php
//  echo "Login Page";
session_start();
$host = "localhost";
$username = "root";
$Password = "";
$db = "muhd";

$conn = mysqli_connect($host, $username, $Password, $db);

if(isset($_POST['btn_login'])){
    $user = $_POST['username'];
    $password = $_POST['pwd'];

    $query = "SELECT * FROM users WHERE username='$user' AND pass='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)>0){
        $_SESSION['username'] = $user;
        header("Location: dashboard.php");
    }else{
        echo "<p style='color:red;'>Invalid Username/password!</p>";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <h2>User Login</h2>
        <form action="login.php" method="post">
            <!-- <input type="text" placeholder="Enter Full Name" name="fname"><br> -->
            <input type="text" placeholder="Enter Username" name="username"><br>
            <!-- <input type="text" placeholder="Enter Phone" name="phone"><br> -->
            <!-- <input type="email" placeholder="Enter Email Address" name="email"><br> -->
            <input type="password" placeholder="Enter Password" name="pwd"><br>
            <button name="btn_login">Login</button>


        </form>
    </div>
</body>
</html>
