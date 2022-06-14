<?php
session_start();
include 'config.php';
f (isset($_POST['upload'])) {
 
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./images/" . $filename;
 
    // Get all the submitted data from the form
    $sql = "UPDATE users SET user_pic =".$filename." WHERE u_id=".$_SESSION['unique_id'];
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        header("location:../CHAT/index.php");
    } else {
        echo "<h3>  Failed to upload image!</h3>";
        header("location:../CHAT/update-image.php");
    }
}
      

     
 ?>