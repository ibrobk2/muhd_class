<?php

include "../includes/connection.php";

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sql = $conn->query("DELETE FROM product WHERE id=$id");

    if($sql){
        header("Location: manage_product.php");
    }
    
}


?>