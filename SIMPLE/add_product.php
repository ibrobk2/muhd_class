<?php
include "../includes/connection.php";
$data = "";
$product_name = "";
$category = "";
$qty = "";
$sell_price = "";
$cost_price = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

    <div class="container">
    <header>
    
<h2>MIKK INVENTORY</h2>

</header>

   
<?php
   

    include "edit_product.php";
    if($update==true){
    $product_name = $data['product_name'];
    $category = $data['category'];
    $qty = $data['qty'];
    $sell_price = $data['sell_price'];
    $cost_price = $data['cost_price'];
}
    ?>
        <form action="process.php" method="post" id="form1">
        <?php
            if($update==true){

        ?>
        <h2>Update Record</h2>
        <?php }else{ ?>
        <h2>Add Record</h2>
        <?php } ?>
        <input type="text" name="inp" id="inp" placeholder="Add Product" value="<?=$product_name; ?>"> <br>
        <select name="category" id="inp">
            <?php if($update==true){ ?>
        <option value="<?=$product_name; ?>"><?=$product_name; ?></option>
            <?php }else{ ?>
        <option value="">Select Category</option>
        <?php   
        $sql = "SELECT * FROM category";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)): ?>
        <option value="<?= $row['category']; ?>"><?= $row['category']; ?></option>
        <?php endwhile;
            }
        ?>
        </select> <br>
        <input type="text" name="quantity" id="inp" placeholder="Quantity" value="<?=$qty; ?>"> <br>
        <input type="text" name="cost_price" id="inp" placeholder="Cost Price" value="<?=$cost_price; ?>"> <br>
        <input type="text" name="sell_price" id="inp" placeholder="Sell Price" value="<?=$sell_price; ?>"> <br>
        <?php if($update==true){ ?>
        <button name="btn_update" id="btn">Update Product</button>
        <?php }else{ ?>
        <button name="btn_reg" id="btn">Add Product</button>
        <?php } ?>
        </form>
    </div>
</body>
</html>