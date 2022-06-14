<?php
include 'config.php';
include 'functions.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pnumber = $_POST['pnumber'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$submit = $_POST['submit'];

if(isset($submit)){
    if($fname != null && $lname != null && $email != null && $pnumber != null && $pass1 != null && $pass2 != null){
        $sql2 = "SELECT * FROM `users` WHERE 'user_email' = '{$email}'";
        $res = mysqli_query($conn,$sql2);
        $row = mysqli_num_rows($res);
        if($row = 1){
            if($pass1 == $pass2){
                 $username = $fname." ".$lname;
                 $sql = "INSERT INTO `users`  VALUES (NULL, '{$username}', '$email', '$pnumber', '$pass1', NULL, null, 'active')";
                 $res = mysqli_query($conn,$sql);
                 if($res){
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $pass1;
                    header("location:../CHAT/update-image.php?id=".$_SESSION['unique_id']."");
                 } else {
                    header("location:../CHAT/signup.php?error=signupFailed");
                 }
            } else {
                header("location:../CHAT/signup.php?error=passwordDoesnotMatch");
            }
        } else {
            header("location:../CHAT/signup.php?error=emailAlreadyExits");
        }
    } else {
        header("location:../CHAT/signup.php?error=emptyFields");
    }
}