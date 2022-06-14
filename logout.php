<?php
session_start();
include "config.php";
if(isset($_GET['logout'])){
    $sql = "UPDATE users SET user_status = 'offline' WHERE u_id = ".$_SESSION['unique_id'];
    mysqli_query($conn,$sql) or die("Failed to query database");
        session_destroy();
        header('location:../CHAT/login.php');
}
?>