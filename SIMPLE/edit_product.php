<?php
include "../includes/connection.php";
$update = false;

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;

    $sql = $conn->query("SELECT * FROM product WHERE id=$id");

    $data = $sql->fetch_assoc();

}



?>