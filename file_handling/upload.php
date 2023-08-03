<?php
include "server.php";
$errors = array();

if(isset($_POST['btn_upload']) && isset($_FILES['image'])){
//    print_r($_FILES['image']);
//    echo "<br>";
//    var_dump($_FILES['image']);

  $image =  $_FILES['image'];

  $image_name = $image['name'];
  $image_size = $image['size'];
  $image_type = $image['type'];
  $tmp_name = $image['tmp_name'];

  $allowed_ext = array("png", "jpg", "jpeg", "gif");

  $ext = pathinfo($image_name, PATHINFO_EXTENSION);
  $ext_lc = strtolower($ext);


  if(empty($image)){
    array_push($errors, "Please upload a file");
  }

  if($image_size>100000){
    array_push($errors, "File size should be less than 100kb");
  }

  if(!in_array($ext_lc, $allowed_ext)){
    array_push($errors, "File type not Supported");
  }



if(count($errors)==0){
$new_image_name = uniqid("IMG-").".".$ext_lc;

  move_uploaded_file($tmp_name, 'uploads/'.$new_image_name);

  $sql = "INSERT INTO images (image_name) VALUES ('$new_image_name')";
  $res = mysqli_query($conn, $sql);


  if($res){
    header("Location: ./");
  }

}
}


?>
