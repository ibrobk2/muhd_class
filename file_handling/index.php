<?php 
include "upload.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
   <style>
     .errors{
       background-color: #feb0fe; 
       width: 30%;
       padding: 4px;
    }

    .error{
        color: brown;
    }
   </style>
</head>
<body>
    <div class="container">
        <?php include "errors.php"; ?>
        <h2>Image Upload</h2>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image" id="image">
            <button type="submit" name="btn_upload">Upload Image</button>
        </form>
    </div>
</body>
</html>