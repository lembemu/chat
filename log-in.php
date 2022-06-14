<?php
/*ob_start();*/
session_start();
include "config.php";
include "functions.php";

$username = $_POST['username'];
$password = $_POST['password'];

if(isset($_POST['login'])){
    if($username != null && $password != null ){
        $sql = "SELECT * FROM `users` WHERE user_name = '{$username}' AND user_pass = '{$password}'";
        $res = mysqli_query($conn,$sql);
        if($res){
            $row = mysqli_fetch_assoc($res);
            if($row['user_name']==$username && $row['user_pass'] == $password){
                $sql2 = "UPDATE users SET user_status = 'active now' WHERE user_pass = '{$password}'";
                mysqli_query($conn,$sql2) or die("Failed to query the databese");
                    $_SESSION['unique_id'] = $row['u_id'];
                    header("location:../CHAT/index.php?success");
            } else{
                header("location:../CHAT/login.php?error=wrongInputs");
            }
        } else {
            header("location:../CHAT/login.php?error=loginFailed");
        }
    } else {
        header("location:../CHAT/login.php?error=emptyFields");
    }
}