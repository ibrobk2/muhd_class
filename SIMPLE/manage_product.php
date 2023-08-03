<?php 
include "../includes/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Product</title>
    <style>
        body{
            font-family:sans-serif;
            height: 100vh;
            background-image: linear-gradient(45deg, #eee, goldenrod);

        }

        .container{
            display: flex;
            flex-direction: column;
            width: 100%;
            align-items: center;
            margin-top: 20px;
        }

        table{
            width:80%;
            margin: auto;
        }

        th{
            background-color: gray;
            color: azure;
            font-weight: bolder;
        }

        tr:nth-of-type(even){
            background-color: #eee;
        }

        th, td{
            padding: 10px;
            border: none;
            outline: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Manage Product</h2>
        <br>
        <table>
            <tr>
                <th>SNO</th>
                <th>Product_Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Cost_Price</th>
                <th>Sell_Price</th>
                <th>Total_Cost</th>
                <th>Total_Profit</th>
                <th>Date_Added</th>
                <th colspan="2">Action</th>
            </tr>
<?php
$sn = 1;
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);

   while($row = mysqli_fetch_assoc($result)){

    // $total_cost = $row['cost_price']*$row['qty'];  
    // $total_sell = $row['sell_price']*$row['qty'];  
    // $profit = $total_sell-$total_cost;

?>
            <tr>
                <td><?php echo $sn++;  ?></td>
                <td><?php echo $row['product_name'];  ?></td>
                <td><?php echo $row['category'];  ?></td>
                <td><?php echo $row['qty'];  ?></td>
                <td><?php echo $row['cost_price'];  ?></td>
                <td><?php echo $row['sell_price'];  ?></td>
                <td><?php echo $row['cost_price']*$row['qty']; ?></td>
                <td><?php echo  ($row['sell_price']*$row['qty'])-($row['cost_price']*$row['qty']); ?></td>
                <td><?php echo $row['created_on'];  ?></td>
                <td><a href="add_product.php?edit=<?php echo $row['id']; ?>"><button>Edit</button></a></td>
                <td><a href="delete_product.php?delete=<?php echo $row['id']; ?>"><button>Delete</button></a></td>
            </tr>

            <?php } ?>
        </table>
    </div>
</body>
</html>