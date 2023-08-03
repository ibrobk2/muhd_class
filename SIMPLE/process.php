<?php
include "../includes/connection.php";

if(isset($_POST['btn_reg'])){
    //variable declarations
    $name = $_POST['inp'];
    $category = $_POST['category'];
    $qty = $_POST['quantity'];
    $cost_price = $_POST['cost_price'];
    $sell_price = $_POST['sell_price'];
    // $category = $_POST['category'];

    $ask = "INSERT INTO product  VALUES (null, '$name', '$category', $qty, $cost_price, $sell_price, NOW())";
    $res = mysqli_query($conn, $ask);

    if($res){
        echo "
        <script>
            alert('Product Added Successfully...');
            window.location = 'manage_product.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('There is an Error...');
            window.location = 'add_product.php';
        </script>
        ";
    }
}



?>