<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="stylesheet" href="style.css">
    <?php
        include  "../includes/connection.php";

        if (isset($_POST['btn'])) {
            $name = $_POST['categ'];




            $qur = " INSERT INTO category(`category`) VALUES('$name') ";
            $result = mysqli_query($conn, $qur);
           if ($result) {
               echo " <script>
                         alert('Done');
                         window.location = 'add_category.php';
                    </script> ";
              
            //    header('location:add_category.php');
           }
            
        
        
        }
   

    ?>
</head>
<body>
<h2>CATEGORIES</h2>
    <div class="container">
        
    <div class="container3">
     
        <form action="add_category.php" method="post">
        <input type="text" name="categ" required id="inpt" placeholder="Add Category" style=" width:250px;padding:6px"> 
        <button name="btn" id="btn">Send</button>
        </form>
        
    </div>
  
    </div>
    <hr style="border:2px solid tomato">
</body>
</html>