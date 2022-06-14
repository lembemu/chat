 <?php
 session_start();
    include "config.php";
    if(isset($_SESSION['unique_id'])){
        $sql = "SELECT * FROM `users` WHERE u_id =".$_SESSION['unique_id'];
        $res = mysqli_query($conn,$sql);
        if(!$res){
            echo "error";
        } else{
            $row = mysqli_fetch_assoc($res);
        }
    } else {
        header("location:../CHAT/login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
    <link rel="stylesheet" type="text/css" href="icons/css/all.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <script src="assets/js/jQuery.js"></script>
    <title><?php echo $row['user_name']; ?> | COMPETENCY</title>
</head>
<body>
    <div class="header">
        <div class="title">
            <img src="images/logo.png" alt="competency logo">
            <h2>COMPETENCY</h2>
        </div>
        <div class="menu">
            <div class="menu-btn" onclick="changeMenu(this); showMenu();">
                <div id="bar1"></div>
                <div id="bar2"></div>
                <div id="bar3"></div>
            </div>
            <div class="menu-content" id="menu">
                <a href="javascript:void()" class="closebtn" onclick="close()">&times;</a>
                <hr style="border-color: transparent">
                <a href=""><i class="fas fa-user-edit"></i> Edit Profile</a>
                <a href=""><i class="fas fa-user-plus"></i>Add friend</a>
                <a href=""><i class="fas fa-cog"></i>Settings</a>
                <hr>
                    <a href="logout.php?logout"><i class="fas fa-sign-out-alt" name="logout"></i>Logout</a>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="profile">
            <div class="profileImg">
                <img src="images/<?php echo $row['user_pic'] ?>" alt="">
            </div>
            <div class="profile-info">
                <h4><?php echo $row['user_name']; ?></h4>
                <p><?php echo $row['user_status']; ?></p>
            </div>
        </div>
        <div class="search-bar">
            <div class="search-text">
                <span id="show-content">Search friend here..</span>
            </div>
            <div class="show-search">
                <form action="">
                    <input type="search" name="" placeholder="Type here.." id="" autofocus>
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="groups-list">
            <h2><i class="fas fa-users"></i>Groups <span>1</span></h2>
            <hr>
            <div class="group-info">
                    <a href="ginbox.html"><h4>Programming</h4></a>
                <span>102 messages</span>
            </div>
        </div>
        <div class="friends-list">
            <?php 
                $num_of_friends = mysqli_query($conn, "SELECT COUNT(user_name) FROM users INNER JOIN BY sender_id ");
            ?>
            <h2><i class="fas fa-user-friends"></i>Friends <span>2</span></h2>
            <hr>
            <?php
                $sql2 = " select distinct u_id, user_name , user_pic, user_status from users, messages where users.u_id=messages.sender_id and receiver_id =".$_SESSION['unique_id']." order by msg_id desc";
                $res = mysqli_query($conn,$sql2);
                while($row = mysqli_fetch_assoc($res)){
                    $sql3 = "SELECT * FROM users WHERE u_id = ".$row['u_id'];
                    $rest = mysqli_query($conn,$sql3);
                    $sender = mysqli_fetch_assoc($rest);
                    echo '<div class="friend-info">';
                    echo '<a href="images/'.$sender['user_pic'].'"><img src="images/'.$sender['user_pic'].'" alt=""></a>';
                    echo '<div class="info">';
                    echo '<a href="finbox.php?id='.$row['u_id'].'"><h4>'.$sender['user_name'].'</h4></a>';
                    $sql4 =  "select message from messages where sender_id =".$row['u_id']." and receiver_id=".$_SESSION['unique_id']." or sender_id =".$_SESSION['unique_id']." and receiver_id=".$row['u_id']." ORDER BY msg_id desc limit 1";
                    $result = mysqli_query($conn,$sql4) or die("Failed to get the message");
                    $message = mysqli_fetch_assoc($result);
                    foreach( $message as $msg){
                        echo '<p>'.$msg.'</p></div>';
                    }
                    echo '<div class="status">';
                        echo '<span>'.$sender['user_status'].'</span>';
                        echo '<span>7</span>';
                    echo '</div>';
                    echo '</div>';

                    
                }
            ?> 
        </div>
    </div>  
<script src="assets/js/menu.js"></script>
<script src="assets/js/close-menu-content.js"></script>
</body>
</html>