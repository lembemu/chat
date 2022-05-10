<?php
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

if(isset($_POST['login'])){
    $user = mysqli_query($conn,'select * from users');
    if(!$user){
        echo "Error occured! please try again later..";
    } else {
        $row = mysqli_fetch_assoc($user);

        echo "My name is".$row['name'];
    }
}