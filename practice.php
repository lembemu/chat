<?php

$conn = mysqli_connect("localhost","root","","competency") or die("failed to connect");

        $sql = "SELECT * FROM users WHERE 'user_name' = 'Frank Lembemu' AND 'user_pass' = 'lefra.c' limit 1";
        $res = mysqli_query($conn,$sql);
        if($res){
            if(mysqli_num_rows($res)==1){
                echo "login success!";
            } else{
                echo "login failed. try again";
            }
        } else {
            header("location:.../CHAT/login.html?error=loginFailed");
        }